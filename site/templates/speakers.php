<? snippet('header') ?>

<main>
  <section>
    <article class="header">
      <div class="column two-thirds">
        <h5><?= $page->title()->html() ?></h5>
      </div>
    </article>
    <article>
      <div class="column three-quarters main">
        <? foreach ( $speakers as $speaker ) { ?>
          <div class="speaker">
            <h2><?= $speaker->title()->html() ?></h2>
            <p><?= $speaker->bio()->kirbytext() ?></p>
            <p><?= $speaker->date('F jS') ?></p>
            <p><b><?= $speaker->categories() ?></b></p>
          </div>
        <? } ?>
      </div>
      <div class="column quarter sidebar">
        <? snippet('sidebar-speakers') ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
