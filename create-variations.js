const fs = require( 'fs' );

const themes = JSON.parse( fs.readFileSync( 'bypopularity.json' ) );

const variations = [];

for ( const theme of themes ) {
    if ( ! fs.existsSync( 'themes/' + theme.slug + '/theme.json' ) ) {
        console.log( 'No theme.json for ' + theme.slug );
        continue;
    }

    const themeJson = JSON.parse( fs.readFileSync( 'themes/' + theme.slug + '/theme.json' ) );

    variations.push( {
        name: theme.name,
        styles: themeJson.styles,
        settings: themeJson.settings,
     } );
}

fs.writeFileSync( 'variations.json', JSON.stringify( variations ) );
