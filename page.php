<?php
get_header();

while (have_posts()) : the_post(); ?>

<section class="mb-50">
  <div class="container-w">
    <div class="row mb-30 pt-60 mt-30">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php endwhile;
get_footer(); ?>