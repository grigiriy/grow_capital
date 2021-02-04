<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Webinar Header Widget'))
  ->add_fields([
    Field::make('html', 'crb_information_webinar')
      ->set_html('<h2 style="color:blue; padding: 20px;">Хедер</h2>'),
    Field::make('image', 'bg', 'Фоновая картинка'),
    Field::make('text', 'subtitle', 'Подзаг'),
    Field::make('rich_text', 'text_content', 'Текст')
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {

    global $icons;
?>

  <header class="mt-0">

    <section class="image_bg" style="background-image: url(<?= wp_get_attachment_image_url($fields['bg'], 'full'); ?>);">
      <div class="container-w">
        <div class="pt-60 pb-60 pb-f-05-sm fc-light">
          <div class="row">
            <div class="col-lg-5">
              <div class="h1 mb-20"><span class="fs-l"><?= get_the_title(); ?></span></div>

              <form class="form-goriz mb-20" id="ltForm9184268" action="https://edu.growcapital.ru/pl/lite/block-public/process-html?id=969696534" method="post" data-open-new-window="0">
                <input type="hidden" name="formParams[setted_offer_id]">
                <input type="text" class="wdth-66" placeholder="Введите ваш эл. адрес" name="formParams[email]" value="">
                <button type="submit" id="button1168115" class="btn" onclick="if(window['btnprs600ef20b0e3d2']){return false;}window['btnprs600ef20b0e3d2']=true;setTimeout(function(){window['btnprs600ef20b0e3d2']=false},6000);return true;">
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
              </script>

              <p class="">Оставьте e-mail, чтобы получить достук к&nbsp;программе и&nbsp;материалам вебинара
              </p>
              <div class="">

              </div>
            </div>
            <div class="col-lg-7">
              <h1 class="mb-20"><?= esc_html($fields['subtitle']); ?></h1>
              <p class="fs-l fw-5">
              <?= esc_html($fields['text_content']); ?>
              </p>

              <ul class="list-inline fs-l">
                <li>
                  <div class="icon-listed-l">
                    <?= $icons->calend; ?>
                    <p>c 17.02.2021</p>
                  </div>
                </li>
                <li>
                  <div class="icon-listed-l">
                    <?= $icons->time; ?>
                    <p>3 дня по 1 часу</p>
                  </div>
                </li>
                <li>
                  <div class="icon-listed-l">
                    <?= $icons->eye; ?>
                    <?= carbon_get_post_meta($post->ID, 'type'); ?>
                  </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

  </header>
  <!-- /.mt-0 -->

<?php
  });
?>