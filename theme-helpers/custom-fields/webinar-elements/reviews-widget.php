<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Webinar Reviews Widget'))
  ->add_fields([
    Field::make('html', 'crb_information_webinar')
      ->set_html('<h2 style="color:blue; padding: 20px;">Отзывы</h2>')
    ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

<section class="mb-30">
    <div class="container-w">
      <h2 class="txt-c txt-l-9 mb-40">Что рассказывают о вебинаре его участники</h2>

      <div class="row">

        <div class="col-lg-4">
          <div class="pd-20 bg-gray cool_review">
            Проникнувшись умными мыслями, решил пообщаться со своим управляющим по поводу риск-профиля и как с ним
            соотносится ПИФ, который мне предложили. Ответа на то, как именно рассчитывалась волатильность набранных в
            него акций не получил. В общем, если рассчитываешь отдать кому-то в управление свои деньги и спать спокойно,
            сначала надо понять кому это управление стоит доверять, а кому нет.
          </div>
          <div class="facecrd-75 mt-20">
            <figure>
              <img src="/wp-content/uploads/2020/12/kalugin.jpg" class="brdr-circ" alt="" />
              <figcaption>
                <p class="h5">
                  Калугин Анатолий
                </p>
              </figcaption>
            </figure>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="pd-20 bg-gray cool_review">
            После не очень успешных покупок и продаж акций сша (попал под раздачу перед выборами) решил присмотреться к
            более безопасным активам, надеялся что курс поможет разобраться с этим. В итоге получил не совсем то, что
            ожидал. В хорошем смысле. Оказалось с акциями тоже можно дружить, но не только с ними. Спасибо Дмитрию за
            понимание того, как устроен рынок.
          </div>
          <div class="facecrd-75 mt-20">
            <figure>
              <img src="/wp-content/uploads/2020/12/vasilenko.jpg" class="brdr-circ" alt="" />
              <figcaption>
                <p class="h5">
                  Василенко Антон
                </p>
              </figcaption>
            </figure>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="pd-20 bg-gray cool_review">
            До этих финансовых откровений считал, что занимаюсь трейдингом. Теперь стало понятно, что играл в лотерею и
            ходил по самому краю :) Рекомендую всем трейдерам, кто еще не слышал про такие вещи, как волатильность,
            коэффициент Шарпа, бэктесты и т.д.. Кардинально поменял подход к трейдингу.
          </div>
          <div class="facecrd-75 mt-20">
            <figure>
              <img src="/wp-content/uploads/2020/12/berdyanskiy.jpg" class="brdr-circ" alt="" />
              <figcaption>
                <p class="h5">
                  Бердянский Семен
                </p>
              </figcaption>
            </figure>
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-lg-4">
          <div class="pd-20 bg-gray cool_review">
            Всё интересно и полезно, но не достаточно для того, чтобы сразу же начать применять в торговле. Больше
            введение в тему, которую однозначно стоит изучить. Для пассивных инвесторов может и норм, но тем, кто
            активно торгует придется вникать подробнее. </div>
          <div class="facecrd-75 mt-20">
            <figure>
              <img src="/wp-content/uploads/2020/12/miheev.jpg" class="brdr-circ" alt="" />
              <figcaption>
                <p class="h5">
                  Михеев Игорь
                </p>
              </figcaption>
            </figure>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="pd-20 bg-gray cool_review">
            Больше всего понравился слайд, на котором в какой-то год недвижимость оказалось лучшим выбором с точки
            зрения отношения доходности к риску.
            Я всегда в неё верила :) Но в целом вывод такой, что ничего не стоит на месте, сегодня работает одно, завтра
            другое, надо вовремя находить правильный баланс. Основные принципы и инструменты Дмитрий озвучивает. На
            уточняющие вопросы, как с ними работать отправляет на платный курс. Ну а как вы хотели :)
          </div>
          <div class="facecrd-75 mt-20">
            <figure>
              <img src="/wp-content/uploads/2020/12/zinina.jpg" class="brdr-circ" alt="" />
              <figcaption>
                <p class="h5">
                  Зинина Ангелина
                </p>
              </figcaption>
            </figure>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="pd-20 bg-gray cool_review">
            По окончанию курса остался привкус горечи - никаких тебе быстрых миллионов, ну или если очень хочется,
            рискни и будь готов потерять всё. Все эти истории про проигравшихся в пух и прах трейдеров приобрели
            определённость. Почему так происходит, и что делать, чтобы избежать их участи и не пенять потом на то, что
            приложение брокера зависло. Без экселя в общем не обойтись. </div>
          <div class="facecrd-75 mt-20">
            <figure>
              <img src="/wp-content/uploads/2020/12/hladin.jpg" class="brdr-circ" alt="" />
              <figcaption>
                <p class="h5">
                  Хладин Дмитрий
                </p>
              </figcaption>
            </figure>
          </div>
        </div>

      </div>

    </div>
  </section>
<!-- /.mb-30 -->

<?php
  });
?>