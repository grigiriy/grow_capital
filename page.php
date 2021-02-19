<?php
get_header();

while (have_posts()) : the_post(); ?>

<section class="mb-50 mt-70-9">
  <div class="container-w">
    <div class="mb-30">
      <h1 class="fs-xl"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php endwhile;
get_footer(); ?>