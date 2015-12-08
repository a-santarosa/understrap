<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

<nav class="site-navigation">
				<?php // substitute the class "container-fluid" below if you want a wider content area ?>
					<div class="container">
						<div class="row">
							<div class="site-navigation-inner col-sm-12">
								<div class="navbar navbar-default">
									<div class="navbar-header">
									<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
										<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
									  <span class="icon-bar"></span>
									  <span class="icon-bar"></span>
									  <span class="icon-bar"></span>
									</button>

									<!-- Your site title as branding in the menu -->
									<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
								  </div>

								<!-- The WordPress Menu goes here -->
							<?php wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
									'menu_class' => 'nav navbar-nav',
									'fallback_cb' => '',
									'menu_id' => 'main-menu',
									'walker' => new wp_bootstrap_navwalker()
								)
							); ?>

								</div><!-- .navbar -->
							</div>
						</div>
					</div><!-- .container -->
			</nav><!-- .site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
