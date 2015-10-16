<?php
/**
 * Template part for displaying my post
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package simple
 */
?>

<div class="myPostContainer" id="id-<?php the_ID(); ?>">
	<div class="myPostTitle">
		<?php the_title()?>
	</div>
	<div class="myPostBody">
		<?php the_post()?>
	</div>
	<div class="myPostDate">
		<?php the_date()?>
	</div>




</div>
