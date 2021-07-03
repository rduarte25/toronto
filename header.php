<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<title><?php wp_title( '' ); ?> <?php if( wp_title( '', false ) ) { echo ' : '; } ?> <?php bloginfo( 'name' ); ?></title>
</head>
<body <?php body_class(); ?>>
	<div id="page">
		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="">
					</a>					
				</div>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array(
						'theme-location' => 'menu_principal',

					) ); ?>
				</nav>
				<div class="clear"></div>
			</div>
		</header>
		<div id="contenido" class="contenedor">