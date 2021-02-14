<div class="mb-40">
  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="mb-20">
  <h3><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h3>
  <p><?= get_the_excerpt(); ?></p>
  <a href="<?= get_the_permalink(); ?>" class="btn-pt mb-10">Подробнее
    <span class="icon-angle-right"> </span>
  </a>
</div>