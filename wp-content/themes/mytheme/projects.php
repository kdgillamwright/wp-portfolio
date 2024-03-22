<?php
/**
 * Template Name: Custom Projects Page
 * Template Post Type: page
 */
get_header();
?>

<div class="projects-container text-with-shadow">
  <h1 class="page-title">
    <?php the_title(); ?>
  </h1>

  <?php
  $args = array(
    'post_type' => 'projects', // Change 'post' to your custom post type if applicable
    'posts_per_page' => -1, // Display all posts, you can adjust as needed
  );
  $query = new WP_Query($args);

  if ($query->have_posts()): ?>
    <div class="card-grid-container">
      <?php while ($query->have_posts()):
        $query->the_post(); ?>
        <div <?php post_class('card-body'); ?> id="post-<?php the_ID(); ?>">

          <?php the_post_thumbnail(); ?>

          <h3 class="card-title"><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a></h3>
          <div class="card-meta">
            <span class="card-date">
              <?= get_the_date(); ?>
            </span>
            <span class="card-author">By
              <a href="<?= esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                <?= get_the_author_meta('display_name'); ?>
              </a>
            </span>
          </div>

          <!-- App type -->
          <div>
            <span>Type: </span>
            <?php
            $terms = get_the_terms($post->ID, 'project_type_category');

            foreach ($terms as $term) {

              $term_link = get_term_link($term, 'project_type_category');

              if (is_wp_error($term_link))
                continue;

              echo $term->name;

            }
            ?>
          </div>

          <!-- Technologies -->
          <div>
            <span>Technologies: </span>
            <?php
            $terms = get_the_terms($post->ID, 'technology_category');

            foreach ($terms as $term) {

              $term_link = get_term_link($term, 'technology_category');

              if (is_wp_error($term_link))
                continue;

              echo $term->name;

            }
            ?>
          </div>
          <div class="card-text">
            <?php echo wp_trim_words(get_the_excerpt(), 55, '<a href="' . esc_url(get_permalink()) . '">
                             <div class="read-more"> Read More...</a></div>'); ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <p class="no-results">Sorry, no projects were found.</p>
    <?php endif; ?>
    <?php get_template_part('template-parts/pagination'); ?>
  </div>

  <?php get_footer(); ?>