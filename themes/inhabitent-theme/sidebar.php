<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
    <div class="contact-info">

      <h2>contact</h2>
          <ul>
              <li>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>778-456-7891</p>
                </li>
                <li>
                  <i class="fa fa-envelope" aria-hidden="true"></i></i>
                    <a href="mailto:info@inhabitent.com>twitter">info@inhabitent.com</a>
                </li>
                <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  1490 W Broadway
                  Vancouver, BC V6H 1H5</a>
                </li>

            </ul>
        </div>

<div id="secondary" class="widget-area" role="complementary">

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
