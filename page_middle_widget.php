<?php
/*
Template Name: Middle Widget Page
*/

/**
 * page template
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', false ); ?>
			<?php endwhile; // end of the loop. ?>

<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Middle Widget Area')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?>

<?php get_sidebar(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>