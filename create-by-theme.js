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
            return '';
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

    const parts = fs.readdirSync( 'themes/' + theme.slug + '/parts' );
    const processedParts = [];

    for ( const part of parts ) {
        if ( ! part.endsWith( '.html' ) ) continue;

        const templateHTML = replacePatterns( fs.readFileSync( 'themes/' + theme.slug + '/parts/' + part ), theme.slug );

        processedParts.push( {
            name: part.replace( '.html', '' ),
            html: templateHTML.toString(),
        } );
    }

    const templates = fs.readdirSync( 'themes/' + theme.slug + '/templates' );
    const processedTemplates = [];

    for ( const template of templates ) {
        if ( ! template.endsWith( '.html' ) ) continue;

        const templateHTML = replacePatterns( fs.readFileSync( 'themes/' + theme.slug + '/templates/' + template ), theme.slug );
        
        processedTemplates.push( {
            name: template.replace( '.html', '' ),
            html: templateHTML.toString(),
        } );
    }

    fs.writeFileSync( 'by-theme/' + theme.slug + '.json', JSON.stringify( {
        'theme.json': themeJson,
        'parts': processedParts,
        'templates': processedTemplates,
    } ) );
}
