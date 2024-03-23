<?php

/**
 * Template for displaying a single project
 *
 */

get_header();

$authorId = get_post_field('post_author');

?>
<div class="single-post-container">
    <div class="single-post-wrapper">
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h1>
                <?php the_title(); ?>
            </h1>
            <div>
                <?php the_content(); ?>
                <?php the_post_thumbnail('custom-thumbnail'); ?>
            </div>
        </article>
    </div>
</div>

<?php
get_footer();
?>