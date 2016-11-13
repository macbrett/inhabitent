<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>-->

	<header class="entry-header">

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

<div class="journal-title">

	<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
</div>

		<?php if ( 'post' === get_post_type() ) : ?>
<div class="journal-entry-meta">
<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
</div>
</div>



		<?php endif; ?>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
		 <div>
       <button class="black-button"> <a href="<?php the_permalink(); ?>">
                  read more -></a></button>
     </div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

