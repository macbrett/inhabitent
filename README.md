# inhabitent

SYNOPSIS

Inhahbitent is a fully funtional wordpress site utilizing a stylish design and breathtaking photographs. 
Built for Inhabitent Camping Supply Co., this site showcases the company's products and commitment to an adventure-seeking 
lifestyle.
The site is an energetic yet serious, with a well-thought out blog section so customers can ask questions and participate 
in the dream.


CODE EXAMPLE

This project made heavy use of PHP, in particular 

<?php the_post_thumbnail(); ?>
<?php the_title(); ?>

                              calls were made to fetch custom field suite values:

function tent_styles_method() {

               if(!is_page_template( 'page-about.php' )){
                   return;
               }

      $url = CFS()->get( 'about_image' );//This is grabbing the background image vis Custom Field Suite Plugin
      $custom_css = "
              .about-hero{
                      background-image: url({$url});
              }";
      wp_add_inline_style( 'red-starter-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'tent_styles_method' );


                            php conditionals were used: 



	<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>
      
                                  as were loops:

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>
      
 
      
      
      
MOTIVATION

This project is part of the building through learning core requirements at RED Academy. The chief motivator for this project
is to strengthen out WordPress and PHP skills

TESTS 

Tests used include theme-check and debug-bar.

Contributors

Contributors include my fabulous classmates and staff at RED Academy

License

This project utilizes MAMP (Apache and mySQL) 
