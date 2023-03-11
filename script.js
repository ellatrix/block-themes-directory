const fs = require( 'fs' );
const extract = require('extract-zip');

(async () => {
    const themesResponse = await fetch(
        'https://api.wordpress.org/themes/info/1.1/?action=query_themes&request[tag]=sticky-post&request[tag]=Full%20Site%20Editing&request[browse]=popular&request[per_page]=300'
    );
    
    const { themes } = await themesResponse.json();

    fs.writeFileSync( 'bypopularity.json', JSON.stringify( themes ) );
    
    for ( const { slug, name } of themes ) {
        console.log( name );

        const resp = await fetch(
            'https://api.wordpress.org/themes/info/1.1/?action=theme_information&request[slug]=' +
                slug
        );
        const themeInfo = await resp.json();

        if ( fs.existsSync( 'themes/' + slug ) ) {
            continue;
        }

        fs.writeFileSync( 'themes/' + slug + '.json', JSON.stringify( themeInfo ) );

        const { download_link: downloadLink } = themeInfo;

        const package = await fetch( downloadLink );
        const blob = await package.arrayBuffer();

        fs.writeFileSync( 'themes/' + slug + '.zip', Buffer.from( blob ) );

        await extract( 'themes/' + slug + '.zip', { dir: __dirname + '/themes' } );
    }
})();
