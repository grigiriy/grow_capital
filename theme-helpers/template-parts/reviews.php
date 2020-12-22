<?php
$args = [
  'post_type'=>'reviews',
  'numberposts' => -1
];
$reviews = get_posts($args);

foreach ($reviews as $review) { ?>

<div class="col-lg-4">
  <div class="pd-20 bg-gray cool_review"><?= carbon_get_post_meta($review->ID,'content'); ?></div>
  <div class="facecrd-75 mt-20">
    <figure>
      <img src="<?= wp_get_attachment_image_url(carbon_get_post_meta($review->ID,'avatar')); ?>" class="brdr-circ" alt="" />
      <figcaption>
        <p class="h5">
          <?= get_the_title($review->ID); ?>
        </p>
      </figcaption>
    </figure>
  </div>
</div>

<?php }
wp_reset_postdata(); ?>