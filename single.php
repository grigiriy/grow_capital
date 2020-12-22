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
        <!-- <a href="">Знания и аналитика</a> <span class="fc-contr">/</span> Расчет доходности портфеля -->
        <?php get_template_part('theme-helpers/template-parts/breadcrumbs'); ?>
      </div>
    </div>
    <div class="row mb-30">
      <div class="col-lg-3 hider-9">
        <div class="mb-30 pr-60">
          <div class="fw-6 mb-f-07">Оглавление</div>
          <div class="d-flex">
            <ul class="fs-s mb-30 list-sidebar">
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

        <div class="infobl">
          <?php the_content(); ?>
        </div>
        <?php get_template_part('theme-helpers/template-parts/bottom', 'widget'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>