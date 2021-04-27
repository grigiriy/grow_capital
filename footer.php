</div>
<footer class="pt-50 pb-60 bg-dark fc-light">
    <div class="container-w">
      <div class="row">
        <div class="col-md-7 mt-20">
          <p class="h4 mb-20">Основные разделы на сайте</p>
          <ul class="list-inline list-decor list-angle-right mb-20 fc-light">
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
          </ul>
        </div>
        <div class="col-md-5 mt-20">
          <p class="h4">Контакты</p>
          <div class="icon-listed">
            <!--?xml version="1.0" ?--><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.phn-1,.phn-3{fill:none;stroke:currentcolor;stroke-linecap:round;stroke-linejoin:round;}.phn-1{stroke-width:2px;}.phn-2{fill:currentcolor;}</style></defs><title></title><path class="phn-1" d="M20.87,18.59l-1.74,1.74a2,2,0,0,1-2.47.3,14.87,14.87,0,0,1-5.29-5.27,2,2,0,0,1,.32-2.45l1.75-1.75a2.13,2.13,0,0,0,0-3L10.9,5.6a1.55,1.55,0,0,0-2.19,0L6.87,7.44a5.86,5.86,0,0,0-1.2,6.66,25.69,25.69,0,0,0,12,12.1,6,6,0,0,0,6.9-1.08l1.8-1.8a1.55,1.55,0,0,0,0-2.19l-2.55-2.55A2.13,2.13,0,0,0,20.87,18.59Z"></path><path class="phn-1" d="M12.66,11.94a2.13,2.13,0,0,0,0-3L10.12,6.38a1.55,1.55,0,0,0-2.19,0"></path><circle class="phn-2" cx="18.62" cy="13.01" r="1.5"></circle><path class="phn-3" d="M18.62,8.59A4.41,4.41,0,0,1,23,13"></path><path class="phn-3" d="M18.62,4.92A8.09,8.09,0,0,1,26.7,13"></path><line class="phn-3" x1="20.87" x2="25.73" y1="18.59" y2="23.44"></line></svg>
            <p itemprop="telephone">
              <a class="fd-n fc-base" href="tel:<?= preg_replace('/[^0-9]/', '', str_replace('+7', '8',carbon_get_theme_option('phone'))); ?>"><?= carbon_get_theme_option('phone'); ?></a>
            </p>
          </div>
          <div class="icon-listed">
            <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.email-1,.email-2{fill:none;stroke:currentcolor;stroke-linecap:round;stroke-linejoin:round;}.email-1{stroke-width:2px;}.email-3{fill:currentcolor;}</style></defs><title></title><rect class="email-1" height="16" width="22" x="5" y="8"></rect><polyline class="email-2" points="5 8 15.5 17.33 26 8"></polyline><rect class="email-3" height="16" width="2" x="25" y="8"></rect></svg>
            <p itemprop="email"><a href="mailto:<?= carbon_get_theme_option('email'); ?>" class="fd-n fc-base"><?= carbon_get_theme_option('email'); ?></a></p>
          </div>   
          <?php if (1 > 2){ ?>       
            <p class="pt-20 mb-0" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
              <span itemprop="addressLocality">Москва</span>,
              <span itemprop="streetAddress"><?= carbon_get_theme_option('address'); ?></span>
              <br>
              <a class="fc-light" href="/privacy-policy/">Политика конфиденциальности</a>
              <br>
              <a class="fc-light" href="/oferta/">Публичная оферта</a>
            </p>
            <?php } ?>
        </div>
      </div>
    </div>
    <div>
      <div class="container-w">
        <div class="row">
          <div class="col-12">
            <p class="fs-s fc-07">
              <span class="icon-copyright"></span><span itemprop="foundingDate"><?= date("Y"); ?></span> -
              <span itemprop="name"><?= get_bloginfo(); ?></span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <?php get_template_part('theme-helpers/template-parts/sticky_btns'); ?>

    <!-- <div class="remodal" data-remodal-id="modal">
      <button data-remodal-action="close" class="remodal-close"></button>
      <h4>Обратный звонок</h4>
      <form class="contactForm" novalidate id="modal_form" onsubmit="ym(55367455, 'reachGoal', 'modal'); return true;"
        onsubmit="ym(55367455, 'reachGoal', 'modal'); return true;">
        <div class="contact-form">
          <div class="form-group" hidden>
            <input type="text" class="form-control first-name" placeholder="Ваша фамилия" name="first-name" />
            <p class="form-alert"></p>
          </div>
          <div class="form-group">
            <input type="text" class="form-control name" placeholder="Как вас зовут?" name="name"
              data-validation-required-message="Поле не заполнено!" required />
            <span class="form-alert help-block"></span>
          </div>
          <div class="form-group">
            <input type="tel" class="form-control form-phone" placeholder="Ваш телефон" name="phone"
              data-validation-required-message="Поле не заполнено!" required />
            <span class="form-alert help-block"></span>
          </div>
          <div class="form-group">
            <textarea class="form-textarea form-control message" placeholder="Опишите кратко текущую ситуацию"
              name="message" aria-invalid="false"></textarea>
          </div>
          <div class="successMessage"></div>
          <div class="preloader" hidden>
            <img src="js/preloader.png" alt="" />
          </div>
          <button class="btn" type="submit">Отправить</button>
        </div>
      </form>
    </div> -->

    <?php
    // get_template_part( 'theme-helpers/template-parts/auth','modal' );
    ?>

  </footer>
<?php wp_footer() ?>
</body>
</html>
