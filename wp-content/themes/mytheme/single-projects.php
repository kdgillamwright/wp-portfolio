<?php
/**
 * Template for displaying a single project
 */
get_header();
$authorId = get_post_field('post_author');
?>

<div class="single-post-container">
    <div class="single-post-wrapper">
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <div>
                <h1>
                    <?php the_title(); ?>
                </h1>
            </div>
            <div>
                <?php
                // Check if the ACF function exists (plugin installed and activated)
                if (function_exists('get_field')) {
                    // Get the value of the ACF field 'Link' from the 'Project-Link' field group
                    $deployment_link = get_field('Link');

                    // Display the deployment link if it exists
                    if ($deployment_link) {
                        echo '<div class="deployment"><a href="' . esc_url($deployment_link) . '" target="_blank">Demo</a></div>';
                    }
                }
                ?>
            </div>

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