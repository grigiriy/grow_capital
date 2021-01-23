<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Subscribe Mail Form'))
  ->add_fields([
    Field::make('html', 'crb_information')
      ->set_html('<h2 style="color:blue; background: lightblue; border-radius:10px; padding: 20px;">Форма подписки на имейл</h2>')

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

    
    <form class="contactForm" id="ltForm4997061" action="https://growcapital.getcourse.ru/pl/lite/block-public/process-html?id=964418017" method="post" data-open-new-window="0">
      <input type="hidden" name="formParams[setted_offer_id]">
      
      <div class="form-group">
        <input type="text" class="form-control form-phone" maxlength="60" placeholder="Введите ваш эл. адрес" name="formParams[email]" value="">
      </div>

      <button type="submit" id="button7722478" class="btn" onclick="if(window['btnprs6008739651d18']){return false;}window['btnprs6008739651d18']=true;setTimeout(function(){window['btnprs6008739651d18']=false},6000);return true;">
        Получить</button>


      <input type="hidden" id="32614060087396456a2" name="__gc__internal__form__helper" class="__gc__internal__form__helper" value="">
      <input type="hidden" id="32614060087396456a2ref" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref" value="">
      <input type="hidden" name="requestTime" value="1611166614">
      <input type="hidden" name="requestSimpleSign" value="b2c55edb1be993e46ed312d9297b50da">
      <input type="hidden" name="isHtmlWidget" value="1" />
    </form>
  </div><!-- /.brdc -->


<?php
  });
?>