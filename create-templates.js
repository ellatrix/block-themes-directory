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
            return runner.execSync( 'php pattern.php ' + file + ',' + themeSlug, { encoding: 'utf8' } );
        } catch ( error ) {
            console.log( error );
            return match;
        }
    } );
}

for ( const theme of themes ) {
    if ( ! fs.existsSync( 'themes/' + theme.slug + '/templates' ) ) {
        console.log( 'No templates for ' + theme.slug );
        continue;
    }

    const templates = fs.readdirSync( 'themes/' + theme.slug + '/templates' );

    if ( ! templates.every( ( template ) => template.endsWith( '.html' ) ) ) {
        console.log( 'Templates for ' + theme.slug + ' are not all HTML files' );
        continue;
    }

    for ( const template of templates ) {
        const templateName = template.replace( '.html', '' );
        const templateHTML = replacePatterns( fs.readFileSync( 'themes/' + theme.slug + '/templates/' + template ), theme.slug );
        
        if ( ! allTemplates[ templateName ] ) {
            allTemplates[ templateName ] = [];
        }

        allTemplates[ templateName ].push( {
            title: theme.name,
            html: templateHTML.toString(),
        } );
    }
}

for ( const templateName in allTemplates ) {
    fs.writeFileSync( 'templates/' + templateName + '.json', JSON.stringify( allTemplates[ templateName ] ) );
}
