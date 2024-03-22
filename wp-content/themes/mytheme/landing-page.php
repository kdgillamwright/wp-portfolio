<?php
/**
 * Template Name: Landing Page
 * Template Post Type: page
 */
?>

<?php
get_header();
?>

<div class="index-container">

  <!-- Updated image-container with circle class -->
  <div class="image-container">
    <div class="circle" style="background-image: url('<?php the_post_thumbnail_url('full') ?>')">
    </div>
  </div>

  <div class=" introduction text-with-shadow">
    <h1>
      <?php the_title(); ?>
    </h1>
    <?php the_content(); ?>
  </div>
</div>

<?php
get_footer();
?>