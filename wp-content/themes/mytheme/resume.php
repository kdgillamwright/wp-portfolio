<?php

/**
 * Template Name: Custom Resume Template
 * Template Post Type: page
 */

get_header();
?>

<div class="resume-container">
  <div class="resume-wrapper text-with-shadow">

    <div class="header">
      <h1>
        <?php the_title(); ?>
      </h1>
      <div>
        <button class="download">
          <a href="http://kd.gillamwright.com/wp-content/uploads/2024/03/Kayla-Gillam-Wright-Resume-2024.pdf"
            target="_blank" download>
            Download</a>
        </button>
      </div>
    </div>
    <?php the_content(); ?>
  </div>

  <?php get_footer(); ?>
</div>