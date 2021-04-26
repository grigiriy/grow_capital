<?php
/**
 * Template Name: Single
 */
global $icons;

get_header(); ?>

<section class="header mb-60">
  <div class="container-w">
    <div class="row mb-20 pt-40">
      <div class="col-xl-12 fs-xs fw-3">
        <?php get_template_part('theme-helpers/template-parts/breadcrumbs'); ?>
      </div>
    </div>
    <div class="row mb-30">
      <?php get_template_part('theme-helpers/template-parts/share','block'); ?>
      <div class="col-lg-12">
        <div class="mb-20 hider-lg">
          <div class="h4 mb-20">Оглавление</div>
          <ul class="fs-s list-inline list-decor list-angle-right">
          <?php
          set_query_var( 'post_id', $post->ID );
          get_template_part('theme-helpers/template-parts/contents','list'); ?>
          </ul>
        </div>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>