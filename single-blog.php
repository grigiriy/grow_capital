<?php

/**
 * Template Name: Blog
 * * Template Post Type: blog
 */
get_header(); ?>
<section class="header mb-60">
  <div class="container-w">
    <div class="row mb-20 pt-40">
      <div class="col-xl-12 fs-xs fw-3">
        <?php get_template_part('theme-helpers/template-parts/breadcrumbs'); ?>
      </div>
    </div>
    <div class="row mb-30">
      <?php get_template_part('theme-helpers/template-parts/share', 'block'); ?>
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-8 infobl">
            <h1><?= get_the_title(); ?></h1>
            <?= get_the_content(); ?>
          </div>
          <div class="col-lg-4">

            <div class="card mb-30 inread-widget sticky">
              <div class="card-bg lazyloaded" style="background-image: url(&quot;https://growcapital.ru/wp-content/uploads/2020/12/kak-sformirovat-portfel.jpg.webp&quot;);" data-bg="https://growcapital.ru/wp-content/uploads/2020/12/kak-sformirovat-portfel.jpg" data-bg-webp="https://growcapital.ru/wp-content/uploads/2020/12/kak-sformirovat-portfel.jpg.webp">
                <div class="bg-tr card-topbg">
                  <a href="https://growcapital.ru/webinars/kak-vybrat-vo-chto-investirovat/" class="fc-light">
                    <div class="svg-white">
                      <p class="h3">Как правильно оценить инвестиционные риски?</p>

                      <div class="icon-listed">
                        <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                          <defs>
                            <style>
                              .eye-1 {
                                fill: currentcolor;
                              }
                            </style>
                          </defs>
                          <title></title>
                          <path class="eye-1" d="M16,25.47c-7.53,0-13.41-8.54-13.66-8.91L2,16l.38-.56C2.59,15.07,8.47,6.53,16,6.53s13.41,8.54,13.66,8.91L30,16l-.38.56C29.41,16.93,23.53,25.47,16,25.47ZM4.41,16C5.8,17.82,10.55,23.47,16,23.47S26.2,17.83,27.59,16C26.2,14.18,21.45,8.53,16,8.53S5.8,14.17,4.41,16Z"></path>
                          <path class="eye-1" d="M16,11a4.14,4.14,0,0,0-.48,0,.34.34,0,0,0-.31.33.34.34,0,0,0,.1.24h0a2.59,2.59,0,0,1,.74,1.8A2.63,2.63,0,0,1,13.42,16a2.58,2.58,0,0,1-1.78-.72h0a.35.35,0,0,0-.6.18A4.13,4.13,0,0,0,11,16a5,5,0,1,0,5-5Z"></path>
                        </svg>
                        <p>Вебинар / Бесплатно</p>
                      </div>
                      <div class="icon-listed">
                        <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                          <defs>
                            <style>
                              .calend-1,
                              .calend-3,
                              .calend-4 {
                                fill: none;
                                stroke: currentcolor;
                              }

                              .calend-1,
                              .calend-4 {
                                stroke-linecap: round;
                                stroke-linejoin: round;
                              }

                              .calend-1 {
                                stroke-width: 2px;
                              }

                              .calend-2 {
                                fill: currentcolor;
                              }

                              .calend-3 {
                                stroke-miterlimit: 10;
                              }
                            </style>
                          </defs>
                          <title></title>
                          <rect class="calend-1" height="20" width="20" x="6" y="6"></rect>
                          <rect class="calend-2" height="4" width="20" x="6" y="6"></rect>
                          <line class="calend-3" x1="6" x2="26" y1="11.5" y2="11.5"></line>
                          <polyline class="calend-4" points="14.5 15.5 16 15.5 16 21"></polyline>
                          <line class="calend-4" x1="14" x2="18" y1="21.5" y2="21.5"></line>
                        </svg>
                        <p>18-20 мая</p>
                      </div>
                      <div class="icon-listed">
                        <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                          <defs>
                            <style>
                              .time-1,
                              .time-2,
                              .time-3 {
                                fill: none;
                                stroke: currentcolor;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                              }

                              .time-1 {
                                stroke-width: 2px;
                              }

                              .time-2 {
                                stroke-width: 3px;
                              }
                            </style>
                          </defs>
                          <title></title>
                          <circle class="time-1" cx="16" cy="16" r="11"></circle>
                          <line class="time-2" x1="16" x2="22.42" y1="16" y2="16"></line>
                          <line class="time-3" x1="12.42" x2="16" y1="9.5" y2="16"></line>
                        </svg>
                        <p>3 дня по 1 часу</p>
                      </div>

                      <button class="btn-pt mt-20 mb-10">Записаться
                        <span class="icon-angle-right"> </span>
                      </button>
                    </div>
                  </a>
                </div>
              </div>

              <div class="card-body pl-0-sm-md list-decor list-icon-ch">
                <a href="https://growcapital.ru/webinars/kak-vybrat-vo-chto-investirovat/">
                  <p class="h5 mb-20">Риски и доходность финансовых инструментов</p>
                  <div class="fs-s mb-30 fc-dark">
                    <ul>
                      <li>Сколько можно заработать или потерять на финансовых рынках?</li>
                      <li>Как оценить риски, связанные с инвестированием в те или иные финансовые инструменты?</li>
                      <li>Как правильно оценить эффективность инвестиционной стратегии?</li>
                      <li>Какие подходы применяются для прогнозирования риска и доходности, и можно ли доверять этим прогнозам?</li>
                    </ul>
                  </div>
                </a>
              </div>
            </div>

          </div>
        </div>
        <?php if (1 > 2) { ?>
          <div class="row bottom-widget">

            <div class="col-lg-4 mb-50 lim-smd lim-md">
              <div class="facecrd-65">
                <figure class="mb-0">
                  <img src="<?= get_template_directory_uri(); ?>/assets/img/dohodnost-i-riski.png" alt="">
                  <figcaption class="pl-10">
                    <p class="h6">
                      <a href="/webinars/kak-vybrat-vo-chto-investirovat/" class="fc-link">Риски и доходность финансовых инструментов</a>
                    </p>

                  </figcaption>
                </figure>
              </div>
              <p class="mb-10 fw-5 fs-s">Бесплатный практикум</p>
              <p class="fs-s">Сколько можно заработать или потерять на финансовых рынках. Как оценить риски, связанные с
                инвестированием в определённые инструменты.</p>
              <a href="/webinars/kak-vybrat-vo-chto-investirovat/" class="btn-small btn-contr hider-9">Подробнее</a>
            </div>

            <div class="col-lg-4 mb-50 lim-smd lim-md">
              <div class="facecrd-65">
                <figure class="mb-0">
                  <img src="<?= get_template_directory_uri(); ?>/assets/img/sistema-investirovaniya.png" alt="">
                  <figcaption class="pl-10">
                    <p class="h6">
                      <a href="/webinars/principy-sistematicheskogo-investirovaniya/" class="fc-link">Как заработать, а не потерять? Система инвестирования </a>
                    </p>

                  </figcaption>
                </figure>
              </div>
              <p class="mb-10 fw-5 fs-s">Образовательная программа</p>
              <p class="fs-s">Построение персональной системы управления портфелем ценных бумаг на основе
                систематических правил. Принципы и инструменты.</p>
              <a href="/webinars/principy-sistematicheskogo-investirovaniya/" class="btn-small btn-contr hider-9">Подробнее</a>
            </div>

            <div class="col-lg-4 mb-50 lim-smd lim-md">
              <div class="facecrd-65">
                <figure class="mb-0">
                  <img src="<?= get_template_directory_uri(); ?>/assets/img/dohodnost-i-riski.png" alt="">
                  <figcaption class="pl-10">
                    <p class="h6">
                      <a href="/webinars/principy-formirovaniya-individualnogo-portfelya/" class="fc-link">Как составить свой идеальный портфель?</a>
                    </p>

                  </figcaption>
                </figure>
              </div>
              <p class="mb-10 fw-5 fs-s">Бесплатный практикум</p>
              <p class="fs-s">Что нужно учесть при составлении персонального финансового портфеля. Основы целевого долгосрочного инвестирования.</p>
              <a href="/webinars/principy-formirovaniya-individualnogo-portfelya/" class="btn-small btn-contr hider-9">Подробнее</a>

            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>