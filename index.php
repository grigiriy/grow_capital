<?php

/**
 * Template Name: Main
 */
get_header(); ?>
<?php get_template_part('theme-helpers/template-parts/header') ?>
<section class="mb-50 pt-60 bg-grdn-up" id="webinars">
  <div class="container-w">
    <h2 class="txt-c txt-l-smd txt-l-sm mb-40">Ближайшие программы<br />по систематическому инвестированию</h2>

    <div class="row card-h">

      <?php
      $args = [
        'post_type' => 'webinars',
        'numberposts' => -1
      ];

      $courses = get_posts($args);
      foreach ($courses as $course) {
        set_query_var('course_id', $course->ID);
        get_template_part('theme-helpers/template-parts/webinar', 'card');
      } ?>

    </div>
  </div>
</section>

<section class="mb-20">
  <div class="container-w">
    <div class="lim-12">
      <h2 class="txt-c txt-l-sm mb-40">Организаторы обучения</h2>
      <div class="row card-h">
        <div class="col-lg-6 mb-30 lim-md lim-smd">
          <div class="card">
            <div class="row">
              <div class="col-12">
                <div class="card-head">
                  <div class="facecrd-125">
                    <figure class="mb-0">
                      <img src="<?= get_template_directory_uri(); ?>/assets/img/dmitrij-kozlov.jpg" alt="" class="brdr">
                      <figcaption>
                        <div class="pl-10 pl-0-sm">
                          <p class="h4">
                            Дмитрий Козлов
                          </p>
                          <p class="fw-5 mb-10">Частный инвестор,<br />финансовый советник</p>
                        </div>

                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card-body brdl-t pt-30">
                  <ul class="list-decor list-icon-ch fs-s-sm">
                    <li>ex-CEO ООО “Диалог” (группа Сбербанк)</li>
                    <li>Экс-управляющий директор ПАО Сбербанк</li>
                    <li>London Business School (Executive Development Program)</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mb-30 lim-md lim-smd">
          <div class="card">
            <div class="row">
              <div class="col-12">
                <div class="card-head">
                  <div class="facecrd-125">
                    <figure class="mb-0">
                      <img src="<?= get_template_directory_uri(); ?>/assets/img/ivan-vladimirov.jpg" alt="" class="brdr">
                      <figcaption>
                        <div class="pl-10 pl-0-sm">
                          <p class="h4">
                            Владимиров Иван
                          </p>
                          <p class="fw-5 mb-10">Серийный предприниматель, частный инвестор</p>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card-body brdl-t pt-30">
                  <ul class="list-decor list-icon-ch fs-s-sm">
                    <li>сооснователь, СCO Darberry, продан в 2011 Groupon Inc. ($1,5 млрд. оценка)</li>
                    <li>Текущие проекты: сервис маршрутизации пациентов rakanet.ru, сеть звукоизоляционных центров</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mb-50">
  <div class="container-w">
    <div class="brdl pd-30 brdw-2 brdc brdl-0-9 pd-0-9 pd-0-sm">
      <div class="row mb-30">
        <div class="col-lg-5">
          <div class="brdl-shot"></div>
          <p>Очень часто финансовые рынки сравнивают с казино и это справедливо для тех, кто приходит туда полный
            надежд и зачастую без базовых знаний.</p>
          <p>Но даже если вы разбираетесь в финансовых инструментах и вникали в технический и фундаментальный анализ,
            этого не достаточно для качественного управления портфелем.</p>
        </div>
        <div class="col-lg-7">
          <div class="brdl-shot"></div>
          <p class="h3">Мы учим эффективному управлению финансовыми активами на основе принципов систематического
            инвестирования</p>
          <p>Систематические правила помогают оцифровывать и конкретизировать доходность и риски финансовых
            инструментов. Благодаря этим знаниям, инвестор может оптимизировать свой портфель с учетом его аппетитов
            и готовности к рискам.</p>
        </div>
      </div>
      <div class="row">

        <div class="col-lg-5">
          <div class="pd-30 bg-dark fc-light">
            <h3>Не систематический подход</h3>
            <p>Большинство частных инвесторов и трейдеров фокусируются только на двух вопросах:</p>
            <ul class="fw-5">
              <li>Что купить или продать?
              </li>
              <li>Когда открыть или закрыть позицию?
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="pd-30 bg-accent">
            <p class="h3">Систематическое инвестирование</p>
            <p class="">Систематическое инвестирование включает в себя четкие ответы на остальные важные вопросы.</p>
            <ul class="fw-5">
              <li>Какой поставить Stop Loss / Take profit?</li>
              <li>Сколько потенциально я могу потерять/заработать на данной позиции?</li>
              <li>Имеет ли смысл использовать маржу, и если да, то в каком объеме?</li>
              <li>Как покупка/продажа данной ценной бумаги влияет на параметры моего портфеля?</li>
              <li>Изменились ли параметры риска моего финансового актива, и нужно ли увеличить/уменьшить размер позиции?</li>
            </ul>
          </div>
        </div>

        <?php
        set_query_var("course_id", "55");
        get_template_part('theme-helpers/template-parts/forms/webinar', 'widget');
        ?>

      </div>
    </div>
  </div>
</section>

<section class="mb-30">
  <div class="container-w">
    <h2 class="txt-c txt-l-9 mb-40">Отзывы участников образовательных программ</h2>
    <div class="row">
      <?php get_template_part('theme-helpers/template-parts/reviews'); ?>
    </div>
  </div>
</section>

<section class="mb-60">
  <div class="container-w">
    <div class="brdl pd-30 brdw-2 brdr-c brdc brdl-0-9 pd-0-9 pd-0-sm">
      <h2 class="mb-40">Образовательные материалы</h2>
      <div class="row">
        <div class="col-lg-4 mb-40">
          <p class="h5">
            <a href="/posts/" class="fc-link">Статьи на сайте</a>
          </p>
          <p class="fs-s">Основные знания, которыми обязательно должен владеть инвестор, и то, о чем не рассказывают
            на курсах брокеров. Важно не только научиться нажимать кнопки Купить/Продать, но и понимать как устроен
            рынок, уметь оценивать риски и доходность.
          </p>
        </div>

        <div class="col-lg-4 mb-40">
          <p class="h5">
            <a href="/programs/" class="fc-link">Образовательные программы</a>
          </p>
          <p class="fs-s">Стартовые и продвинутые программы для тех, кто хочет зарабатывать на фондовом рынке
            долгосрочно:
          <ul class="list-decor list-angle-right fs-s mb-30 fc-dark">
            <li>Принципы систематического инвестирования.</li>
            <li>Как формировать и управлять портфелем, опираясь на конкретные цифры и правила.</li>
            <li>Готовые инструменты для расчетов.</li>
          </ul>
        </div>

        <div class="col-lg-4 mb-40">
          <p class="h5">
            <a href="/services/" class="fc-link">Полезные сервисы</a>
          </p>
          <p class="fs-s">Доступны для зарегистрированных пользователей и участников образовательных программ
          </p>
          <a class="btn-small btn-contr mb-40" href="<?= carbon_get_theme_option('services'); ?>" target="_self">Зарегистрироваться</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mb-60">
  <div class="container-w">
    <h2 class="txt-c txt-l-9 mb-60 mb-40-9 mb-0-sm">Начните бесплатное обучение по подписке</h2>
    <div class="mb-40-9">
      <div class="steps">
        <div class="step">
          <p class="step_label">1</p>
          <p>Чтобы начать учиться, выберите мессенджер или введите почту.</p>
        </div>
        <div class="step">
          <p class="step_label">2</p>
          <p>Придёт сообщение со списком образовательных программ.</p>
        </div>

        <div class="step">
          <p class="step_label">3</p>
          <p>Кликните на интересную и получайте последовательные уроки по этой теме.</p>
        </div>

        <div class="step">
          <p class="step_label">4</p>
          <p>В последнем уроке можно будет выбрать следующий раздел для обучения.</p>
        </div>
        <div class="step">
          <p class="step_label">5</p>
          <p>Если тема окажется неактуальной, всегда можно отписаться.</p>
        </div>
      </div>
    </div>

    <div class="lim-12">
      <div class="mb-30 brdl pd-20 brdw-3 brdc brdl-0-9 pd-0-9 pd-0-sm bg-light bg-none-9">
        <?php get_template_part('theme-helpers/template-parts/forms/services', 'form'); ?>
        <div class="row">
          <div class="col-md-8 pr-0 lim-md lim-smd">
          <script id="e52e8e989fd7cb49a5a6fdb2148f3071281799d4" src="https://edu.growcapital.ru/pl/lite/widget/script?id=327501&rand1234"></script>
          </div>
          <div class="col-md-4 pl-0 lim-md lim-smd">
            <div class="wa-btn">
              <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', carbon_get_theme_option('wa')); ?>" target="_blank">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/whatsapp.png" class="icon-50" alt=""> Получить в WhatsApp
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>