<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>


    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php wp_title(''); ?></title>
    
    <!-- <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" /> -->
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" type="text/css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>

    
</head>

<body class="body-bg">
<header role="banner">
<div class="container trans">
	<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
					<a class="main-logo" href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/i/logo.png" alt="<?php bloginfo('name'); ?>" class="img-responsive"/>
					</a>
            </div>
     </div>
</div>
</header>