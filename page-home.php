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

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<div class="row">
				<div class="col-sm-4" data-category="image">
					<img src="https://wpmmp.bmcc.cuny.edu/~fgomez/wp-content/uploads/2015/12/culturePoster.png" class="myThumb img-responsive" data-description="#cultureDiv">
					<div id="cultureDiv" style="display:none">
						
					</div>
				</div>
				<div class="col-sm-4" data-category="image">
					<img src="https://wpmmp.bmcc.cuny.edu/~fgomez/wp-content/uploads/2015/12/me.png" class="myThumb img-responsive" data-description="#meDiv">
					<div id="meDiv" style="display:none">
						
					</div>
				</div>
				<div class="col-sm-4" data-category="image">
					<img src="https://wpmmp.bmcc.cuny.edu/~fgomez/wp-content/uploads/2015/12/Helvetica.png" class="myThumb img-responsive" data-description="#helveticaDiv">
					<div id="helveticaDiv" style="display:none">
						
					</div>
				</div>
			</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">MMA Student Work</h4>
      </div>
      <div class="modal-body">
        <img id="modalImage" src="" class="img-responsive">
        <div id="description">
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://www.parsecdn.com/js/parse-1.6.7.min.js"></script>


			<script type="text/javascript">

			

		jQuery(document).ready(function ($){




		$('.myThumb').on('click', function(){
			
			var src = $(this).attr('src');

			//var description = $(this).parent().children('div').clone();
			
			var dataDescription = $(this).attr('data-description');
			var description = $(dataDescription).clone();
			
			$('#description').html(description.html());

			$('#modalImage').attr('src',src);

			$('#myModal').modal('show');

		});

	








		});

		</script>
	</div>

		<div class="felix-posts">

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
					the_content();
			echo '</div>';

			endwhile;

		?>

		<?php


		?>
	</div>

	<style type="text/css">

	.col-sm-4{
		width: 30%;
		position: relative;
		top: -10px;
		left: 120px;
	
	}


	</style>



		</main><!-- #main -->




	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
