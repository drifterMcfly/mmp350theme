<?php

get_header(); ?>

<? 
//modified
?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<div class="contact">
				<div id="after_submit"></div>
						<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
						  <div class="row">
						    <label class="required" for="name">Your name:</label><br />
						    <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
						    <span id="name_validation" class="error_message"></span>
						  </div>
						  <div class="row">
						    <label class="required" for="email">Your email:</label><br />
						    <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
						    <span id="email_validation" class="error_message"></span>
						  </div>
						  <div class="row">
						    <label class="required" for="message">Your message:</label><br />
						    <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
						    <span id="message_validation" class="error_message"></span>
						  </div>
						    
						    <input id="submit_button" type="submit" value="Send email" />
						</form>
				
			</div>







			</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://www.parsecdn.com/js/parse-1.6.7.min.js"></script>


		
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
		height: 92px;
		position: relative;
		top: -10px;
		left: 120px;

	}

	.custom{
		position: relative;
		top: -660px;
	}

	.row{
		width: 100px;
		height: 50px;
	}

	#message{
		width: 300px;
	}

	
	#primary{
		width: 100%;
		height: 300px;
		background-color: #666;
	}

	.contact{

		position: relative;
		left:250px;
	}

	#submit_button{
		position: relative;
		top: 100px;
	}
	label{color: #A099CA}


	</style>



		</main><!-- #main -->




	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
