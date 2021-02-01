<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= wp_kses(apply_filters( 'the_content', get_post_field('_genesis_title') ),'strip'); ?></title>
  <?php wp_head() ?>
  <script src="https://yastatic.net/share2/share.js" async></script>

  <?php $keywords = explode(', ', carbon_get_post_meta($post->ID, 'keywords'));
  if ($keywords) {
    echo '<meta name="keywords" content="';
    foreach ($keywords as $keyword) {
      echo $keyword . ',';
    }
    echo '">';
  }
  ?>

  <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(71616154, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/71616154" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>

<body id="page-top">
  <div class="header-wrapper bg-grdn-down pb-10 pb-0-9 pb-0-sm">
    <div class="logo-wrap">
      <div class="container-w">
        <div class="d-flex flex-center">
          <div class="mr-auto">
            <a href="/"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="Grow Capital — обучение грамотному управлению инвестициями" class="logo" itemprop="logo" /></a>
            <a href="/"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo-slicky.png" class="logo-sticky" alt="" /></a>
            <a href="/"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo-small.png" class="logo-small" alt="" /></a>
          </div>
          <div class="ml-auto px-40 mg-auto-9 social-wrapper">
            <?php global $icons;
            
            $soc_arr = ['vk','fb','ig','tg','yt'];

            foreach($soc_arr as $soc) {
              if(carbon_get_theme_option($soc)){
            ?>
              <a href="<?= carbon_get_theme_option($soc); ?>" target="_blank"><?= $icons->$soc; ?></a>
            <?php
              }
            }
            ?>
            
          </div>
          <div class="btn-header-wrappeer">
            <!-- <div class="mb-f-05 txt-c none"><a href="<?= carbon_get_theme_option('login'); ?>" class="fc-dark fd-n fs-xs">Вход</a>  |  <a href="<?= carbon_get_theme_option('login'); ?>"
                class="fc-dark fd-n fs-xs">Регистрация</a></div> -->
            <a href="<?= carbon_get_theme_option('services'); ?>" class="btn btn-ok">Полезные сервисы</a>
            <div class="txt-c none mt-10">
              <a class="fd-n fw-5" href="tel:<?= preg_replace('/[^0-9]/', '', str_replace('+7', '8',carbon_get_theme_option('phone'))); ?>"><?= carbon_get_theme_option('phone'); ?></a>
            </div>
          </div>

          <div class="hider-lg">
            <div id="hamburger" class="burger" onclick="toggle_burger(this)">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="display: none;" class="fade"></div>
    <nav id="mainnav" class="clearfix" role="navigation">
      <div class="container-w">
        <div class="row">
          <div class="col-12">
            <ul id="mainnav-menu" class="navigation-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
              <?php
              $params = array(
                'container' => false, // Без div обертки
                'echo' => false, // Чтобы можно было его предварительно вернуть
                'after' => '<span class="submenu-dropdown-toggle"></span>',
                'items_wrap' => '%3$s', // Разделитель элементов
                'depth' => 2, // Глубина вложенности
                // 'theme_location' => wp_is_mobile() ? 'mob_header_menu' : 'header_menu',
                'theme_location' => 'header_menu',
              );
              ?>
              <?= wp_nav_menu($params) ?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <?php
  if (!is_user_logged_in()) {
    exit();
  };
  ?>