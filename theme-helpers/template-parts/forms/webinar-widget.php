<?php
global $icons;
?>

<div class="col-12 mb-30 mt-50 txt-c txt-l-sm">
  <h3 class="mb-20  mb-30">Записаться на бесплатный вебинар<br />«<?= get_the_title($course_id); ?>»</h3>

  <ul class="list-inline">
    <li>
      <div class="icon-listed">
        <?= $icons->eye; ?>
        <p><?= carbon_get_post_meta($course_id, 'type'); ?></p>
      </div>
    </li>
    <li>
      <div class="icon-listed">
        <?= $icons->calend; ?>
        <p><?= carbon_get_post_meta($course_id, 'date'); ?></p>
      </div>
    </li>
    <li>
      <div class="icon-listed">
        <?= $icons->time; ?>
        <p><?= carbon_get_post_meta($course_id, 'period'); ?></p>
      </div>
    </li>
  </ul>

  <div class="row">
    <div class="col-md-8 pr-0 lim-md lim-smd">
    <script id="3563c0962a77903244383435ad6f7816855ee0e2" src="https://edu.growcapital.ru/pl/lite/widget/script?id=327422"></script>
    </div>
    <div class="col-md-4 pl-0 lim-md lim-smd">
      <div class="wa-btn">
        <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', carbon_get_theme_option('wa')); ?>" target="_blank">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/whatsapp.png" class="icon-50" alt=""> Записаться через WhatsApp
      </a>
    </div>
    </div>
  </div>



  <?php if( 1 > 2) { ?>

  <!-- OLD! -->

  <div class="row mb-30">
    <div class="col-sm-3 txt-c">
      <a href="<?= carbon_get_post_meta($course_id, 'link'); ?>" target="_blank">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/telegram.png" class="mb-20 icon-75" alt="">
        <p class="fs-s fw-6">Записаться через Телеграмм</p>
      </a>
    </div>
    <div class="col-sm-3 txt-c">
      <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', carbon_get_theme_option('wa')); ?>" target="_blank">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/whatsapp.png" class="mb-20 icon-75" alt="">
        <p class="fs-s fw-6">Записаться через WhatsApp</p>
      </a>
    </div>
    <div class="col-sm-3 txt-c">
      <a href="<?= carbon_get_post_meta($course_id, 'link'); ?>" target="_blank">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/vk.png" class="mb-20 icon-75" alt="">
        <p class="fs-s fw-6">Записаться через ВК</p>
      </a>
    </div>
    <div class="col-sm-3 txt-c">
      <a href="<?= carbon_get_post_meta($course_id, 'link'); ?>" target="_blank">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/mail.png" class="mb-20 icon-75" alt="">
        <p class="fs-s fw-6">Записаться через почту</p>
      </a>
    </div>
  </div>
<?php } ?>
</div>