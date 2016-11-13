<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header" >
<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title" ', '</h1>' ); ?>


<div class="journal-title">
<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
</div>

<div class="single-journal-entry-meta">
<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
</div>
</div>

		<!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	<div class="entry-info">

		<div><?php red_starter_entry_footer(); ?></div>


		<div><button class="black-button"> <a href=""><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                   like</a></button>

        <button class="black-button"> <a href=""><i class="fa fa-twitter" aria-hidden="true"></i>
                  tweet</a></button>

        <button class="black-button"> <a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  pin</a></button></div>

</div>
<p class="join">Want to join the discussion? Feel free to contribute!</p>




	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

