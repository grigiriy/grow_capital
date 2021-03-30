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
    Field::make('rich_text', 'content', 'Контент'),
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {

    $course_id = $fields['webinar_id'];

    global $icons;
?>

  <div class="card mb-30 inread-widget">
    <div class="card-bg" style="background-image: url(<?= wp_get_attachment_image_url(carbon_get_post_meta($course_id, 'bg'), 'full'); ?>);">
      <div class="bg-tr card-topbg">
        <a href="<?= !empty($fields['is_gc']) ? carbon_get_post_meta($course_id, 'link') : get_the_permalink($course_id); ?>" class="fc-light">
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

    <div class="card-body pl-0-sm-md list-decor list-icon-ch">
      <?php if (empty($fields['content'])){ ?>
      <a href="<?= !empty($fields['is_gc']) ? carbon_get_post_meta($course_id, 'link') : get_the_permalink($course_id); ?>">
        <p class="h5 mb-20"><?= carbon_get_post_meta($course_id, 'subtitle'); ?></p>
        <div class="fs-s mb-30 fc-dark"><?= carbon_get_post_meta($course_id, 'lead'); ?></div>
      </a>
      <?php } else { ?>
        <div class="fs-sfc-dark"><?= $fields['content']; ?></div>
      <?php } ?>
    </div>
  </div><!-- /.card -->


<?php
  });
?>