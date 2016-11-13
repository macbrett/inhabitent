<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



</header>


  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


    <?php while ( have_posts() ) : the_post(); ?>
<div class="single-content-area">
    <div class="single-image-wrapper">
        <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
    </div>

    <div class="single-content-wrapper">
    <div class="single-product-title">
        <h1><?php the_title(); ?></h1>
    </div>


      <div><p class="price">
        <?php echo CFS()->get( 'product_price' ); ?></p>
      </div>

      <div class="entry-content">
        <?php the_excerpt(); ?>
      </div><!-- .entry-content -->

       <button class="black-button"> <a href=""><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                   like</a></button>

        <button class="black-button"> <a href=""><i class="fa fa-twitter" aria-hidden="true"></i>
                  tweet</a></button>

        <button class="black-button"> <a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  pin</a></button>

          <?php
          // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
            comments_template();
            endif;
          ?>


</div>
      </div>
        <?php endwhile; // End of the loop. ?>
      </div>
    </div>

    </main><!-- #main -->
  </div><!-- #primary -->


<?php get_footer(); ?>
