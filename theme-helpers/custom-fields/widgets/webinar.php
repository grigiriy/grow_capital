<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Webinar Form'))
  ->add_fields([
    Field::make('html', 'crb_information_webinar')
      ->set_html('<h2 style="color:blue; padding: 20px;">Форма c вебинаром</h2>'),
    Field::make( 'select', 'webinar_id', 'Вебинар:' )
      ->add_options( get_webinars_arr() ),
    Field::make('checkbox', 'is_gc', 'ссылка на гк'),
    ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {

  $course_id = $fields['webinar_id'];
?>
  <div class="brdc pd-30-9 bg-dark-9 fc-light-9 mb-30 sidebar-widget">
    <div class="brdl-shot">
    </div>
    <div class="facecrd-55">
      <figure class="mb-0">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/chart-4.png" alt="">
        <figcaption class="pl-10">
          <p class="h5">
            <a href="<?= !empty($fields['is_gc']) ? carbon_get_post_meta($course_id, 'link') : get_the_permalink($course_id); ?>" class="fc-link fc-light-9"><?= carbon_get_post_meta($course_id, 'headline'); ?></a>
          </p>
          <div class="svg-black fs-s">
            <div class="icon-listed">
              <p><?= carbon_get_post_meta($course_id, 'type'); ?></p>
            </div>
          </div>
        </figcaption>
      </figure>
    </div>
    <p class="mb-10 fw-5"><?= carbon_get_post_meta($course_id, 'subtitle'); ?></p>
    <div class="fs-s"><?= carbon_get_post_meta($course_id, 'lead'); ?></div>
    <a href="<?= !empty($fields['is_gc']) ? carbon_get_post_meta($course_id, 'link') : get_the_permalink($course_id); ?>" class="btn-small-pt">Посмотреть
      <span class="icon-angle-right"> </span>
    </a>

  </div><!-- /.brdc -->


<?php
  });
?>