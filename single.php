<?php
/**
 * Template Name: Single
 */
global $icons;

get_header(); ?>

<section class="header mb-60">
  <div class="container-w">
    <div class="row mb-20 pt-40">
      <div class="col-xl-offset-3 col-xl-9 fs-xs fw-3">
        <a href="">Знания и аналитика</a> <span class="fc-contr">/</span> Расчет доходности портфеля
      </div>
    </div>
    <div class="row mb-30">
      <div class="col-lg-3 hider-9">
        <div class="mb-30 pr-60">
          <div class="fw-6 mb-f-07">Оглавление</div>
          <ul class="fs-s mb-30 list-sidebar">
            <li><a href="#1">Какой бывает доходность</a></li>
            <li><a href="#2">Доходность за один период</a></li>
            <li><a href="#3">Доходность за несколько периодов</a></li>
            <li><a href="#4">Средняя доходность</a></li>
            <li><a href="#5">Среднегодовая доходность</a></li>
            <li><a href="#6">Доходность, взвешенная по деньгам</a></li>
            <li><a href="#7">Доходность, взвешенная по времени</a></li>
            <li><a href="#8">Номинальная и реальная доходности</a></li>
            <li><a href="#9">Оценка будущей доходности портфеля</a></li>
            <li><a href="10">Важна не только доходность</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row">
          <div class="col-lg-12">
            <h1>Доходность портфеля — варианты оценки</h1>
            <div class="mb-20 hider-lg">
              <div class="h4 mb-20">Оглавление</div>
              <ul class="fs-s list-inline list-decor list-angle-right">
                <li><a href="#1">Какой бывает доходность</a></li>
                <li><a href="#2">Доходность за один период</a></li>
                <li><a href="#3">Доходность за несколько периодов</a></li>
                <li><a href="#4">Средняя доходность</a></li>
                <li><a href="#5">Среднегодовая доходность</a></li>
                <li><a href="#6">Доходность, взвешенная по деньгам</a></li>
                <li><a href="#7">Доходность, взвешенная по времени</a></li>
                <li><a href="#8">Номинальная и реальная доходности</a></li>
                <li><a href="#9">Оценка будущей доходности портфеля</a></li>
                <li><a href="10">Важна не только доходность</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="infobl">
          <?php the_content(); ?>
        </div>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>