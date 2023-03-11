if ( typeof wp !== 'undefined' &&  typeof wp.domReady === "function" && typeof gutena_theme_admin !== 'undefined') {
    wp.domReady(function(){
        //dismiss notice
        setTimeout(() => {
            ["gutena_recommended_plugin_notice", "gutena_two_theme_update_notice" ].forEach( function( notice_id ){
                var gutena_admin_notice_btn = document.querySelector( "#"+notice_id+" .notice-dismiss");
                if ( typeof gutena_admin_notice_btn !== 'undefined' && gutena_admin_notice_btn != null ) {
                    gutena_admin_notice_btn.addEventListener('click', function (event) {
                        fetch(gutena_theme_admin.ajax_url, {
                            method: 'POST',
                            credentials: 'same-origin', // <-- make sure to include credentials
                            headers:{
                                'Content-Type': 'application/x-www-form-urlencoded',
                                'Accept': 'application/json',
                                'X-WP-Nonce' : gutena_theme_admin.nonce
                            },
                            body: new URLSearchParams({
                                'action': 'dismiss_gutena_admin_notice',
                                'gutena_security': gutena_theme_admin.nonce, 
                                'notice_id': notice_id,
                            })
                        })
                        .then(function(response) { 
                            return response.json()
                        })
                        .then(function(data) {   
                        
                        });
                    });
                }
            });
        }, 1000);
    });
}
