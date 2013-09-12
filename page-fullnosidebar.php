<?php
/**
 * Template Name: Reality - Full No Sidebar Page
 * The template for displaying full-width page with no sidebar.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="wrapper">

	<section id="primary" class="site-content">
		<div id="content" role="main" class="about-page">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'content', 'page' ); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</section><!-- #primary -->

</div>

<?php get_footer(); ?>