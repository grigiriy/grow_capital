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
            <div class="txt-c none mt-10"><a class="fd-n fw-5" href="tel:+74993212048">+7 499 321-20-48</a></div>
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
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <header class="mt-0">
    <section class="image_bg" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/2-6.jpg);">
      <div class="container-w">
        <div class="pt-60 pb-60 fc-light">
          <div class="lim-12">
            <div class="pr-20 pd-0-smd pd-0-sm mb-60">
              <h1 class="mb-20">
                <div class="fs-xl mb-10">Grow Capital
                </div>
                Финансовое образование и&nbsp;сервисы для&nbsp;эффективного управлении инвестициями
              </h1>
            </div>
          </div>
          <div class="simple_form lim-12">
            <div class="row">
              <div class="col-lg-6">
                <div class=" mb-30 brdl pd-20">
                  <form class="form-goriz">
                    <input class="wdth-66" name="name" type="text" placeholder="E-mail" aria-label="Имя">
                    <button type="submit" class="btn">Получить
                    </button>
                  </form>
                </div>
              </div>
              <div class="col-lg-6">
                <p class="fs-l fw-5">Оставьте e-mail и получите доступ ко всем бесплатным сервисам и образовательным
                  программам.
                </p>
                <p class="fs-l fw-5">
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>
