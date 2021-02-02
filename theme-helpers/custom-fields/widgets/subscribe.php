<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Subscribe Form'))
  ->add_fields([
    Field::make('html', 'crb_information')
      ->set_html('<h2 style="color:blue; background: lightblue; border-radius:10px; padding: 20px;">Форма подписки</h2>'),
      Field::make( 'text', 'headline', 'Заголовок' ),
      Field::make( 'rich_text', 'content', 'Текст' ),

      Field::make('select', 'widget_1_id', 'Виджет имейла:')
        ->add_options(get_widgets_arr()),

      Field::make('select', 'widget_2_id', 'Виджет соцсеток:')
        ->add_options(get_widgets_arr()),
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
    $widget_1_id = $fields['widget_1_id'];
    $widget_2_id = $fields['widget_2_id'];
?>

  <div class="brdc pd-30-9 bg-dark-9 fc-light-9 mb-30 sidebar-widget">
    <div class="brdl-shot">
      <h4><?= $fields['headline']; ?></h4>
    </div>
    <p class="h5 mb-f-08"><?= $fields['content']; ?></p>

      <?php
      if($widget_1_id !== '-') {
        echo carbon_get_post_meta($widget_1_id, 'content');
      }

      if($widget_2_id !== '-') { ?>
      <div class="wa-btn sidebar">
        <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', carbon_get_theme_option('wa')); ?>" target="_blank">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/whatsapp.png" class="icon-50" alt=""> Подписаться
        </a>
      </div>

      <?php
      echo carbon_get_post_meta($widget_2_id, 'content');
      } ?>

  </div><!-- /.brdc -->


<?php
  });
?>