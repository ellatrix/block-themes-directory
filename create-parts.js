const fs = require( 'fs' );
const lodash = require( 'lodash' );

const themes = JSON.parse( fs.readFileSync( 'bypopularity.json' ) );

const allTemplates = {};

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

        const templateHTML = fs.readFileSync( 'themes/' + theme.slug + '/parts/' + template );
        
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
