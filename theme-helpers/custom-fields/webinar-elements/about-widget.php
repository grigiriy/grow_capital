<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Webinar About Widget'))
  ->add_fields([
    Field::make('html', 'crb_information_webinar')
      ->set_html('<h2 style="color:blue; padding: 20px;">О вебинаре</h2>')
    ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

<section class="bg-grdn-up pb-50 pt-60">
  <div class="container-w">
    <h2 class="txt-c txt-l-9 mb-40">Вебинар отвечает на практические вопросы</h2>
    <div class="row fw-5 fs-l">
      <div class="col-lg-4 mb-50">
        <div class="brdl-shot"></div>Насколько рискованны ваши инвестиции?
      </div>
      <div class="col-lg-4 mb-50">
        <div class="brdl-shot">Как можно увеличить доходность не повышая уровень риска?</div>
      </div>
      <div class="col-lg-4 mb-50">
        <div class="brdl-shot">Имеет ли смысл использовать заемное финансирование?</div>
      </div>
      <div class="col-lg-4 mb-50">
        <div class="brdl-shot">Имеет ли смысл использовать заемное финансирование?</div>
      </div>
      <div class="col-lg-4 mb-50">
        <div class="brdl-shot">Как оценить эффективность фонда или предлагаемой консультантом инвестиционной
          стратегии?</div>
      </div>
      <div class="col-lg-4 mb-50">
        <div class="brdl-shot">Что такое систематическое инвестирование и в чем его преимущество?</div>
      </div>
    </div>
  </div>
</section>
<!-- /.bg-grdn-up -->

<?php
  });
?>