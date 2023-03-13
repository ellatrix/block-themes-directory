const fs = require( 'fs' );
const path = require( 'path' );
const { globSync } = require( 'glob' );
const themes = JSON.parse( fs.readFileSync( 'bypopularity.json' ) );

const allTemplates = {};

function replacePatterns( string, themeSlug ) {
    return string.toString().replace( /\<\!\-\- wp\:pattern \{"slug"\:"([a-zA-Z0-9-/]+)"\} \/\-\-\>/g, ( match, $1) => {
        const runner = require( 'child_process' );
        const fileName = path.basename( $1 + '.php' );
        const [ file ] = globSync( 'themes/' + themeSlug + '/**/' + fileName );
        if ( ! file ) return match;
        console.log( file );
        try {
            const output = runner.execSync( 'php pattern.php ' + file + ',' + themeSlug, { encoding: 'utf8' } );
            // console.log( output );
            return output;
        } catch ( error ) {
            console.log( error );
            return match;
        }
    } );
}

function replaceTemplateParts( string, themeSlug ) {
    return string.toString().replace( /\<\!\-\- wp\:template-part (\{[^\}]+\}) \/\-\-\>/g, ( match, $1 ) => {
        const runner = require( 'child_process' );
        try {
            $1 = Buffer.from($1).toString('base64');
            console.log( 'php template-part.php ' + $1 + ',' + themeSlug );
            const output = runner.execSync( 'php template-part.php ' + $1 + ',' + themeSlug, { encoding: 'utf8' } );
            console.log( output );
            return output;
        } catch ( error ) {
            console.log( error );
            return match;
        }
    } );
}

for ( const theme of themes ) {
    if ( ! fs.existsSync( 'themes/' + theme.slug + '/parts' ) ) {
        console.log( 'No template parts for ' + theme.slug );
        continue;
    }

    if ( ! fs.existsSync( 'themes/' + theme.slug + '/theme.json' ) ) {
        console.log( 'No theme.json for ' + theme.slug );
        continue;
    }

    const themeJson = JSON.parse( fs.readFileSync( 'themes/' + theme.slug + '/theme.json' ) );

    if ( ! themeJson.templateParts ) {
        console.log( 'No template parts in theme.json for ' + theme.slug );
        continue;
    }

    const templates = fs.readdirSync( 'themes/' + theme.slug + '/parts' );

    if ( ! templates.every( ( template ) => template.endsWith( '.html' ) ) ) {
        console.log( 'Template parts for ' + theme.slug + ' are not all HTML files' );
        continue;
    }

    for ( const template of templates ) {
        const templateName = template.replace( '.html', '' );
        const templateInfo = themeJson.templateParts.find( ( part ) => part.name === templateName );

        if ( ! templateInfo || ! templateInfo.area ) {
            console.log( 'No template part info for ' + templateName + ' in ' + theme.slug );
            continue;
        }

        const templateHTML = replaceTemplateParts( replacePatterns( fs.readFileSync( 'themes/' + theme.slug + '/parts/' + template ), theme.slug ), theme.slug );
        
        if ( ! allTemplates[ templateInfo.area ] ) {
            allTemplates[ templateInfo.area ] = [];
        }

        allTemplates[ templateInfo.area ].push( {
            title: theme.name + ' - ' + templateInfo.title,
            html: templateHTML.toString(),
        } );
    }
}

for ( const area in allTemplates ) {
    fs.writeFileSync( 'parts/' + area + '.json', JSON.stringify( allTemplates[ area ] ) );
}
