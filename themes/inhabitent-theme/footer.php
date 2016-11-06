<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">

      <div class="footer-blocks">
        <div class="footer-block-item">
          <div class="contact">
            <h3>Contact Info</h3>
            <p>
              <i class="fa fa-envelope">

              </i>
              <a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
            </p>
            <p>
              <i class="fa fa-phone">

              </i>
              <a href="tel:555-555-5555">555-555-5555</a>
            </p>
            <p>
            <span>
              <i class="fa fa-facebook-square">

              </i>
            </span>
            <span>
               <i class="fa fa-twitter-square">

              </i>
            </span>
            <span>
               <i class="fa fa-google-plus-square">

              </i>
            </span>
          </div>
        </div>
         <div class="footer-block-item">
           <div class="business-hours">
             <h3>Business Hours</h3>
             <p><span class="day-of-week">Monday-Friday:</span>" 9am to 5pm"</p>
              <p><span class="day-of-week">Saturday:</span>" 10am to 2pm"</p>
               <p><span class="day-of-week">Sunday:</span>" Closed"</p>
           </div>
         </div>
          <div class="footer-block-item">
            <div class="text-logo">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

       <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="Logo" width="HERE" height="HERE" />
    </a>




            </div>
          </div>
        </div>
        <div class="site-info">
          <div class="copyright">
            Copyright 2016 Inhabitent
          </div>
        </div>







<!--
<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
	-->

</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
