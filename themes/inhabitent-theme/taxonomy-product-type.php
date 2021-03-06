<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



  <div id="primary" class="content-area-body">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>
      <header class="page-header">
        <div class="archive-title">
          <h1><?php echo str_replace('Product Type: ','',get_the_archive_title()); ?></h1>
            <p><?php echo term_description() ?></p>
        </div>
      </header><!-- .page-header -->

        <div class="product-grid">
          <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="product-grid-item">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                  <div class="product-grid-item-info">
                     <div class="title"><?php the_title(); ?></div>
                        <div><p>............................</p></div>
                          <div class="price"><?php echo CFS()->get( 'product_price' ); ?>
                        </div>
                      </div>
                  </div>
              <?php endwhile; ?>

              <!--<?php the_posts_navigation(); ?>-->

            <?php else : ?>
              <?php get_template_part( 'template-parts/content', 'none' ); ?>
          <?php endif; ?>
        </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
