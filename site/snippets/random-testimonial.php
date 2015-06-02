<div class="testimonial">
  <? $testimonial = R62::random_testimonial(); ?>
  <figure>
    <?= $testimonial->text()->kirbytext() ?>
    <figcaption>
      <?= $testimonial->title()->html() ?>
    </figcaption>
  </figure>
</div>
