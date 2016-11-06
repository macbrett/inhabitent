<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

COMMENTING THIS OUT FOR TESTING

	<!--<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div>-->

		<!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<!-- this is the code that puts the header title and metaon picture -->

<div class="header-wrap" style="background: url('<?php echo $backgroundImg[0]; ?>')bottom center no-repeat; height:438px; width:640px;">
  <header class="entry-header">

     <h1 class="entry-title"><?php the_title(); ?></h1>
     <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
</header>

<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
			</div>
			</div>
	<!-- this is the end of the code that puts the title on and meta on picture -->
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
