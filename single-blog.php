<?php

/**
 * Template Name: Blog
 */
get_header(); ?>
<section class="header mb-60">
  <div class="container-w">
    <div class="row mb-20 pt-40">
      <div class="col-xl-offset-3 col-xl-9 fs-xs fw-3">
        <?php $cat = get_the_terms( $post->ID, 'category_blog_tax' )[0]; ?>
        <a href="/category_blog/<?= $cat->slug;?>"><?= $cat->name;?></a> <span class="fc-contr">/</span> Расчет доходности портфеля
      </div>
    </div>
    <div class="row mb-30">

      <div class="col-lg-3 hider-9">
        <div class="mb-30 pr-60">
          <div class="fw-6 mb-f-07">Методические материалы</div>
          <ul class="fs-s mb-30 list-sidebar">
            <?php
            $args = [
              'orderby' => 'post_date',
              'post_type' => 'post',
              'numberposts' => 10,
              ];
              foreach (get_posts($args) as $post){ ?>
                <li>
                <a href="/<?= $post->post_name; ?>">
                  <?= $post->post_title; ?>
                </a>
              </li>
              <?php }
              wp_reset_postdata();
            ?>
          </ul>
        </div>
        <div class="mb-30 pr-60">
          <div class="fw-6 mb-f-07">Блог</div>
          <ul class="fs-s mb-30 list-sidebar">
            <?php
            $terms = get_terms(array(
              'taxonomy' => 'category_blog_tax',
            ));
            foreach ($terms as $term) { ?>

              <li>
                <a href="/blog/<?= $term->slug; ?>">
                  <?= $term->name; ?>
                </a>
              </li>

            <?php }?>
          </ul>
        </div>
      </div>

      <div class="col-lg-9">
        <div class="row">
          <div class="col-lg-12">
            <h1><?= get_the_title(); ?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 infobl">
            <?= get_the_content(); ?>
          </div>
          <div class="col-lg-4">

            <div class="brdc pd-30-9 bg-dark-9 fc-light-9 hider-9">
              <div class="brdl-shot"></div>
              <div class="facecrd-55">
                <figure class="mb-0">
                  <img src="<?= get_template_directory_uri(); ?>/assets/img/chart-4.png" alt="">
                  <figcaption class="pl-10">
                    <p class="h5">
                      <a href="/webinars/kak-vybrat-vo-chto-investirovat/" class="fc-link fc-light-9">Как выбрать во что инвестировать?</a>
                    </p>
                    <div class="svg-black fs-s">
                      <div class="icon-listed">
                        <p>Вебинар / <b>бесплатно</b></p>
                      </div>

                    </div>
                  </figcaption>
                </figure>
              </div>
              <p class="mb-10 fw-5">Риски и доходность финансовых инструментов</p>
              <p class="fs-s">Сколько можно заработать или потерять на финансовых рынках? Как оценить риски, связанные с инвестированием в те или иные инструменты?</p>
              <button href="/webinars/kak-vybrat-vo-chto-investirovat/" class="btn-small-pt">Посмотреть
                <span class="icon-angle-right"> </span>
              </button>

            </div>
          </div>
        </div>

        <div class="row">

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
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>