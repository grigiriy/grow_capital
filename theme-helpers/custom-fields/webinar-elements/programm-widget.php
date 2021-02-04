<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Webinar Programm Widget'))
  ->add_fields([
    Field::make('html', 'crb_information_webinar')
      ->set_html('<h2 style="color:blue; padding: 20px;">Программа</h2>')
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {

    global $icons;
?>
  <section class="mb-50">
    <div class="container-w">
      <div class="lim-12">
        <div class="brdl pd-30 brdw-2 brdr-c brdc brdl-0-9 pd-0-9 pd-0-sm">
          <h2 class="mb-30">Программа</h2>
          <p></p>
          <div class="mb-40">
            <p class="h3 mb-20">День 1. Введение в систематическое инвестирование и доходность финансовых инструментов</p>
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
                <p class="question">Систематический подход к инвестированию</p>
                <div class="answer">
                  <ul>
                    <li>Предпосылки успеха на финансовых рынках</li>
                    <li>Ключевые вопросы инвестора/трейдера</li>
                    <li>Какой должна быть торговая система?</li>
                  </ul>
                </div>
              </div>
              <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
                <p class="question">Способы измерения доходности финансовых инструментов</p>
                <div class="answer">
                  <ul>
                    <li>Доходность за 1 и несколько периодов</li>
                    <li>Средняя доходность</li>
                    <li>Среднегодовая доходность</li>
                    <li>Доходность, взвешенная по деньгам и по времени</li>
                    <li>Номинальная и реальная доходность</li>
                    <li>Текущая и полная доходность</li>
                  </ul>
                </div>
              </div>
              <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
                <p class="question">Почему и сколько можно ли заработать на финансовых рынках?</p>
                <div class="answer">
                  <ul>
                    <li>Что значит "обыграть рынок"?</li>
                    <li>Доходность различных классов активов</li>
                    <li>Доходность и горизонт инвестирования</li>
                    <li>Гипотеза эффективного рынка</li>
                    <li>Факторы доходности акций</li>
                    <li>Доходность и экономические циклы</li>
                    <li>Рыночные аномалии</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-40">
            <p class="h3 mb-20">День 2. Риски инвестиционных стратегий и диверсификация</p>
            <div class="faq">
              <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
                <p class="question">Риски финансовых инструментов</p>
                <div class="answer" style="display: none;">
                  <ul>
                    <li>Виды рисков финансовых инструментов</li>
                    <li>Показатели для оценки инвестиционных рисков</li>
                    <li>Волатильность и стандартное отклонение доходности</li>
                    <li>Просадки: почему это важно и как их измерить?</li>
                    <li>Индекс язвы</li>
                  </ul>
                </div>
              </div>
              <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
                <p class="question">Диверсификация</p>
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
                <p class="question">Маржинальная торговля</p>
                <div class="answer" style="display: none;">
                  <ul>
                    <li>Мифы маржинальной торговли</li>
                    <li>Способы использования заемного финансирования</li>
                    <li>Плюсы и минусы использования "плеча"</li>
                  </ul>
                </div>
              </div>
              <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
                <p class="question">Затраты, связанные с инвестициями</p>
                <div class="answer">
                  <ul>
                    <li>Какие бывают затраты?</li>
                    <li>Почему важно учитывать затраты?</li>
                  </ul>
                </div>
              </div>
              <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
                <p class="question">Налогообложение инвестиций</p>
                <div class="answer">
                  <ul>
                    <li>Основные налоговые льготы для резидентов РФ</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-40">
            <p class="h3 mb-20">День 3. Эффективность инвестиционных стратегий</p>
            <div class="faq">
              <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
                <p class="question">Доходность с учетом риска</p>
                <div class="answer" style="display: none;">
                  <ul>
                    <li>Коэффициент Шарпа</li>
                    <li>Доходность с учетом риска различных финансовых активов</li>
                    <li>Реалистичные оценки будущей доходности с учетом риска</li>
                  </ul>
                </div>
              </div>
              <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
                <p class="question">Оценка эффективности инвестиционных стратегий</p>
                <div class="answer" style="display: none;">
                  <ul>
                    <li>Сколько нужно данных для оценки эффективности инвестиционных стратегий?</li>
                    <li>Основные параметры для оценки эффективности</li>
                  </ul>
                </div>
              </div>
              <div class="faq-item toggle_triangle" onclick="toggle_answer(this)">
                <p class="question">Прогнозирование риска и доходности:</p>
                <div class="answer">
                  <ul>
                    <li>Какой прогноз самый главный: доходность, риск или корреляция?</li>
                    <li>Модель ценообразования капитальных активов (CAPM)</li>
                    <li>Мультифакторные модели</li>
                    <li>Прогнозирование цен акций на основе индикатора CAPE</li>
                    <li>Прогнозы инвестиционных компаний</li>
                    <li>Как не надо прогнозировать</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-50 pd-30 bg-accent">
            <p class="h2 mb-20">Зарегистрироваться на онлайн-программу и получить запись</p>
            <ul class="list-inline fs-l mb-0">
              <li>
                <div class="icon-listed-l">
                  <?= $icons->calend; ?>
                  <p>c 14.01.2021</p>
                </div>
              </li>
              <li>
                <div class="icon-listed-l">
                  <?= $icons->time; ?>
                  <p>3 дня по 1 часу</p>
                </div>
              </li>
              <li>
                <div class="icon-listed-l">
                  <?= $icons->eye; ?>
                  <p>Вебинар / <b>бесплатно</b></p>
                </div>
              </li>
            </ul>
            <p class="fw-5 fs-l fs-n-sm">Получите ссылку на вебинар и полезные материалы через удобный вам мессенджер
              или на почту.</p>

            <div class="row mb-30">
              <div class="col-sm-4 txt-c">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/telegram.png" class="mb-20 icon-75" alt="">
                <p class="fs-s fw-6">Записаться через Телеграмм</p>
              </div>
              <div class="col-sm-4 txt-c">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/whatsapp.png" class="mb-20 icon-75" alt="">
                <p class="fs-s fw-6">Записаться через WhatsApp</p>
              </div>
              <div class="col-sm-4 txt-c">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/vk.png" class="mb-20 icon-75" alt="">
                <p class="fs-s fw-6">Записаться через ВК</p>
              </div>
            </div>

            <form class="form-goriz mb-30" id="ltForm9184268" action="https://edu.growcapital.ru/pl/lite/block-public/process-html?id=969696534" method="post" data-open-new-window="0">
              <input type="hidden" name="formParams[setted_offer_id]">
              <input type="text" class="wdth-66" placeholder="Введите ваш эл. адрес" name="formParams[email]" value="">
              <button type="submit" id="button1168115" class="btn btn-contr" onclick="if(window['btnprs600ef20b0e3d2']){return false;}window['btnprs600ef20b0e3d2']=true;setTimeout(function(){window['btnprs600ef20b0e3d2']=false},6000);return true;">
                Записаться</button>

              <input type="hidden" id="329167600ef20aeef92" name="__gc__internal__form__helper" class="__gc__internal__form__helper" value="">
              <input type="hidden" id="329167600ef20aeef92ref" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref" value="">
              <input type="hidden" name="requestTime" value="1611592203">
              <input type="hidden" name="requestSimpleSign" value="0a64beb725ee07790190b8a66ea25c36">
              <input type="hidden" name="isHtmlWidget" value="1" />
            </form>
            <span id="gccounterImgContainer"></span>
            <script>
              window.addEventListener('load', function() {
                let loc = document.getElementById("329167600ef20aeef92");
                loc.value = window.location.href;
                let ref = document.getElementById("329167600ef20aeef92ref");
                ref.value = document.referrer;

                let statUrl = "https://edu.growcapital.ru/stat/counter?ref=" + encodeURIComponent(document.referrer) +
                  "&loc=" + encodeURIComponent(document.location.href);
                document.getElementById('gccounterImgContainer').innerHTML = "<img width=1 height=1 style='display:none' id='gccounterImg' src='" + statUrl + "'/>";
              });
            </script>


          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- /.mb-50 -->

<?php
  });
?>