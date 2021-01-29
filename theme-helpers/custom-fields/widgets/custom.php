<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Custom Form'))
  ->add_fields([
    Field::make('html', 'crb_information_webinar')
      ->set_html('<h2 style="color:blue; padding: 20px;">Гибкая форма</h2>'),
      Field::make( 'image', 'icon', 'Иконка' ),
      Field::make( 'text', 'headline', 'Заголовок-ссылка' ),
      Field::make( 'text', 'headline_link', 'ссылка с Заголовка-ссылки' ),
      Field::make( 'text', 'label', 'Лейбл' ),
      Field::make( 'rich_text', 'content', 'Текст блока' ),
      Field::make( 'text', 'btn', 'Кнопка' ),
      Field::make( 'text', 'btn_link', 'ссылка на кнопке' ),
    ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

  <div class="brdc pd-30-9 bg-dark-9 fc-light-9 mb-30">
    <div class="brdl-shot">
    </div>
    <div class="facecrd-55">
      <figure class="mb-0">
        <img src="<?= wp_get_attachment_image_url( $fields['icon'],'thumbnail' ); ?>" alt="">
        <figcaption class="pl-10">
          <p class="h5">
            <a href="<?= $fields['headline_link'] ?>" class="fc-link fc-light-9"><?= $fields['headline'] ?></a>
          </p>
          <div class="svg-black fs-s">
            <div class="icon-listed">
              <p><?= $fields['label'] ?></p>
            </div>
          </div>
        </figcaption>
      </figure>
    </div>
    <div class="fs-s"><?= $fields['content'] ?></div>
    <a href="<?= $fields['btn_link'] ?>" class="btn-small-pt"><?= $fields['btn'] ?>
      <span class="icon-angle-right"> </span>
    </a>

  </div><!-- /.brdc -->


<?php
  });
?>