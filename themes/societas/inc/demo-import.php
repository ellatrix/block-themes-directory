<?php
function societas_import_files() {
	return array(
		array(
			'import_file_name'           => 'Societas Theme Demo Data',
			'import_file_url'            => 'https://societas.xideathemes.com/wp-content/uploads/societas-businessblocktheme.xml',
			'import_preview_image_url'   => 'https://societas.xideathemes.com/wp-content/uploads/screenshot.JPG',
			'import_notice'              => __( 'After you import this demo, please update permalinks. And create new menus from Appearance > Menus section. To edit web site use Appearance > Editor tool.', 'societas' ),
			'preview_url'                => 'https://societas.xideathemes.com/',
		)
	);
}
add_filter( 'ocdi/import_files', 'societas_import_files' );