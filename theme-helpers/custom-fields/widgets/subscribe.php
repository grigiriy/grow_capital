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
?>