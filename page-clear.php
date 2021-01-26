<?php

/**
 * Template Name: Clear
 * Template Post Type: webinars
 */
global $icons;

get_header(); ?>

<section class="header mb-60">
  <div class="container-w">
    <div class="row mb-20 pt-40">
      <div class="col-xl-offset-3 col-xl-9 fs-xs fw-3">
        <?php get_template_part('theme-helpers/template-parts/breadcrumbs'); ?>
      </div>
    </div>
    <div class="row mb-30">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>