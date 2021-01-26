<?php

/**
 * Template Name: Webinar
 * Template Post Type: webinars
 */
global $icons;

get_header(); ?>

<?php get_template_part('theme-helpers/template-parts/header') ?>
<?php get_template_part('theme-helpers/template-parts/prices') ?>
<section class="bg-grdn-up pb-50 pt-60">
  <div class="container-w">
    <h2 class="txt-c txt-l-9 mb-40">Вебинар отвечает на практические вопросы</h2>
    <div class="row fw-5 fs-l">
      <div class="col-lg-4 mb-50">
        <div class="brdl-shot"></div>Насколько рискованны ваши инвестиции?
      </div>
      <div class="col-lg-4 mb-50">
        <div class="brdl-shot">Как можно увеличить доходность не повышая уровень риска?</div>
      </div>
      <div class="col-lg-4 mb-50">
        <div class="brdl-shot">Имеет ли смысл использовать заемное финансирование?</div>
      </div>
      <div class="col-lg-4 mb-50">
        <div class="brdl-shot">Имеет ли смысл использовать заемное финансирование?</div>
      </div>
      <div class="col-lg-4 mb-50">
        <div class="brdl-shot">Как оценить эффективность фонда или предлагаемой консультантом инвестиционной
          стратегии?</div>
      </div>
      <div class="col-lg-4 mb-50">
        <div class="brdl-shot">Что такое систематическое инвестирование и в чем его преимущество?</div>
      </div>
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
                      <img src="img/dmitrij-kozlov.jpg" alt="" class="brdr">
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
                      <img src="img/ivan-vladimirov.jpg" alt="" class="brdr">
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
    <div class="lim-12">
      <div class="brdl pd-30 brdw-2 brdr-c brdc brdl-0-9 pd-0-9 pd-0-sm">
        <h2 class="mb-30">Программа</h2>
        <p></p>
        <div class="mb-40">
          <p class="h3 mb-20">День 1. Введение в систематическое инвестирование</p>
          <div class="faq">
            <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
              <p class="question">Типы инвесторов/трейдеров</p>
              <div class="answer" style="display: none;">
                <ul>
                  <li>Долгосрочный инвестор</li>
                  <li>Трейдер</li>
                  <li>Алго-трейдер</li>
                </ul>
              </div>
            </div>
            <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
              <p class="question">Почему инвесторы часто теряют деньги на финансовых рынках?</p>
              <div class="answer" style="display: none;">
                <ul>
                  <li>Когнитивные искажения</li>
                  <li>Затраты, связанные с инвестициями/торговлей</li>
                </ul>
              </div>
            </div>
            <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
              <p class="question">Можно ли заработать на финансовых рынках?</p>
              <div class="answer">
                <ul>
                  <li>Что значит "обыграть рынок"?</li>
                  <li>Премия за риск</li>
                  <li>Гипотеза эффективного рынка</li>
                  <li>Рыночные аномалии</li>
                  <li>Факторы доходности</li>
                </ul>
              </div>
            </div>
            <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
              <p class="question">Систематическое инвестирование</p>
              <div class="answer">
                <ul>
                  <li>Ключевые вопросы инвестора/трейдера</li>
                  <li>Принятие решений с помощью систематических правил</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-40">
          <p class="h3 mb-20">День 3. Диверсификация, "плечо" и тестирование инвестиционных стратегий</p>
          <div class="faq">
            <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
              <p class="question">Подходы к диверсификации</p>
              <div class="answer" style="display: none;">
                <ul>
                  <li>Корреляция доходности</li>
                  <li>Что такое диверсификация?</li>
                  <li>Диверсификация инструментов и торговых стратегий</li>
                  <li>Мифы диверсификации</li>
                </ul>
              </div>
            </div>
            <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
              <p class="question">Маржинальная торговля — стоит или нет?</p>
              <div class="answer" style="display: none;">
                <ul>
                  <li>Мифы маржинальной торговли</li>
                  <li>Способы использования заемного финансирования</li>
                  <li>Плюсы и минусы использования "плеча"</li>
                </ul>
              </div>
            </div>
            <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
              <p class="question">Тестирование инвестиционных и торговых стратегий</p>
              <div class="answer">
                <ul>
                  <li>Подходы к тестированию</li>
                  <li>Насколько можно доверять результатам тестирования?</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-40">
          <p class="h3 mb-20">День 2. Оценка доходности и рисков финансовых инструментов</p>
          <div class="faq">
            <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
              <p class="question">Доходность финансовых инструментов</p>
              <div class="answer" style="display: none;">
                <ul>
                  <li>Способы расчета фактической доходности</li>
                  <li>Подходы к оценке будущей доходности</li>
                </ul>
              </div>
            </div>
            <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
              <p class="question">Риски финансовых инструментов</p>
              <div class="answer" style="display: none;">
                <ul>
                  <li>Виды рисков финансовых инструментов</li>
                  <li>Оценка рисков финансовых инструментов</li>
                  <li>Асимметрия доходности</li>
                </ul>
              </div>
            </div>
            <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
              <p class="question">Доходность с учетом риска</p>
              <div class="answer">
                <ul>
                  <li>Коэффициент Шарпа</li>
                  <li>Доходность с учетом риска различных финансовых активов</li>
                  <li>Реалистичные оценки будущей доходности с учетом риска</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-50 pd-30 bg-accent">
          <P class="h2 mb-20">Даты и сроки живого вебинара</p>
          <ul class="list-inline fs-l mb-0">
            <li>
              <div class="icon-listed-l">
                <img src="icons/calend.svg" alt="">
                <p>c 14.01.2021</p>
              </div>
            </li>
            <li>
              <div class="icon-listed-l">
                <img src="icons/time.svg" alt="">
                <p>3 дня по 1 часу</p>
              </div>
            </li>
            <li>
              <div class="icon-listed-l">
                <img src="icons/eye.svg" alt="">
                <p>Вебинар / <b>бесплатно</b></p>
              </div>
            </li>
          </ul>
          <p class="fw-5 fs-l fs-n-sm">Все, кто зарегистрировался также получат ссылки на запись.<br />Доступ к записи 2 недели.</p>
          <p class="h4 mb-20">Зарегистрироваться</p>
          <form class="form-goriz mb-30">
            <input class="wdth-66" name="name" type="text" placeholder="E-mail" aria-label="Имя">
            <button type="submit" class="btn btn-contr">Записаться
            </button>
          </form>

        </div>

      </div>
    </div>
  </div>
</section>


<section class="mb-30">
  <div class="container-w">
    <h2 class="txt-c txt-l-9 mb-40">Что рассказывают о вебинаре его участники</h2>

    <div class="row">

      <?php get_template_part('theme-helpers/template-parts/reviews'); ?>

    </div>

  </div>
</section>



<section class="mb-50">
  <div class="container-w">
    <h2 class="txt-c txt-l-9 mb-40">Кому будут полезны эти лекции?</h2>
    <div class="big_step mb-40">
      <div class="row">
        <div class="col-lg-7 step_content">
          <div class="step_label">1</div>
          <div class="step_text">
            <h3>Инвесторам</h3>
            <p>
              Банковские вклады низки как никогда, поэтому много инвесторов пришло на фондовый рынок. Спрос рождает предложение, и сейчас на нем полно разных финансовых продуктов и инструментов от брокеров и банков. Возможно, вы уже что-то выбрали. Но насколько оптимальным был выбор? Пройдя практикум, вы сможете:
            </p>
            <ul>
              <li>Задать правильные вопросы финансовым консультантам, чтобы оценить их компетентность.</li>
              <li>Составить представление о реально возможной доходности в соответствии с вашими ожиданиями по рискам.</li>
              <li>Более осознанно подойти к формированию портфеля.</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-5 step_image">
          <img src="img/ill_1.jpg" alt="" />
        </div>
      </div>
    </div>
    <div class="big_step  mb-40">
      <div class="row">
        <div class="col-lg-5 step_image">
          <img src="img/ill_2.jpg" alt="" />
        </div>
        <div class="col-lg-7 step_content">
          <div class="step_label">2</div>
          <div class="step_text">
            <h3>Трейдерам</h3>
            <p>
              Очень часто трейдеры принимают решения используя либо “чутье”, либо базовые принципы технического и фундаментального анализа. Чтобы избежать катастрофических просадок, нужно уметь оценивать и прогнозировать риски. Особенно этот навык будет полезен тем, кто торгует с плечом.
            </p>
            <p>Из лекций вы узнаете о систематическом подходе, который позволяет оптимизировать соотношение доходности к риску. Данными принципами руководствуются профессиональные трейдеры и управляющие хедж-фондов.

            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="big_step  mb-40">
      <div class="row">
        <div class="col-lg-7 step_content">
          <div class="step_label">3</div>
          <div class="step_text">
            <h3>Новичкам на фондовом рынке</h3>
            <p>
              Люди начинают свой самостоятельный путь на фондовом рынке тремя способами:
            </p>
            <ul>
              <li>Покупают что-то сами по рекомендациям финансовых консультантов (по сути можно считать наугад); </li>
              <li>Дают деньги в управление этим консультантам, не имея толком представления об их реальной эффективности;</li>
              <li>Начинают изучать технический и фундаментальный анализ и пытаются принимать инвестиционные решения с учетом полученных знаний.</li>
            </ul>
            <p>А начинать нужно с таких базовых понятий, как волатильность, доходность с учетом риска, диверсификация и пр., чтобы учитывать их при принятии решений. Вот об этом мы здесь и рассказываем.</p>
          </div>
        </div>
        <div class="col-lg-5 step_image">
          <img src="img/ill_1.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mb-60">
  <div class="container-w pb-30">
    <div class="brdl pd-30 brdw-2 brdr-c brdc brdl-0-9 pd-0-9 pd-0-sm">
      <p class="h4 mb-20">дополнительный бонус</p>
      <div class="row">
        <div class="col-lg-6 mb-30">
          <p class="h2">Доступ к разделу <a href="/services">Сервисы</a></p>
          <p class="fw-5">Помимо участия в вебинаре и доступа к его записи, участники получают бесплатный доступ к разделу Сервисы:</p>
          <ul class="fw-5">
            <li>Калькуляторы и excel-файлы, для оценки и управления портфелем.</li>
            <li>Бесплатные вебинары в записи.</li>
            <li>Скидки на платные образовательные программы.</li>
          </ul>
        </div>

        <div class="col-lg-6 mb-30">
          <div class="pd-30 brdw-2 bg-accent">
            <p class="h3 mb-20">Зарегистрироваться на вебинар</p>
            <form class="form-goriz mb-30">
              <input class="wdth-66" name="name" type="text" placeholder="E-mail" aria-label="Имя">
              <button type="submit" class="btn btn-contr">Записаться
              </button>
            </form>

            <ul class="list-inline mb-0">
              <li>
                <div class="icon-listed">
                  <img src="icons/calend.svg" alt="">
                  <p>c 14.01.2021</p>
                </div>
              </li>
              <li>
                <div class="icon-listed">
                  <img src="icons/time.svg" alt="">
                  <p>3 дня по 1 часу</p>
                </div>
              </li>
              <li>
                <div class="icon-listed">
                  <img src="icons/eye.svg" alt="">
                  <p>вебинар / <b>бесплатно</b> / доступ к записи</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<?php get_footer(); ?>