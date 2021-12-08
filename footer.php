<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package subliquidawp
 */

?>

	<footer id="colophon" class="site-footer hover-background">
	
	<!-- TO NOT DISPLAY FOOTER NAV IN UNDER-CONSTRUCTION PAGE -->
	<?php if (! is_page('under-construction')) : ?>
	
		<div class="split">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer-menu-1',
						'menu_class'        => 'footer-menu',
					)
				);
				wp_nav_menu(
					array(
						'theme_location' => 'menu-4',
						'menu_id'        => 'social-menu',
						'menu_class'        => 'footer-menu social-menu',
					)
				);
				wp_nav_menu(
					array(
						'theme_location' => 'menu-3',
						'menu_id'        => 'footer-menu-2',
						'menu_class'        => 'footer-menu',
					)
				);
			?>
		</div>
	<?php endif; ?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'WordPress' ) ); ?>" target="_blank">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'subliquidawp' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'subliquidawp' ), 'subliquidawp', '<a href="https://alesera.eu/"  target="_blank">___</a>' );
				?>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
