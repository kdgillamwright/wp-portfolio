<?php
/**
 * Template Name: Custom Projects Page
 * Template Post Type: page
 */
get_header();
?>

<div class="projects-container">
  <div class="project-wrapper">
    <?php
    $args = array(
      'post_type' => 'projects',
      'posts_per_page' => -1,
    );
    $query = new WP_Query($args);

    if ($query->have_posts()): ?>
      <div class="card-grid-container">
        <div>
          <h1 class="page-title text-with-shadow">
            <?php the_title(); ?>
          </h1>
        </div>
        <?php while ($query->have_posts()):
          $query->the_post(); ?>
          <div class="card-body" id="post-<?php the_ID(); ?>">
            <div class="card-image">
              <?php the_post_thumbnail('custom-thumbnail'); ?>
            </div>
            <div class="card-content">
              <h3 class="card-title"><a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a></h3>
              <!-- Technologies -->
              <div class="technologies">
                <span>Technologies: </span>
                <?php
                $terms = get_the_terms($post->ID, 'technology_category');
                foreach ($terms as $term) {
                  $term_link = get_term_link($term, 'technology_category');
                  if (is_wp_error($term_link))
                    continue;
                  echo '<span class="technologies-list">' . $term->name . '</span>';
                }
                ?>
              </div>
              <div class="card-text">
                <?php echo wp_trim_words(get_the_excerpt(), 55, '<div class="learnMore-wrapper"><a class="learnMore" href="' . esc_url(get_permalink()) . '" class="button">Learn More...</a></div>'); ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <p class="no-results">Sorry, no projects were found.</p>
    <?php endif; ?>
    <?php get_template_part('template-parts/pagination'); ?>
  </div>
</div>

<?php get_footer(); ?>
</div>
</div>

<?php get_footer(); ?>
</div>