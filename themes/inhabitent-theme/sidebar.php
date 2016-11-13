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
<div class="sidebar-block">
<div class="sidebar-block-content">
    <div class="contact-info">

      <h2>contact</h2>
          <ul>
              <li>
                <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                <span>778-456-7891</span>
                </li>
                <li>
                  <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <span><a href="mailto:info@inhabitent.com>twitter">info@inhabitent.com</a></span>
                </li>
                <li>
                    <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                  <span>1490 W Broadway,<br>
                  Vancouver, BC V6H 1H5</span>
                </li>

            </ul>
        </div>

<div id="secondary" class="widget-area" role="complementary">

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
</div>
</div>