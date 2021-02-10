<?php
global $icons;
?>

<div class="col-12 mb-30 mt-50 txt-c txt-l-sm index-webinar-widget">
  <h3 class="mb-20  mb-30">Записаться на абсолютно бесплатный вебинар<br />«<?= carbon_get_post_meta($course_id, 'headline'); ?>»</h3>

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

  <?php if(1>2){ ?>
  <!-- <div class="row">
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
  </div> -->
  <?php } else { ?>
    <div class="col-sm-8 mx-auto"> 
    <?php
    // set_query_var( 'is_webinar', true );
    // get_template_part('theme-helpers/template-parts/forms/webinar', 'buttons');
    // set_query_var( 'is_webinar', false );
    echo carbon_get_post_meta(241, 'content');
    ?>
    </div>
  <?php } ?>
</div>