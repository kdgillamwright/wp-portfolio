<?php

/**
 * Template Name: Custom Contact Template
 * Template Post Type: page
 */

get_header();
?>

<div class="contact-container text-with-shadow">
  <div class="contact-wrapper">
    <div class="contact-header">
      <h1><?php the_title(); ?></h1>
    </div>
    <?php the_content(); ?>
  </div>
</div>

<?php get_footer(); ?>