<? snippet('header') ?>

<main>
  <section class="hero"></section>
  <section class="content">
    <article>
      <div class="column two-thirds main">
        <?= $page->text()->kirbytext() ?>
        <div data-center-lat="<?= $page->location()->json('lat') ?>" data-center-lng="<?= $page->location()->json('lng') ?>" data-zoom="<?= c::get('place.defaults.zoom') ?>" id="map-canvas" class="map-canvas" style="height: 10rem"></div>
        <?= $page->directions()->kirbytext() ?>
      </div>
      <div class="column third sidebar">
        <p> Contact Us. </p>
        <? snippet('sidebar-about') ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
