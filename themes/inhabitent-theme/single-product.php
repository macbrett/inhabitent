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



        <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>

        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

<div class="entry-content">
    <?php the_excerpt(); ?>
  </div><!-- .entry-content -->
          <?php
          // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
            comments_template();
            endif;
          ?>

        <div>
          <?php echo CFS()->get( 'product_price' ); ?>
        </div>

    <?php endwhile; // End of the loop. ?>
    </div>
  </div>

    </main><!-- #main -->
  </div><!-- #primary -->


<?php get_footer(); ?>
