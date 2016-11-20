<?php /* Template Name: About Page */ ?>




<?php
get_header(); ?>

<div class="about-hero">
  <div class="about-hero-title">
    <h1 class="entry-title">about</h1>
  </div>
</div>

<div class="about-content">
<h2>our story</h2>

<?php

 echo $cfs->get('our_story');

?>

<h2>our team</h2>

<?php

 echo $cfs->get('our_team');

?>

</div>



<?php get_footer(); ?>
