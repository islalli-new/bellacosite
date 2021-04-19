<?php
	require_once("./app/app.php");

	header("Content-type: application/json; charset: UTF-8");

	echo "{ 
 'name': '".$app_name."',
 'short_name': '".$app_name."',
 'theme_color': '".$color_base."',
 'background_color': '".$color_base."',
 'version': '1.0',
 'default_locale': 'pt-br',
 'homepage_url': '".$base_url."',
 'display': 'fullscreen',
 'icons': [
    {
        'src': '".$base_url."android-chrome-192x192.png',
        'sizes': '192x192',
        'type': 'image/png'
    },
    {
        'src': '".$base_url."android-chrome-512x512.png',
        'sizes': '512x512',
        'type': 'image/png'
    }
 ]
}";
?>