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
        <div class="row">
          <div class="col-lg-8 infobl pb-20-9">
            <p>Для многих инвесторов ключевым параметром инвестиционного портфеля является показатель доходности. То,
              как именно её рассчитывать, зависит от того:</p>
            <ul>
              <li>пополняете ли вы портфель или наоборот время от времени выводите средства;</li>
              <li>являетесь ли вы профессиональным портфельным управляющим или определяете реальную доходность
                собственных инвестиций;</li>
              <li>учитываете ли вы инфляцию;</li>
              <li>делается ли оценка фактической доходности за прошлый период или прогнозируется ее значение в
                будущем.</li>
            </ul>
            <p>Рассказываем подробнее, какой именно вариант расчета выбирать при определенных условиях оценки
              доходности вашего инвестиционного портфеля.</p>

          </div>
          <div class="col-lg-4 pb-30-9">
          <div class="brdc pd-30-9 bg-dark-9 fc-light-9">
            <div class="brdl-shot"></div>
            <div class="facecrd-55">
              <figure class="mb-0">
                <img src="<?= get_template_directory_uri();?>/assets/img/chart-2.png" alt="">
                <figcaption class="pl-10">
                  <p class="h5">
                    <a href="" class="fc-link fc-light-9">excel-шаблон</a>
                  </p>
                  <p class="mb-10 fw-5">Расчет доходности</p>
                </figcaption>
              </figure>
            </div>
            <p class="fs-s">В дополнение к статье мы подготовили специальный excel-файл для расчета доходности
              инвестиций с учетом различных факторов.</p>
            <button href="#modal" class="btn-small-pt">Скачать
                  <span class="icon-angle-right"> </span>
            </button>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 infobl">
            <h2>Расчет доходности за один период</h2>
            <p>Самый простой вариант, когда требуется рассчитать доходность портфеля за один период (день, месяц, год
              и т.п.). Формула простая:</p>
            <div class="txt-c"><img src="<?= get_template_directory_uri();?>/assets/img/formula-dohodnosti-za-odin-period.png"
                alt="формула доходности за один период" class="formula"></div>
            <p>Где:</p>
            <ul>
              <li><span class="fw-6 fs-i">P0</span> — стоимость портфеля на начало периода,</li>
              <li><span class="fw-6 fs-i">P1</span> — стоимость портфеля на конец периода,</li>
              <li><span class="fw-6 fs-i">I1</span> — дополнительный доход / расход в конце периода (например,
                дивиденды, купоны, комиссии брокера и пр.).</li>
            </ul>
            <p>Обратите внимание, что начисление дополнительного дохода или расхода должно осуществляться в конце
              периода. Если фактическое начисление происходит в начале или середине периода, то доходность портфеля
              будет считаться по другой формуле (см. далее).</p>
            <div class="blockquote">
              <h3>Пример №1</h3>
              <ul>
                <li>1 апреля 2020 года вы купили акций на 100 тыс руб. </li>
                <li>На конец апреля 2020 года стоимость акций в портфеле выросла до 110 тыс руб.</li>
                <li>Кроме того, по одной из акций были начислены и выплачены дивиденды в размере 2 тыс руб.</li>
              </ul>
              <p>Доходность портфеля за 1 месяц составила:</p>
              <span class="fw-7 fs-l">(110 - 100 + 2) / 100 = 12%</span>

            </div>
          </div>
          <div class="col-lg-4">

          <div class="brdc pd-30-9 bg-dark-9 fc-light-9">
            <div class="brdl-shot">
            </div>
            <div class="facecrd-55">
              <figure class="mb-0">
                <img src="<?= get_template_directory_uri();?>/assets/img/chart-4.png" alt="">
                <figcaption class="pl-10">
                  <p class="h5">
                    <a href="" class="fc-link fc-light-9">Как выбрать во что инвестировать?</a>
                  </p>
                <div class="svg-black fs-s">
                    <div class="icon-listed">
                      <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.eye-1{fill:currentcolor;}</style></defs><title></title><path class="eye-1" d="M16,25.47c-7.53,0-13.41-8.54-13.66-8.91L2,16l.38-.56C2.59,15.07,8.47,6.53,16,6.53s13.41,8.54,13.66,8.91L30,16l-.38.56C29.41,16.93,23.53,25.47,16,25.47ZM4.41,16C5.8,17.82,10.55,23.47,16,23.47S26.2,17.83,27.59,16C26.2,14.18,21.45,8.53,16,8.53S5.8,14.17,4.41,16Z"></path><path class="eye-1" d="M16,11a4.14,4.14,0,0,0-.48,0,.34.34,0,0,0-.31.33.34.34,0,0,0,.1.24h0a2.59,2.59,0,0,1,.74,1.8A2.63,2.63,0,0,1,13.42,16a2.58,2.58,0,0,1-1.78-.72h0a.35.35,0,0,0-.6.18A4.13,4.13,0,0,0,11,16a5,5,0,1,0,5-5Z"></path></svg>
                      <p>Вебинар / <b>бесплатно</b></p>
                    </div>

                  </div>                    
                </figcaption>
              </figure>
            </div>
            <p class="mb-10 fw-5">Риски и доходность финансовых инструментов</p><p class="fs-s">Сколько можно заработать или потерять на финансовых рынках? Как оценить риски, связанные с инвестированием в те или иные инструменты?</p>
            <button href="#modal" class="btn-small-pt">Посмотреть
                  <span class="icon-angle-right"> </span>
            </button>

            </div>
          </div>
          </div>            

          <div class="row">
          <div class="col-lg-8 infobl pb-20-9">
            <h2>Доходность за несколько периодов</h2>
            <p>Если вы держите портфель несколько периодов и известна доходность за каждый отдельный период, то можно
              рассчитать совокупную доходность за весь срок жизни портфеля. Иногда это знание отрезвляет, особенно
              тех, кто привык складывать доходности, и полагает, что если заработать 50% в первый год и потерять 40%
              во второй, то все равно “на круг” будешь в плюсе. К сожалению, не будешь.
              Формула для доходности за несколько периодов:
            </p>
            <div class="txt-c"><img src="<?= get_template_directory_uri();?>/assets/img/formula-dohodnosti-za-neskolko-periodov.png"
                alt="формула доходности за несколько периодов" class="formula"></div>
            <ul>
              <li><span class="fw-6 fs-i">R</span> — доходность за несколько периодов,</li>
              <li><span class="fw-6 fs-i">R<sub>i</sub></span> — стоимость портфеля на конец периода,</li>
              <li><span class="fw-6 fs-i">T</span> — общее количество периодов.</li>
            </ul>
            <div class="blockquote">
              <h3>Пример №1</h3>
              <ul>
                <li>1 апреля 2020 года вы купили акций на 100 тыс руб. </li>
                <li>На конец апреля 2020 года стоимость акций в портфеле выросла до 110 тыс руб.</li>
                <li>Кроме того, по одной из акций были начислены и выплачены дивиденды в размере 2 тыс руб.</li>
              </ul>
              <p>Доходность портфеля за 1 месяц составила:</p>
              <span class="fw-7 fs-l">(110 - 100 + 2) / 100 = 12%</span>

            </div>
          </div>
          <div class="col-lg-4 pb-30-9">
            <div class="brdc pd-30-9 bg-dark-9 fc-light-9">
            <div class="brdl-shot">
                      <h4>Большой материал? Учись постепенно по подписке! </h3>
            </div>
            <p>Не беда, если нет сил или возможности прочитать всё сразу. Мы разбили этот урок на части. Подпишись
              и пройди этот урок бесплатно за несколько писем.
            </p>


            <p class="h5 mb-f-08">Подписка на урок</p>
            <form class="contactForm" novalidate id="sticky_form"
              onsubmit="ym(55367455, 'reachGoal', 'sticky'); return true;">
              <div class="contact-form">
                <div class="form-group" hidden>
                  <input type="text" class="form-control first-name" placeholder="Имя" name="first-name" />
                  <p class="form-alert"></p>
                </div>

                <div class="form-group">
                  <input type="tel" class="form-control form-phone" placeholder="Ваш E-mail" name="phone"
                    data-validation-required-message="Поле не заполнено!" required />
                  <span class="form-alert help-block"> </span>
                </div>

                <div class="successMessage"></div>
                <div class="preloader" hidden>
                  <img src="js/preloader.png" alt="" />
                </div>
                <button class="btn" type="submit">Подписаться</button>
              </div>
            </form>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 infobl mb-30">
            <h2>Что дальше?</h2>
            <p>Поздравляем, теперь вы знаете больше об управлении портфелем. Чтобы использовать полученные знания на
              практике, вы можете скачать готовый <a href="" class="fw-6">excel-файл</a>, с помощью которого можно
              вычислить наиболее часто используемые расчеты доходностей.
              Также для более полного понимания темы предлагаем ознакомиться с нижеследующими материалами.</p>
          </div>

          <div class="col-lg-4 mb-50 lim-smd lim-md">

            <div class="facecrd-65">
              <figure class="mb-0">
                <img src="<?= get_template_directory_uri();?>/assets/img/formirovanie-portfelya.png" alt="">
                <figcaption class="pl-10">
                  <p class="h6">
                    <a href="" class="fc-link">Принципы формирования портфеля</a>
                  </p>

                </figcaption>
              </figure>
            </div>
            <p class="mb-10 fs-s fw-5">Статья</p>
            <p class="fs-s">Основные этапы и задачи, которые нужно решить, чтобы сформировать оптимальный
              инвестиционный портфель.</p>
            <a class="btn-small btn-contr hider-9">Подробнее</a>

          </div>
          <div class="col-lg-4 mb-50 lim-smd lim-md">

            <div class="facecrd-65">
              <figure class="mb-0">
                <img src="<?= get_template_directory_uri();?>/assets/img/dohodnost-i-riski.png" alt="">
                <figcaption class="pl-10">
                  <p class="h6">
                    <a href="" class="fc-link">Риски и доходность финансовых инструментов</a>
                  </p>

                </figcaption>
              </figure>
            </div>
            <p class="mb-10 fw-5 fs-s">Бесплатный практикум</p>
            <p class="fs-s">Сколько можно заработать или потерять на финансовых рынках. Как оценить риски, связанные с
              инвестированием в определённые инструменты.</p>
            <a class="btn-small btn-contr hider-9">Подробнее</a>

          </div>
          <div class="col-lg-4 mb-50 lim-smd lim-md">

            <div class="facecrd-65">
              <figure class="mb-0">
                <img src="<?= get_template_directory_uri();?>/assets/img/sistema-investirovaniya.png" alt="">
                <figcaption class="pl-10">
                  <p class="h6">
                    <a href="" class="fc-link">Как заработать, а не потерять? Система инвестирования </a>
                  </p>

                </figcaption>
              </figure>
            </div>
            <p class="mb-10 fw-5 fs-s">Образовательная программа</p>
            <p class="fs-s">Построение персональной системы управления портфелем ценных бумаг на основе
              систематических правил. Принципы и инструменты.</p>
            <a class="btn-small btn-contr hider-9">Подробнее</a>

          </div>
        </div>
        </div> 
      </div> 
    </div>
</section>

<?php get_footer(); ?>
