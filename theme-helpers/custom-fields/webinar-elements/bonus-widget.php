<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Webinar Bonus Widget'))
  ->add_fields([
    Field::make('html', 'crb_information_webinar')
      ->set_html('<h2 style="color:blue; padding: 20px;">Бонус</h2>'),
      Field::make('select', 'widget_id', 'Виджет Имейла:')
      ->add_options(get_widgets_arr()),
      Field::make('select', 'widget_id_soc', 'Виджет кнопок:')
      ->add_options(get_widgets_arr()),
    // Field::make('text', 'subtitle', 'Подзаг'),
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

  <section class="mb-60 landing-bottom <?php foreach ($attributes as $attribute){ echo $attribute.' ';}?> ">
    <div class="container-w pb-30">
      <div class="brdl pd-30 brdw-2 brdr-c brdc brdl-0-9 pd-0-9 pd-0-sm">
        <p class="h4 mb-20">дополнительный бонус</p>
        <div class="row">
          <div class="col-lg-6 mb-30">
            <p class="h2">Доступ к разделу <a href="/services">Сервисы</a></p>
            <p class="fw-5">Помимо участия в вебинаре и доступа к его записи, участники получают бесплатный доступ к
              разделу Сервисы:</p>
            <ul class="fw-5">
              <li>Калькуляторы и excel-файлы, для оценки и управления портфелем.</li>
              <li>Бесплатные вебинары в записи.</li>
              <li>Скидки на платные образовательные программы.</li>
            </ul>
          </div>

          <div class="col-lg-6 mb-30">
            <div class="pd-30 brdw-2 bg-accent">
              <p class="h3 mb-30 txt-c">Зарегистрироваться на обучение и получить доступ к материалам</p>
              <?php echo carbon_get_post_meta($fields['widget_id'], 'content'); ?>
              <?php echo carbon_get_post_meta($fields['widget_id_soc'], 'content'); ?>

              <?php if(1>2){ ?>
              <!-- <div class="row mb-30">
                <div class="col-sm-4 txt-c">
                  <img src="<?= get_template_directory_uri(); ?>/assets/img/telegram.png" class="mb-20 icon-75" alt="">
                  <p class="fs-s fw-6">Записаться через Телеграмм</p>
                </div>
                <div class="col-sm-4 txt-c">
                  <img src="<?= get_template_directory_uri(); ?>/assets/img/whatsapp.png" class="mb-20 icon-75" alt="">
                  <p class="fs-s fw-6">Записаться через WhatsApp</p>
                </div>
                <div class="col-sm-4 txt-c">
                  <img src="<?= get_template_directory_uri(); ?>/assets/img/vk.png" class="mb-20 icon-75" alt="">
                  <p class="fs-s fw-6">Записаться через ВК</p>
                </div>
              </div>
              <form class="form-goriz mb-30" id="ltForm9184268" action="https://edu.growcapital.ru/pl/lite/block-public/process-html?id=969696534" method="post" data-open-new-window="0">
                <input type="hidden" name="formParams[setted_offer_id]">
                <input type="text" class="wdth-66" placeholder="Введите ваш эл. адрес" name="formParams[email]" value="">
                <button type="submit" id="button1168115" class="btn btn-contr" onclick="if(window['btnprs600ef20b0e3d2']){return false;}window['btnprs600ef20b0e3d2']=true;setTimeout(function(){window['btnprs600ef20b0e3d2']=false},6000);return true;">
                Записаться</button>

                <input type="hidden" id="329167600ef20aeef92" name="__gc__internal__form__helper" class="__gc__internal__form__helper" value="">
                <input type="hidden" id="329167600ef20aeef92ref" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref" value="">
                <input type="hidden" name="requestTime" value="1611592203">
                <input type="hidden" name="requestSimpleSign" value="0a64beb725ee07790190b8a66ea25c36">
                <input type="hidden" name="isHtmlWidget" value="1" />
              </form>
              <span id="gccounterImgContainer"></span>
              <script>
                window.addEventListener('load', function() {
                  let loc = document.getElementById("329167600ef20aeef92");
                  loc.value = window.location.href;
                  let ref = document.getElementById("329167600ef20aeef92ref");
                  ref.value = document.referrer;

                  let statUrl = "https://edu.growcapital.ru/stat/counter?ref=" + encodeURIComponent(document.referrer) +
                    "&loc=" + encodeURIComponent(document.location.href);
                  document.getElementById('gccounterImgContainer').innerHTML = "<img width=1 height=1 style='display:none' id='gccounterImg' src='" + statUrl + "'/>";
                });
              </script> -->
              <?php } ?>


            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /.mb-60 -->

<?php
  });
?>