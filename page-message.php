<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package testTheme
 */
get_header(); ?>

<? 
//modified
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() == true ) : ?>

			<?php if ( is_home() && !is_front_page()) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>


			<?php /* The Important Loop */ ?>
			
			<?php while ( have_posts() ) : the_post(); ?>

					<div style="z-index:2;" id="post-<?php the_ID(); ?>" class="dt-important-post"> 
						<h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						
						</a></h2>
						
						<?php the_excerpt(); ?>

						<?php the_post_thumbnail(); ?>
					
					</div> 

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		<?php rewind_posts(); ?>


		<?php

			$args = array( 'post_type' => 'portfolio_item', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();

			
			echo '<div class=custom>';
					the_title();
			echo '</div>';

			endwhile;

		?>

		<?php

			haha();

		?>



		</main><!-- #main -->




	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
