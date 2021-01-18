<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

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