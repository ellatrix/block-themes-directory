const fs = require( 'fs' );
const lodash = require( 'lodash' );

const themes = JSON.parse( fs.readFileSync( 'bypopularity.json' ) );

const allTemplates = {};

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
        const templateHTML = fs.readFileSync( 'themes/' + theme.slug + '/templates/' + template );
        
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
