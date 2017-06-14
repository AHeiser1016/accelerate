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

<section class="home-page">
	<div class="site-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class='homepage-hero'>
			<h2><span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile. </h2>
		</div>
		<?php endwhile; // end of the loop. ?>
	</div>
</section>

<div class="site-content">
<section class="our-services">
	<h4>Our Services</h4>
		<p>We take pride in our clients and the content we create for them.</p> 
		<p>Here is a brief overview of our offered services</p>
</section>
<div class="all-services">
	<ul id="about-services">
		<?php query_posts('post_type=4&post_type=services'); ?>
			<?php while ( have_posts() ) : the_post();
			$image_1 = get_field("image_1");
			$size ="full";
			?>
		<li class="specific-services">
			<figure>
				<?php echo wp_get_attachment_image($image_1, $size); ?>
			</figure>
			<div id="service-type">
					<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
			</div>
		</li>

			<?php endwhile; //end of the loop. ?>
			<?php wp_reset_query(); //resets the altered query back to the original ?>
		</ul>
	</div>
	<div class="call-to-action">
		<h3>Interested in working with us?   
		<a class="button" href="/accelerate/contact">Contact Us</a></h3>
	</div>
</div>
<?php get_footer(); ?>