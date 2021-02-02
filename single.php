<?php
/**
 * Template Name: Single
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
      <div class="col-lg-3 hider-9 left-sidebar">
        <div class="mb-30 pr-10">
          <div class="d-flex">
            <ul class="fs-s mb-30 list-sidebar">
              <div class="fw-6 mb-f-07">Оглавление</div>
              <?php
              set_query_var('post_id',$post->ID);
              get_template_part('theme-helpers/template-parts/contents','list');
              ?>
            </ul>
            <?php get_template_part('theme-helpers/template-parts/share','block'); ?>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row">
          <div class="col-lg-12">
            <h1><?= get_the_title(); ?></h1>
            <div class="mb-20 hider-lg">
              <div class="h4 mb-20">Оглавление</div>
              <ul class="fs-s list-inline list-decor list-angle-right">
              <?php get_template_part('theme-helpers/template-parts/contents','list'); ?>
              </ul>
            </div>
          </div>
        </div>

        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>