<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <section class="home-hero">

<div class="logo-header">

</div>
    </section>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'page' ); ?>

      <?php endwhile; // End of the loop. ?>

<h2>Latest Adventures</h2>
<section class="latest-adventures">


    <div class="canoe-girl">
        <span class="adventure-photos"><a href="#">Getting Back to Nature in a Canoe</a></span>
    </div>
    <div class="bundle1">
    <div class="beach-bonfire">
        <span class="adventure-photos"><a href="#">A Night with Friends at the Beach</a></span>
    </div>
    <div class="bundle2">
    <div class="mountain-hikers">
        <span class="adventure-photos"><a href="#">Taking in the View at Big Mountain</a></span>
    </div>
    <div class="night-sky">
        <span class="adventure-photos"><a href="#">Star-Gazing at the Night Sky</a></span>
    </div>
    </div>
    </div>


</section>
  <p class="see-more"></p>
</section>


    </main><!-- #main -->
  </div><!-- #primary -->


<?php get_footer(); ?>