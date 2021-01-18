<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Webinar Form'))
  ->add_fields([
    Field::make('html', 'crb_information_webinar')
      ->set_html('<h2 style="color:blue; padding: 20px;">Форма c вебинаром</h2>'),
    Field::make( 'select', 'webinar_id', 'Вебинар:' )
      ->add_options( get_webinars_arr() ),
    ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {

    $course_id = $fields['webinar_id'];
?>

  <div class="brdc pd-30-9 bg-dark-9 fc-light-9 mb-30">
    <div class="brdl-shot">
    </div>
    <div class="facecrd-55">
      <figure class="mb-0">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/chart-4.png" alt="">
        <figcaption class="pl-10">
          <p class="h5">
            <a href="<?= carbon_get_post_meta($course_id, 'link'); ?>" class="fc-link fc-light-9"><?= carbon_get_post_meta($course_id, 'headline'); ?></a>
          </p>
          <div class="svg-black fs-s">
            <div class="icon-listed">
              <p><?= carbon_get_post_meta($course_id, 'type'); ?></p>
            </div>

          </div>
        </figcaption>
      </figure>
    </div>
    <p class="mb-10 fw-5"><?= get_the_title($course_id); ?></p>
    <p class="fs-s"> <?= get_post_field('post_content', $course_id); ?></p>
    <button href="<?= carbon_get_post_meta($course_id, 'link'); ?>" class="btn-small-pt">Посмотреть
      <span class="icon-angle-right"> </span>
    </button>

  </div><!-- /.brdc -->


<?php
  });
?>