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

<section class = "product-info">
               <h1> Shop stuff </h1>
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
     <a href="product-type/<?php echo $term->slug;?> "><?php echo $term->name ?></a>
     </div>
</div>
<?php endforeach; ?>

</div>
</section>



<section class="inhabitent-journal">

<h2>Inhabitent Journal</h2>

<div class="journal-blocks">
<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC','posts_per_page' => 3);
   $journal_posts = get_posts( $args ); // returns an array of posts
?>

<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>

<div class="journal-blocks-wrapper">
    <?php the_post_thumbnail(); ?>

<div class="data-wrapper">
  <span class="date">
    <?php the_date(); ?>
  </span>
<h3 class="entry-title">
    <a href="<?php the_permalink(); ?>">
    <?php the_title(); ?></a>
</h3>
  <span class="the-title">
  <button><a href="#" class="black-button">read entry</a></button>
  </span>

</div>
</div>


<?php endforeach; wp_reset_postdata(); ?>
</div>
</section>


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