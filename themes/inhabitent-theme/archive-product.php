<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <?php
          the_archive_title( '<h1 class="page-title">', '</h1>' );
                ?>

      </header><!-- .page-header -->


  <section class = "product-info">
    <div class = "product-type-blocks">

      <?php
          $terms = get_terms(array(
            'taxonomy' => 'product-type',
            'hide_empty' => false
          ));

           foreach ($terms as $term): ?>

      <div class = "product-type-blocks-wrapper">


        <?php echo $term->description ?>

        <a href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a>
      </div>

      <?php endforeach; ?>

    </div>
  </section>



    <div class="product-grid">
      <?php /* Start the Loop */ ?>

      <?php while ( have_posts() ) : the_post(); ?>
      <div class="product-grid-item">

      <?php get_template_part( 'template-parts/content' );?>

      <?php echo CFS()->get( 'product_price' ); ?>

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