<?php
/**
 * Template Name: Reality - Data
 * The template for displaying reality data on a single page.
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

	<section id="primary" class="site-content" style="width:100%">
		<div id="content" role="main" class="about-page">
			
			<!-- php query for deals -->
			<?php
			$args = array( 'post_type' => 'reality_deals' , 'posts_per_page' => 250 );
			$loop = new WP_Query( $args ); ?>
			
			<?php if ( $loop->have_posts() ) : ?>
				<table>
				<tr style="font-size:12px">
				<td>Name</td>
				<td>Type</td>
				<td>Points</td>
				<td>Date</td>
				<td>Time</td>
				<td>Authors</td>
				<td>Cards</td>
				</tr>
				<!-- the loop -->
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
					<tr style="font-size:10px">
					
					<!-- title -->
					<td><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></td>
					
					<!-- maker card -->
					<td>
					<?php $mak = reality_get_maker_card( get_the_ID() );
					echo $mak->description; ?>
					</td>
					
					<!-- points -->
					<td><?php the_deal_points() ?></td>
					
					<!-- date -->
					<td><?php the_date('Y-m-d'); ?></td>
					
					<!-- time -->
					<td><?php the_time(); ?></td>
					
					<!-- authors -->
					<td><?php the_deal_authors(); ?></td>
					
					<!-- card listing -->
					<td><?php the_deal_cards( get_the_ID() , 'text', 'small'); ?></td>
					
					</tr>
				<?php endwhile; ?>
				
				<!-- end of loop -->
				
				<?php wp_reset_postdata(); ?>
			
			<?php else: ?>
				<tr><td>Sorry, no deals could be found</td></tr>
			<?php endif; ?>
			</table>
		</div><!-- #content -->
	</section><!-- #primary -->

</div>

<?php get_footer(); ?>