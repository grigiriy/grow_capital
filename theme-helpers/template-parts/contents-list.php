<?php
$list = carbon_get_post_meta($post_id,'links');
if(count($list)){
  foreach ($list as $item) { ?>
    <li><a href="<?= $item['nav_link']; ?>"><?= $item['nav_link_text']; ?></a></li>
  <?php }
} ?>