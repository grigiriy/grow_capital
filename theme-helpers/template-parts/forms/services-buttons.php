<div class="row mb-30 space-around">
  <div class="col-sm-3 txt-c">
    <a href="" class="tg" target="_blank">
      <img src="<?= get_template_directory_uri(); ?>/assets/img/telegram.png" class="mb-20 icon-75" alt="">
      <?php if($is_webinar){ ?><p class="fs-s fw-6">Записаться через Телеграм</p><?php } ?>
    </a>
  </div>
  <div class="col-sm-3 txt-c">
    <a href="" class="wa" target="_blank">
      <img src="<?= get_template_directory_uri(); ?>/assets/img/whatsapp.png" class="mb-20 icon-75" alt="">
      <?php if($is_webinar){ ?><p class="fs-s fw-6">Записаться через WhatsApp</p><?php } ?>
    </a>
  </div>
  <div class="col-sm-3 txt-c">
    <a href="" class="vk" target="_blank">
      <img src="<?= get_template_directory_uri(); ?>/assets/img/vk.png" class="mb-20 icon-75" alt="">
      <?php if($is_webinar){ ?><p class="fs-s fw-6">Записаться через Вконтакте</p><?php } ?>
    </a>
  </div>
</div>