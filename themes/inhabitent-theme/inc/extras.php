<?php
/**
* Custom functions that act independently of the theme templates.
*
* @package RED_Starter_Theme
*/

/**
* Adds custom classes to the array of body classes.
*
* @param array $classes Classes for the body element.
* @return array
*/
function red_starter_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }

    return $classes;
}


function my_login_logo() { ?>
  <style type="text/css">
      #login h1 a, .login h1 a {
          background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
          padding-bottom: 30px;
           background-size: 310px !important; width: 310px !important;background-position: bottom !important;
      }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/**
* Custom About Page background image
*/
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

/*set posts to 16*/

function get_all_product_posts ($query) {
  if ( is_post_type_archive('product') && !is_admin() && $query->is_main_query()){
    $query->set('posts_per_page', '16');
    $query->set('orderby', 'title');
    $query->set('order', 'ASC' );

  }

}
add_action( 'pre_get_posts', 'get_all_product_posts');

/*is_tax.....*/


function display_custom_archive_title($title){

if(is_post_type_archive('product')){

  $title = "Shop Stuff";
}

  return $title;

      }

add_filter( 'get_the_archive_title', 'display_custom_archive_title');


function enqueue_our_required_stylesheets(){
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

function red_wp_trim_excerpt( $text ) {
    $raw_excerpt = $text;
    if ( '' == $text ) {
        // retrieve the post content
        $text = get_the_content('');
        // delete all shortcode tags from the content
        $text = strip_shortcodes( $text );
        $text = apply_filters( 'the_content', $text );
        $text = str_replace( ']]>', ']]&gt;', $text );
        // indicate allowable tags
        $allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
        $text = strip_tags( $text, $allowed_tags );
        // change to desired word count
        $excerpt_word_count = 50;
        $excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );
        // create a custom "more" link
        $excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more">Read more &rarr;</a></p>'; // modify excerpt ending
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );
        // add the elipsis and link to the end if the word count is longer than the excerpt
        $words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );
        if ( count( $words ) > $excerpt_length ) {
            array_pop( $words );
            $text = implode( ' ', $words );
            $text = $text . $excerpt_more;
        } else {
            $text = implode( ' ', $words );
        }
    }
    return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}
remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'red_wp_trim_excerpt' );