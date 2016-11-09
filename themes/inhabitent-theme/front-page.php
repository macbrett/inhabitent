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


$terms = get_terms( array(
    'taxonomy' => 'post_tag',
    'hide_empty' => false,
) );

<?php

$id = get_the_ID();
$taxonomy = 'your-taxonomy';
$terms = get_the_terms( $id, $taxonomy );
foreach ($terms as $term){

  // Here you can display the terms how you want

  echo 'TERM: '.$term->name;
}
?>








<div class="inhabitent-journal-container">
<h2>Inhabitent Journal</h2>

<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC','posts_per_page' => 3);
   $journal_posts = get_posts( $args ); // returns an array of posts
?>


<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>


<?php the_post_thumbnail(["200px,200px"] ); ?>
<a href="<?php the_permalink(); ?>"</a>

   <div class="front-page-posts">
    <?php the_meta(); ?><br>
     <?php the_date(); ?><br>
      <?php the_title(); ?><br>
      <?php get_the_term_list( $id, $taxonomy, $before, $sep, $after ) ?>
      <?php get_the_term_list( $post->ID, 'taxname', '', ', ', '');?>

  </div>
</div>

<?php endforeach; wp_reset_postdata(); ?>

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
</div>


</section>
  <p class="see-more"></p>
</section>


    </main><!-- #main -->
  </div><!-- #primary -->


<?php get_footer(); ?>