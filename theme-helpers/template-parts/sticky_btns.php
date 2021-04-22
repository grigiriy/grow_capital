<div id="callback_btns">
  <a href="https://api.whatsapp.com/send?phone=<?= preg_replace('/[^0-9]/', '', carbon_get_theme_option('wa')); ?>" target="_blank">
    <img src="/wp-content/themes/grow_capital/assets/img/whatsapp.png" />
  </a>
  <a target="_blank" href="<?= carbon_get_theme_option('tg'); ?>">
    <img src="/wp-content/themes/grow_capital/assets/img/telegram.png" />
  </a>
  <a href="tel:<?= preg_replace('/[^0-9]/', '', str_replace('+7', '8', carbon_get_theme_option('phone'))); ?>">
    <img src="/wp-content/themes/grow_capital/assets/img/phone.png" />
  </a>
</div>
