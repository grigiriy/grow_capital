<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Contents List'))
  ->set_icon('editor-list')
  ->add_fields([
    Field::make('html', 'crb_information_list')
    ->set_html('<h2 style="color:blue; padding: 20px;">Оглавление</h2><hr style="border-color: yellow;" />')
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

    <ul class="fs-s hider-9 mb-50 list-sidebar">
      <div class="fw-6 mb-f-07 lazyloaded">Оглавление</div>
      <?php
      global $post;
      set_query_var( 'post_id', $post->ID );
      get_template_part('theme-helpers/template-parts/contents','list'); 
      ?>
    </ul><!-- /.hider-9 -->


<?php
  });
?>
