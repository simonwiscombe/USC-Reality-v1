<?php
/**
 * Template Name: Reality - Wild
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

<?php
	$cardName = array(
		"COUNTER PUNCH",
		"SELF-DESTRUCT",
		"DOUBLE TIME",
		"HALF LIFE",
		"TIME WARP",
		"CARD SWAP",
		"PROFICIENCY",
		"GLASS-JAW",
		"CARDS BANANZA",
		"FAVORITES",
		"EVIL TWIN",
		"SECONDS",
		"GENEROSITY"
	);
	
	$cardDescription = array(
		"The cards used in this deal are not punched this time.",
		"Destroy this card.",
		"Points for this deal are doubled.",
		"Points for this deal are halved.",
		"Points for this deal will be submitted next week.",
		"For the next week all players may visit the game office and trade in unpunched cards for a new, randonly chosen card.",
		"All deals submitted, after and including this deal, get 25 bonus points.",
		"All the cards used in the deal are punched twice (if possible).",
		"Everyone who visits the office this week gets a free card.",
		"Elect one player to receive new cards in a game of Reality War.",
		"The next team to submit a deal recieves new cards equal to half the number of cards submitted to this deal.",
		"The team receives new cards equal to half the number of cards attached to the submitted deal.",
		"A deal (from this week) of the group's choosing gets its points doubled, but none of the players that worked on the submitted deal can be attached to the deal they choose."
	);
	
	$cardPowerup = array(
		" ",
		" ",
		" ",
		" ",
		" ",
		" ",
		" ",
		" ",
		" ",
		" ",
		" ",
		" ",
	);

	$randNum = Rand(1, 100);
	$num = 0;

	if ($randNum <= 10) {
		$num = 0;
	} else if ( $randNum <= 20 ) {
		$num = 1;
	} else if ( $randNum <=30){
		$num = 2;
	} else if ($randNum<=40) {
		$num = 3;
	} else if ($randNum<=50){
		$num = 4;
	} else if ($randNum<=60){
		$num = 5;
	} else if ($randNum<=70){
		$num = 6;
	}else if ($randNum<=80){
		$num = 7;
	}else if ($randNum<=84){
		$num = 8;
	}else if ($randNum<=89){
		$num = 9;
	}else if ($randNum<=93){
		$num = 10;
	}else if ($randNum<=97){
		$num = 11;
	}else{
		$num = 12;
	}
?>

<div class="wrapper">

	<section id="primary" class="site-content">
		<div id="content" role="main" class="wild-page">
			<div id="cards" class="wild-card-box">
				<div class="wild-card-front">
					<div class="wild-card-front-content">
						<p><?php echo $cardDescription[$num] ?></p>		
						<h1><?php echo $cardName[$num] ?></h1>
						<h2><?php echo $cardPowerup[$num] ?></h2>
 					</div>
				</div>
				<div class="wild-card-back"></div>
			</div>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'content', 'page' ); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			<p><span style="color: #000"><?php echo $num ?></span></p>

		</div><!-- #content -->
	</section><!-- #primary -->

</div>

<?php get_footer(); ?>