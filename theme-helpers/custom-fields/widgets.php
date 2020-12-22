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

  <div class="brdc pd-30-9 bg-dark-9 fc-light-9">
    <div class="brdl-shot">
      <h4>Большой материал? Учись постепенно по подписке! </h4>
    </div>
    <p>Не беда, если нет сил или возможности прочитать всё сразу. Мы разбили этот урок на части. Подпишись
      и пройди этот урок бесплатно за несколько писем.
    </p>
    <p class="h5 mb-f-08">Подписка на урок</p>
    <form class="contactForm" novalidate="" id="sticky_form" onsubmit="ym(55367455, 'reachGoal', 'sticky'); return true;">
      <div class="contact-form">
        <div class="form-group" hidden="">
          <input type="text" class="form-control first-name" placeholder="Имя" name="first-name">
          <p class="form-alert"></p>
        </div>

        <div class="form-group">
          <input type="tel" class="form-control form-phone" placeholder="Ваш E-mail" name="phone" data-validation-required-message="Поле не заполнено!" required="">
          <span class="form-alert help-block"> </span>
        </div>

        <div class="successMessage"></div>
        <div class="preloader" hidden="">
          <img src="js/preloader.png" alt="">
        </div>
        <button class="btn" type="submit">Подписаться</button>
      </div>
    </form>
  </div><!-- /.brdc -->

<?php
  });



Block::make(__('Excel Form'))
  ->add_fields([
    Field::make('html', 'crb_information_excel')
      ->set_html('<h2 style="color:blue; background: lightblue; border-radius:10px; padding: 20px;">Форма c экселем</h2>')
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

  <div class="brdc pd-30-9 bg-dark-9 fc-light-9">
    <div class="brdl-shot"></div>
    <div class="facecrd-55">
      <figure class="mb-0">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/chart-2.png" alt="">
        <figcaption class="pl-10">
          <p class="h5">
            <a href="" class="fc-link fc-light-9">excel-шаблон</a>
          </p>
          <p class="mb-10 fw-5">Расчет доходности</p>
        </figcaption>
      </figure>
    </div>
    <p class="fs-s">В дополнение к статье мы подготовили специальный excel-файл для расчета доходности
      инвестиций с учетом различных факторов.</p>
    <button href="#modal" class="btn-small-pt">Скачать
      <span class="icon-angle-right"> </span>
    </button>

  </div><!-- /.brdc -->

<?php
  });




Block::make(__('Webinar Form'))
  ->add_fields([
    Field::make('html', 'crb_information_webinar')
      ->set_html('<h2 style="color:blue; background: lightblue; border-radius:10px; padding: 20px;">Форма c вебинаром</h2>')
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

  <div class="brdc pd-30-9 bg-dark-9 fc-light-9">
    <div class="brdl-shot">
    </div>
    <div class="facecrd-55">
      <figure class="mb-0">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/chart-4.png" alt="">
        <figcaption class="pl-10">
          <p class="h5">
            <a href="" class="fc-link fc-light-9">Как выбрать во что инвестировать?</a>
          </p>
          <div class="svg-black fs-s">
            <div class="icon-listed">
              <p>Вебинар / <b>бесплатно</b></p>
            </div>

          </div>
        </figcaption>
      </figure>
    </div>
    <p class="mb-10 fw-5">Риски и доходность финансовых инструментов</p>
    <p class="fs-s">Сколько можно заработать или потерять на финансовых рынках? Как оценить риски, связанные с инвестированием в те или иные инструменты?</p>
    <button href="#modal" class="btn-small-pt">Посмотреть
      <span class="icon-angle-right"> </span>
    </button>

  </div><!-- /.brdc -->

<?php
  });





Block::make(__('Formula'))
  ->add_fields([
    Field::make('image', 'formula_image', __('Formula')),
    Field::make('text', 'alt', __('image alt')),
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

  <div class="txt-c">
    <img src="<?= wp_get_attachment_image_url($fields['formula_image'], 'full'); ?>" alt="<?= esc_html($fields['alt']); ?>" class="formula">
  </div><!-- /.txt-c -->

<?php
  });



Block::make(__('Quote Extanded'))
  ->set_icon('editor-quote')
  ->add_fields([
    Field::make('html', 'crb_information_quote')
    ->set_html('<div style="color:blue; background: lightblue; border-radius:10px; padding: 20px;"></div>')
  ])
  ->set_inner_blocks( true )
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

  <div class="blockquote">
    <?= $inner_blocks; ?>
  </div><!-- /.blockquote -->

<?php
  });



?>