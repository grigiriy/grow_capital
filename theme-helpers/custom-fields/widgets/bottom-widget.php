<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Bottom Widget'))
  ->add_fields([
    Field::make('html', 'crb_information_webinar')
      ->set_html('<h2 style="color:blue; padding: 20px;">Нижний виджет</h2>'),
    Field::make( 'text', 'headline', 'Заголовок' ),
    Field::make( 'rich_text', 'content', 'Текст' ),

    Field::make( 'text', 'subhead_1', 'Подзаг 1 блока' ),
    Field::make( 'text', 'label_1', 'Лейбл 1 блока' ),
    Field::make( 'select', 'block_id_1', 'Блок 1:' )
      ->add_options( get_all_arr() ),
    Field::make('checkbox', 'is_gc_1', 'Ссылка на гк'),
    Field::make( 'rich_text', 'content_1', 'Текст 1 блока' ),

    Field::make( 'text', 'subhead_2', 'Подзаг 2 блока' ),
    Field::make( 'text', 'label_2', 'Лейбл 2 блока' ),
    Field::make( 'select', 'block_id_2', 'Блок 2:' )
      ->add_options( get_all_arr() ),
    Field::make('checkbox', 'is_gc_2', 'Ссылка на гк'),
    Field::make( 'rich_text', 'content_2', 'Текст 2 блока' ),

    Field::make( 'text', 'subhead_3', 'Подзаг 3 блока' ),
    Field::make( 'text', 'label_3', 'Лейбл 3 блока' ),
    Field::make( 'select', 'block_id_3', 'Блок 3:' )
      ->add_options( get_all_arr() ),
    Field::make('checkbox', 'is_gc_3', 'Ссылка на гк'),
    Field::make( 'rich_text', 'content_3', 'Текст 3 блока' ),
    ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>


<div class="row bottom-widget">
  <div class="col-lg-12 infobl mb-30">
    <h2><?= esc_html($fields['headline']); ?></h2>
    <p><?= $fields['content']; ?></p>
  </div>

<?php for ($i=1;$i<4;$i++){ ?>
  <div class="col-lg-4 mb-50 lim-smd lim-md">
    <div class="facecrd-65">
      <figure class="mb-0">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/sistema-investirovaniya.png" alt="">
        <figcaption class="pl-10">
          <p class="h6">
            <a target="_blank" href="<?= $fields['is_gc_'.$i] ? carbon_get_post_meta($fields['block_id_'.$i], 'link') : get_the_permalink($fields['block_id_'.$i]); ?>" class="fc-link"><?= $fields['subhead_'.$i]; ?></a>
          </p>
        </figcaption>
      </figure>
    </div>
    <p class="mb-10 fs-s fw-5"><?= $fields['label_'.$i]; ?></p>
    <p class="fs-s"><?= $fields['content_'.$i]; ?></p>
    <a class="btn-small btn-contr hider-9" target="_blank" href="<?= $fields['is_gc_'.$i] ? carbon_get_post_meta($fields['block_id_'.$i], 'link') : get_the_permalink($fields['block_id_'.$i]); ?>">Подробнее</a>
  </div>
<?php } ?>

</div><!-- /.row -->


<?php
  });
?>