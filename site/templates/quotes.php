<? snippet('header') ?>

<main>
  <section>
    <article class="header">
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </article>
    <article>
      <div class="column three-quarters main">
        <? foreach ( $testimonials as $testimonial ) { ?>
          <div class="testimonial">
            <figure>
              <blockquote class="testimonial-content">
                <?= $testimonial->text()->kirbytext() ?>
              </blockquote>
              <figcaption>
                <? if ( $testimonial->relationship()->length() ) { ?>
                  <p class="with-relationship">
                    <?= $testimonial->title()->html() ?>, <?= $testimonial->relationship()->html() ?>
                  </p>
                <? } else { ?>
                  <p>
                    <?= $testimonial->title()->html() ?>
                  </p>
                <? } ?>
              </figcaption>
            </figure>
          </div>
        <? } ?>
      </div>
      <div class="column quarter sidebar">
        <? snippet('sidebar-testimonials') ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
