( function ( wp ) {
    wp.data.dispatch( 'core/notices' ).createNotice(
        'info',
        'Do You need more? Get Albacore Premium child theme for more block editor features',
        {
            isDismissible: true,
			type: 'snackbar',
			explicitDismiss: true,
            actions: [
                {
                    url: 'https://wwwows.com/product/albacore-wordpress-theme/',
					label: 'Albacore Premium',
                },
            ],
        }
    );
} )( window.wp );