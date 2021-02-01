<header class="mt-0">
  <section class="image_bg" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/img/2-6.jpg);">
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
                <div>
                  <?php get_template_part('theme-helpers/template-parts/forms/services', 'form'); ?>
                </div>
              </div>
              <?php get_template_part('theme-helpers/template-parts/forms/services', 'buttons'); ?>
            </div>
            <div class="col-lg-6">
              <p class="fs-l fw-5">Выберите месенджер или оставьте e-mail и мы пришлем вам доступ ко всем бесплатным сервисам и образовательным программам.
              </p>
              <p class="fs-l fw-5">
              </p>
            </div>
          </div>

          <?php if (1 > 2) { ?>
            <div class="row">
              <div class="col-md-8 pr-0 lim-md lim-smd">
                <script id="e52e8e989fd7cb49a5a6fdb2148f3071281799d4" src="https://edu.growcapital.ru/pl/lite/widget/script?id=327501&rand123"></script>
              </div>
              <div class="col-md-4 pl-0 lim-md lim-smd">
                <div class="wa-btn">
                  <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', carbon_get_theme_option('wa')); ?>" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/whatsapp.png" class="icon-50" alt=""> Получить в WhatsApp
                  </a>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </section>
</header>