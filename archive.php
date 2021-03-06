<?php get_header();

$cat = get_term(get_queried_object_id(),'category');

$loop_term_id = get_queried_object_id() !== 0 ? $cat->term_id : 'any';
?>
<section class="header mb-60">
  <div class="container-w">
    <div class="row mb-20 pt-40">
      <div class="col-xl-offset-3 col-xl-9 fs-xs fw-3">
        <?php if (get_queried_object_id() !== 0 && 1 > 2) { ?>
          <a href="/category/znaniya-i-analitika/<?= $cat->slug;?>"><?= $cat->name; ?></a>
        <?php } else { ?>
          <a href="/">Главная</a>
        <?php } ?>
      </div>
    </div>
    <div class="row mb-30">

      <div class="col-lg-3 hider-9">
        <div class="mb-30 pr-60">
          <div class="fw-6 mb-f-07">Методические пособия</div>
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
          <ul class="fs-s mb-30 list-sidebar">
            <?php
            $blog_posts = get_posts(array(
              'post_type'   => 'blog',
            ));
            if($blog_posts) {
            echo '<div class="fw-6 mb-f-07">Блог</div>';
            foreach ($blog_posts as $blog_post) { ?>
              <li>
                <a href="/blog/<?= $blog_post->post_name; ?>">
                  <?= $blog_post->post_title; ?>
                </a>
              </li>

            <?php }
            } ?>
          </ul>
        </div>
      </div>

      <div class="col-lg-9">
        <div class="row">
          <div class="col-lg-8 pb-20-9">
            <div class="mb-60">
              <h2>Методические пособия</h2>
              <?php $args = [
                'orderby' => 'post_date',
                'post_type' => 'post',
                'numberposts' => 10,
              ];
              foreach (get_posts($args) as $post){
                get_template_part('theme-helpers/template-parts/blog_post','preview');
              } ?>
            </div>

            <div class="mb-60">
              <?php $args = [
                'orderby' => 'post_date',
                'post_type' => 'blog',
                'numberposts' => 10,
              ];
              if(get_posts($args)){
                echo '<h2>Блог</h2>';
                foreach (get_posts($args) as $post){
                  get_template_part('theme-helpers/template-parts/blog_post','preview');
                }
              } ?>

            </div>
          </div>

          <div class="col-lg-4 pb-30-9">
            <div class="brdc pd-30-9 bg-dark-9 fc-light-9 sidebar-download-widget">
              <div class="brdl-shot"></div>
              <div class="facecrd-55">
                <figure class="mb-0">
                  <img src="<?= get_template_directory_uri(); ?>/assets/img/chart-2.png" alt="">
                  <figcaption class="pl-10">
                    <p class="h5">
                      <a href="https://edu.growcapital.ru/files" target="_blank" class="fc-link fc-light-9">excel-шаблон</a>
                    </p>
                    <p class="mb-10 fw-5">Расчет доходности</p>
                  </figcaption>
                </figure>
              </div>
              <p class="fs-s">В дополнение к статье мы подготовили специальный excel-файл для расчета доходности
                инвестиций с учетом различных факторов.</p>
              <a href="https://edu.growcapital.ru/files" target="_blank" class="btn-small-pt">Скачать
                <span class="icon-angle-right"> </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>