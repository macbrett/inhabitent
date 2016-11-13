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

    <div class="home-hero">
<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>" />
    </div>


</div>
    </section>


      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'page' ); ?>

      <?php endwhile; // End of the loop. ?>

<section class = "product-info">
              <div class="product-header">
               <h2> shop stuff </h2>
               </div>
        <div class = "product-type-blocks">


       <?php
          $terms = get_terms(array(
            'taxonomy' => 'product-type',
            'hide_empty' => false
          ));

           foreach ($terms as $term): ?>

<div class = "product-type-blocks-wrapper">
     <span class="blocks-wrapper-image"><img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug?>.svg"></span>
<div class="description">
     <?php echo $term->description ?>
</div>
<div class="term-name">
     <a href="<?php echo get_term_link($term) ?> "><?php echo $term->name . " " . "stuff" ?></a>
     </div>
</div>
<?php endforeach; ?>

</div>
</section>



  <section class="inhabitent-journal">
      <div class="journal-header">
          <h2>Inhabitent Journal</h2>
      </div>

      <div class="journal-blocks">
              <?php
                $args = array( 'post_type' => 'post', 'order' => 'DESC','posts_per_page' => 3);
                $journal_posts = get_posts( $args ); // returns an array of posts
                ?>

              <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>

          <div class="journal-blocks-wrapper">

            <div class="thumbnail-wrapper">
            <?php the_post_thumbnail(); ?>
            </div>

          <div class="data-wrapper">
              <div class="entry-meta">
                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
              </div>

              <h3 class="entry-title">
                  <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?></a>
              </h3>

              <span class="the-title">

                  <button class="black-button"><a href="<?php the_permalink(); ?>">read entry</a></button>

              </span>

          </div>
      </div>


<?php endforeach; wp_reset_postdata(); ?>
</div>
</section>

<div class="latest-adventures-header">
<h2>Latest Adventures</h2>
</div>
<section class="latest-adventures">

            <div class="canoe-girl">
                <span class="adventure-photos">

                <div class="adventure-info">
                  <a href="">Getting Back to Nature in a Canoe</a></span>
                    <div>
                      <button class="adventure-button"><a href="">read more</a></button>
                    </div>
                </div>
            </div>
        <div class="bundle1">
            <div class="beach-bonfire">
                <span class="adventure-photos">
                  <div class="adventure-info">
                  <a href="#">A Night with Friends at the Beach</a>

                </span>
                <div>
                  <button class="adventure-button"><a href="">read more</a></button>
                </div>
                </div>
            </div>

                <div class="bundle2">
                    <div class="mountain-hikers">
                      <span class="adventure-photos">
                          <div class="adventure-info">
                          <a href="#">Taking in the View at Big Mountain</a>
                      </span>
                      <div>
                  <button class="adventure-button"><a href="">read more</a></button>
                </div>
                      </div>
                    </div>
                    <div class="night-sky">
                      <span class="adventure-photos">
                        <div class="adventure-info">
                          <a href="#">Star-Gazing at the Night Sky</a>
                      </span>
                      <div>
                  <button class="adventure-button"><a href="">read more</a></button>
                </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
                <div>
                  <button class="more-button"><a href="">more adventures</a></button>
                </div>

</section>
  <p class="see-more"></p>
</section>


    </main><!-- #main -->
  </div><!-- #primary -->


<?php get_footer(); ?>