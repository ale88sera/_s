<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package subliquidawp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<style>
		body.sub-custom-bg {
			background-image: url("<?php the_post_thumbnail_url() ?>");
		}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class("sub-custom-bg no-sidebar vignette-radial"); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'subliquidawp' ); ?></a>

	<header id="masthead" class="site-header hover-background">
		
	
		<div class="subwp-wrapper">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<div>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;

				$subliquidawp_description = get_bloginfo( 'description', 'display' );

				if ( $subliquidawp_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $subliquidawp_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				</div>
				<?php endif; ?>

			</div><!-- .site-branding -->

			<!-- TO NOT DISPLAY HEADER NAV IN UNDER-CONSTRUCTION PAGE -->
			<?php if (! is_page('under-construction')) : ?>

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'subliquidawp' ); ?><i class="fas fa-bars"></i></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<?php endif; ?>
		
		</div>

	</header><!-- #masthead -->
