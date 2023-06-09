const fs = require( 'fs' );
const lodash = require( 'lodash' );

const themes = JSON.parse( fs.readFileSync( 'bypopularity.json' ) );

const variations = [];
const variationsFromThemesOfferingStyles = [];

function mergeTreesCustomizer( _, srcValue ) {
	// We only pass as arrays the presets,
	// in which case we want the new array of values
	// to override the old array (no merging).
	if ( Array.isArray( srcValue ) ) {
		return srcValue;
	}
}

function withPathFix( file, theme ) {
    return file.toString().replace( /file:\./g, 'https://raw.githubusercontent.com/ellatrix/block-themes-directory/main/themes/' + theme.slug );
}

for ( const theme of themes ) {
    if ( ! fs.existsSync( 'themes/' + theme.slug + '/theme.json' ) ) {
        console.log( 'No theme.json for ' + theme.slug );
        continue;
    }

    const themeJson = JSON.parse( withPathFix( fs.readFileSync( 'themes/' + theme.slug + '/theme.json' ), theme ) );
    const variation =  {
        slug: theme.slug,
        $schema: themeJson.$schema,
        version: themeJson.version,
        title: theme.name,
        styles: themeJson.styles,
        settings: themeJson.settings,
    };

    variations.push( variation );

    if ( ! fs.existsSync( 'themes/' + theme.slug + '/styles' ) ) {
        continue;
    }

    const styles = fs.readdirSync( 'themes/' + theme.slug + '/styles' );

    if ( ! styles.every( ( style ) => style.endsWith( '.json' ) ) ) {
        continue;
    }

    variationsFromThemesOfferingStyles.push( variation );

    for ( const style of styles ) {
        const styleJson = JSON.parse( withPathFix( fs.readFileSync( 'themes/' + theme.slug + '/styles/' + style ), theme ) );
        const subVariation = {
            ...lodash.mergeWith( {}, variation, styleJson, mergeTreesCustomizer ),
            title: theme.name + ' - ' + styleJson.title,
        };

        variations.push( subVariation );
        variationsFromThemesOfferingStyles.push( subVariation );
    }
}

fs.writeFileSync( 'variations.json', JSON.stringify( variations ) );
fs.writeFileSync( 'variations-from-themes-offering-styles.json', JSON.stringify( variationsFromThemesOfferingStyles ) );
