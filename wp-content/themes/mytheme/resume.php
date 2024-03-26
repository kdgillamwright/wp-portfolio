<?php

/**
 * Template Name: Custom Resume Template
 * Template Post Type: page
 */

get_header();
?>

<div class="resume-container">
  <div class="resume-wrapper">

    <div class="header  text-with-shadow">
      <h1>
        <?php the_title(); ?>
      </h1>
      <div class="download-wrapper">
        <a class="download"
          href="http://kd.gillamwright.com/wp-content/uploads/2024/03/Kayla-Gillam-Wright-Resume-2024.pdf"
          target="_blank" download>
          Download</a>
      </div>
    </div>
    <?php the_content(); ?>
  </div>

  <?php get_footer(); ?>
</div>