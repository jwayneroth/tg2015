<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(''); ?></title>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
    <meta name="theme-color" content="#121212">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
		<?php // drop Google Analytics Here ?>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<header id="header" itemscope itemtype="http://schema.org/WPHeader">
			<div class="container">
				<div class="row">
				
					<?php if ( is_singular('project') ): ?>
					<div class="col-sm-10 col-sm-push-2">
					<?php else: ?>
					<div class="col-xs-12 header-inner">
					<?php endif; ?>
					
						<a id="text-logo" class="" href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
				
						<nav class="navbar navbar-center" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<div class="navbar-inner">
								<?php wp_nav_menu(array(
									'container' => false,
									'menu' => __( 'The Main Menu', 'bonestheme' ),
									'menu_class' => 'nav navbar-nav top-nav',
									'theme_location' => 'main-nav'
								)); ?>
							</div>
						</nav>
				
					</div>
				</div>
			</div>
		</header>
