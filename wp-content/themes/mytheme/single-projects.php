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
            <?php the_post_thumbnail(); ?>
            <h1>
                <?php the_title(); ?>
            </h1>
            <div>
                <span>
                    <?php echo get_the_date(); ?>
                </span>
                <span>By <a href="<?= esc_url(get_author_posts_url(get_the_author_meta('ID', $authorId))); ?>">
                        <?= get_the_author_meta('display_name', $authorId); ?>
                    </a> </span>
                <span>In
                    <?php the_category(' '); ?>
                </span>
            </div>
            <?php the_content(); ?>
        </article>
    </div>
</div>

<?php
get_footer();
?>