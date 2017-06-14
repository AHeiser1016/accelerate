<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
      <div class='the-404-page'>
        <div class="the-404-icon">
        <img src="../accelerate/wp-content/uploads/2017/05/sign.jpg" alt="error icon">
        </div>
      <div class="the-404-error-message">
        <h2>Whoops, Took a Wrong Turn...</h2>
        <p>Sorry, this page no longer exists, never existed or has been moved.  We feel like complete jerks for totally misleading you.</p>
        <p>Feel free to take a look around our <span>blog</span> or some of our featured <span>work</span></p>
      </div>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>