<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Subscribe Form'))
  ->add_fields([
    Field::make('html', 'crb_information')
      ->set_html('<h2 style="color:blue; background: lightblue; border-radius:10px; padding: 20px;">Форма подписки</h2>')

  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

  <div class="brdc pd-30-9 bg-dark-9 fc-light-9 mb-30">
    <div class="brdl-shot">
      <h4>Большой материал? Учись постепенно по подписке! </h4>
    </div>
    <p>Не беда, если нет сил или возможности прочитать всё сразу. Мы разбили этот урок на части. Подпишись
      и пройди этот урок бесплатно за несколько писем.
    </p>
    <p class="h5 mb-f-08">Подписка на урок</p>

    <form class="contactForm mb-30" id="ltForm2452406" action="https://growcapital.getcourse.ru/pl/lite/block-public/process-html?id=966618746" method="post" data-open-new-window="0"><input type="hidden" name="formParams[setted_offer_id]">
      <div class="form-group">
      <input type="text" class="form-control form-phone" maxlength="60" placeholder="Введите ваш эл. адрес" name="formParams[email]" value="">
      </div>
      <button type="submit" id="button1210888" class="btn" onclick="if(window['btnprs600ae67529b67']){return false;}window['btnprs600ae67529b67']=true;setTimeout(function(){window['btnprs600ae67529b67']=false},6000);return true;">
        Получить</button>

      <input type="hidden" id="327880600ae675224cb" name="__gc__internal__form__helper" class="__gc__internal__form__helper" value="">
      <input type="hidden" id="327880600ae675224cbref" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref" value="">
      <input type="hidden" name="requestTime" value="1611327093">
      <input type="hidden" name="requestSimpleSign" value="dc692a5321039fe053905722d63fe66b">
      <input type="hidden" name="isHtmlWidget" value="1" />
    </form><span id="gccounterImgContainer"></span>
    <script>
      window.addEventListener('load', function() {
        let loc = document.getElementById("327880600ae675224cb");
        loc.value = window.location.href;
        let ref = document.getElementById("327880600ae675224cbref");
        ref.value = document.referrer;

        let statUrl = "https://growcapital.getcourse.ru/stat/counter?ref=" + encodeURIComponent(document.referrer) +
          "&loc=" + encodeURIComponent(document.location.href);
        document.getElementById('gccounterImgContainer').innerHTML = "<img width=1 height=1 style='display:none' id='gccounterImg' src='" + statUrl + "'/>";
      });
    </script>

    <div class="wa-btn sidebar">
      <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', carbon_get_theme_option('wa')); ?>" target="_blank">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/whatsapp.png" class="icon-50" alt=""> Подписаться
      </a>
    </div>
    <div>
      <script id="2a6560b41ac93774b69d6c731343122494d25921" src="https://growcapital.getcourse.ru/pl/lite/widget/script?id=327876"></script>
    </div>
  </div><!-- /.brdc -->


<?php
  });
?>