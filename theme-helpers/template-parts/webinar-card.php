<?php
global $icons;
?>

<div class="col-lg-4 lim-md lim-smd mb-30">

  <div class="card">

    <div class="card-bg" style="background-image: url(<?= wp_get_attachment_image_url(carbon_get_post_meta($course_id, 'bg'), 'full') ?>);">
      <div class="bg-tr card-topbg">
        <a href="#" class="fc-light">
          <div class="svg-white">
            <p class="h3"><?= carbon_get_post_meta($course_id, 'headline'); ?></p>

            <div class="icon-listed">
              <?= $icons->eye; ?>
              <p><?= carbon_get_post_meta($course_id, 'type'); ?></b></p>
            </div>
            <div class="icon-listed">
              <?= $icons->calend; ?>
              <p><?= carbon_get_post_meta($course_id, 'date'); ?></p>
            </div>

            <div class="icon-listed">
              <?= $icons->time; ?>
              <p><?= carbon_get_post_meta($course_id, 'period'); ?></p>
            </div>

            <a href="<?= carbon_get_post_meta($course_id, 'link'); ?>" target="_blank" class="btn-pt mt-20 mb-10">Записаться
              <span class="icon-angle-right"> </span>
            </a>
          </div>
        </a>
      </div>
    </div>

    <div class="card-body pl-0-sm-md">
      <a href="">
        <p class="h5 mb-20"><?= get_the_title($course_id); ?></p>
        <div class="list-decor list-icon-ch fs-s mb-30 fc-dark">
          <?= get_post_field('post_content', $course_id); ?>
        </div>
      </a>
    </div>

  </div>

</div>