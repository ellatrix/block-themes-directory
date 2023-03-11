const fs = require( 'fs' );
const lodash = require( 'lodash' );

const themes = JSON.parse( fs.readFileSync( 'bypopularity.json' ) );

const variations = [];

function mergeTreesCustomizer( _, srcValue ) {
	// We only pass as arrays the presets,
	// in which case we want the new array of values
	// to override the old array (no merging).
	if ( Array.isArray( srcValue ) ) {
		return srcValue;
	}
}

for ( const theme of themes ) {
    if ( ! fs.existsSync( 'themes/' + theme.slug + '/theme.json' ) ) {
        console.log( 'No theme.json for ' + theme.slug );
        continue;
    }

    const themeJson = JSON.parse( fs.readFileSync( 'themes/' + theme.slug + '/theme.json' ) );

    variations.push( {
        title: theme.name,
        styles: themeJson.styles,
        settings: themeJson.settings,
    } );

    if ( ! fs.existsSync( 'themes/' + theme.slug + '/styles' ) ) {
        continue;
    }

    const styles = fs.readdirSync( 'themes/' + theme.slug + '/styles' );

    if ( ! styles.every( ( style ) => style.endsWith( '.json' ) ) ) {
        continue;
    }

    for ( const style of styles ) {
        const styleJson = JSON.parse( fs.readFileSync( 'themes/' + theme.slug + '/styles/' + style ) );

        variations.push( {
            title: theme.name + ' - ' + styleJson.name,
            ...lodash.mergeWith( {}, themeJson, styleJson, mergeTreesCustomizer ),
        } );
    }
}

fs.writeFileSync( 'variations.json', JSON.stringify( variations ) );
