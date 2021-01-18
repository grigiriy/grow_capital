<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Excel Form'))
  ->add_fields([
    Field::make('html', 'crb_information_excel')
      ->set_html('<h2 style="color:blue;padding: 20px;">Форма c экселем</h2>'),
    Field::make( 'media_gallery', 'file', 'Файл' )
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

  <div class="brdc pd-30-9 bg-dark-9 fc-light-9 mb-30">
    <div class="brdl-shot"></div>
    <div class="facecrd-55">
      <figure class="mb-0">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/chart-2.png" alt="">
        <figcaption class="pl-10">
          <p class="h5">
            <a target="blank" href="<?= wp_get_attachment_url( $fields['file'][0] ); ?>" class="fc-link fc-light-9">excel-шаблон</a>
          </p>
          <p class="mb-10 fw-5">Расчет доходности</p>
        </figcaption>
      </figure>
    </div>
    <p class="fs-s">В дополнение к статье мы подготовили специальный excel-файл для расчета доходности
      инвестиций с учетом различных факторов.</p>
    <a target="blank" href="<?= wp_get_attachment_url( $fields['file'][0] ); ?>" download class="btn-small-pt">Скачать
      <span class="icon-angle-right"> </span>
    </a>

  </div><!-- /.brdc -->

<?php
  });
?>