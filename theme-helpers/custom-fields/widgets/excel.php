<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Excel Form'))
  ->add_fields([
    Field::make('html', 'crb_information_excel')
      ->set_html('<h2 style="color:blue;padding: 20px;">Форма c экселем</h2>'),
    Field::make( 'media_gallery', 'file', 'Файл' ),
    Field::make( 'text', 'link_name', 'Текст на ссылке' ),
    Field::make( 'text', 'headline', 'Заголовок' ),
    Field::make( 'rich_text', 'content', 'Описание' ),
    Field::make( 'text', 'btn_text', 'Текст на кнопке' ),
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

  <div class="brdc pd-30-9 bg-dark-9 fc-light-9 mb-30 sidebar-widget">
    <div class="brdl-shot"></div>
    <div class="facecrd-55">
      <figure class="mb-0">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/chart-2.png" alt="">
        <figcaption class="pl-10">
          <p class="h5">
            <a target="<?= $fields['target_blank'] ? '_blank' : '_self'; ?>" download href="<?= wp_get_attachment_url( $fields['file'][0] ); ?>" class="fc-link fc-light-9"><?= esc_html($fields['link_name']); ?></a>
          </p>
          <p class="mb-10 fw-5"><?= esc_html($fields['headline']); ?></p>
        </figcaption>
      </figure>
    </div>
    <div class="fs-s"><?= $fields['content']; ?></div>
    <a target="<?= $fields['target_blank'] ? '_blank' : '_self'; ?>" href="<?= wp_get_attachment_url( $fields['file'][0] ); ?>" download class="btn-small-pt"><?= esc_html($fields['btn_text']); ?>
      <span class="icon-angle-right"> </span>
    </a>

  </div><!-- /.brdc -->

<?php
  });
?>