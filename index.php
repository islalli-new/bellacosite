<?php require_once("app/app.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Browser Config -->
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="canonical" href="<?php echo $base_url; ?>" />  <!-- URL Canonica -->
        
        <!-- Stylesheets -->
        <link href="<?php echo $base_url; ?>skin/css/style.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- App Config -->
        <title><?php echo $title_pag; ?></title>

        <link rel="manifest" href="<?php echo $base_url; ?>manifest.json">
        <meta name="description" content="<?php echo $desc_pag; ?>">
        <meta name="author" content="<?php echo $author_app; ?>">
        <meta name="application-name" content="<?php echo $app_name; ?>">
        <meta name="msapplication-TileColor" content="<?php echo $color_base; ?>">
        <meta name="theme-color" content="<?php echo $color_base; ?>">
        <meta name="apple-mobile-web-app-title" content="<?php echo $app_name; ?>">
        
        <!-- Icones -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url; ?>skin/img/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url; ?>skin/img/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url; ?>skin/img/icons/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $base_url; ?>site.webmanifest">
        <link rel="mask-icon" href="<?php echo $base_url; ?>safari-pinned-tab.svg" color="<?php echo $color_base; ?>">

        <!-- OpenGraph -->
        <meta property="og:locale" content="pt_BR">
        <meta property="og:url" content="<?php echo $base_url; ?>">
        <meta property="og:site_name" content="<?php echo $app_name; ?>">
        <meta property="og:title" content="<?php $title_pag; ?>">
        <meta property="og:description" content="<?php $desc_pag; ?>">
        <meta property="og:image" content="<?php echo $base_url; ?>skin/img/icons/share-image.jpg">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200"> 
        <meta property="og:image:height" content="1008"> 
        <meta property="og:type" content="website">
        <meta property="fb:app_id" content="<?php echo $fbapp_id; ?>">
        <!-- Fim OpenGraph -->
    </head>
<body>

<? include($layout); ?>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/1bdbdac965.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo $base_url; ?>vendor/bootstrap5/bootstrap.min.js"></script>
</body>
</html>