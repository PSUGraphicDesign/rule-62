<? snippet('header') ?>

<main>
  <section>
    <article class="header">
      <div class="column two-thirds">
        <h1><?= $page->title()->html() ?></h1>
      </div>
    </article>
    <article>
      <div class="column three-quarters main">
        <? foreach ( $speakers as $speaker ) { ?>
          <div class="speaker">
            <h2><?= $speaker->title()->html() ?></h2>
            <?= $speaker->bio()->kirbytext() ?>
            <?= $speaker->date('F jS') ?>
            <?= $speaker->categories() ?>
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
