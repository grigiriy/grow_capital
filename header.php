<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<?php wp_head() ?>
  </head>

  <body id="page-top">
  <div class="header-wrapper bg-grdn-down pb-10 pb-0-9 pb-0-sm">
    <div class="logo-wrap">
      <div class="container-w">
        <div class="d-flex flex-center">
          <div class="mr-auto">
            <a href="/"><img src="<?= get_template_directory_uri();?>/assets/img/logo.png" alt="Grow Capital — обучение грамотному управлению инвестициями"
                class="logo" itemprop="logo" /></a>
            <a href="/"><img src="<?= get_template_directory_uri();?>/assets/img/logo-slicky.png" class="logo-sticky" alt="" /></a>
            <a href="/"><img src="<?= get_template_directory_uri();?>/assets/img/logo-small.png" class="logo-small" alt="" /></a>
          </div>
          <div class="ml-auto px-40 mg-auto-9" itemprop="telephone">
            <img src="<?= get_template_directory_uri();?>/assets/img/icons.png" class="" />
          </div>
          <div class="btn-header-wrappeer">
            <div class="mb-f-05 txt-c none"><a href="" class="fc-dark fd-n fs-xs">Вход</a>  |  <a href=""
                class="fc-dark fd-n fs-xs">Регистрация</a></div>
            <a href="#modal" class="btn btn-ok">Полезные сервисы</a>
            <div class="txt-c none mt-10">
              <a class="fd-n fw-5" href="tel:<?= preg_replace('/[^0-9]/', '', carbon_get_theme_option('phone')); ?>"><?= carbon_get_theme_option('phone'); ?></a>
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
            <!-- <ul id="mainnav-menu" class="navigation-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
              <li><a href="/ceny-na-shumoizolyaciyu-potolka">Проект и команда</a></li>
              <li>
                <a href="/materialy-dlya-shumoizolyacii-potolka">Знания и аналитика</a>
              </li>
              <li>
                <a href="/materialy-dlya-shumoizolyacii-sten">Образовательные программы</a>
              </li>
              <li>
                <a href="/materialy-dlya-shumoizolyacii-sten">Сервисы</a>
              </li>
            </ul> -->
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
          </div>
        </div>
      </div>
    </nav>
  </div>