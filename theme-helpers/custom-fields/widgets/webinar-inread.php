<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Webinar InRead'))
  ->add_fields([
    Field::make('html', 'crb_information_webinar')
      ->set_html('<h2 style="color:blue; padding: 20px;">Инрид c вебинаром</h2>'),
    Field::make('select', 'webinar_id', 'Вебинар:')
      ->add_options(get_webinars_arr()),
    Field::make('checkbox', 'is_gc', 'ссылка на гк'),
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {

    $course_id = $fields['webinar_id'];

    global $icons;
?>

  <div class="card mb-30">

    <div class="card-bg" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/img/vo-chto-investirovat.jpg');">
      <div class="bg-tr card-topbg">
        <a href="<?= $fields['is_gc'] ? carbon_get_post_meta($course_id, 'link') : get_the_permalink($course_id); ?>" class="fc-light">
          <div class="svg-white">
            <p class="h3"><?= carbon_get_post_meta($course_id, 'headline'); ?></p>

            <div class="icon-listed">
              <?= $icons->eye; ?>
              <p><?= carbon_get_post_meta($course_id, 'type'); ?></p>
            </div>
            <div class="icon-listed">
              <?= $icons->calend; ?>
              <p><?= carbon_get_post_meta($course_id, 'date'); ?></p>
            </div>

            <div class="icon-listed">
              <?= $icons->time; ?>
              <p><?= carbon_get_post_meta($course_id, 'period'); ?></p>
            </div>

            <button class="btn-pt mt-20 mb-10">Записаться
              <span class="icon-angle-right"> </span>
            </button>
          </div>
        </a>
      </div>
    </div>

  </div><!-- /.card -->


<?php
  });
?>