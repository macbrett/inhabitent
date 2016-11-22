<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div class="journal-site-content">
	<section id="primary" class="content-area-body">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">


				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


<div class="title-green">
 <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
</div>

      <div class="entry-content">
        <?php the_excerpt(); ?>
      </div><!-- .entry-content -->

		<div>
       <button class="black-button"> <a href="<?php the_permalink(); ?>">
                  read more</a></button>
     </div>

			<?php endwhile; ?>

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
