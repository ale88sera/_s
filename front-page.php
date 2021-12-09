<?php
/**
 * The template for displaying the front-page
 *
 * This is the template that displays the front-page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package subliquidawp
 */

get_header();
?>

	<main id="primary" class="site-main subwp-wrapper">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'frontpage' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
