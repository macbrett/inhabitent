<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="journal-site-content">

	<div id="primary" class="content-area-body">
		<main id="main" class="site-main-findus" role="main">
			

	

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
<h1>We take camping very seriously</h1>
<p class="find-us-data">Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal&nbsp;axes, we’ve got your covered.&nbsp;Please contact us below with any questions comments or suggestions.</p>
			<?php endwhile; // End of the loop. ?>

<h1>send us email!</h1>
     
<div class="contact-form-7">

<div class="text-fields">
	<?php echo do_shortcode( '[contact-form-7 id="179" title="inhabitent2"]' ); ?>
</div>



	</div>


</main><!-- #main -->

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
