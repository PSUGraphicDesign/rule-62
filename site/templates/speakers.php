<? snippet('header') ?>

<main>
  <section>
    <article class="header">
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </article>
    <article>
      <div class="column two-thirds main">
        <? foreach ( $speakers as $speaker ) { ?>
          <div class="speaker">
            <h4><?= $speaker->title()->html() ?></h4>
          </div>
        <? } ?>
      </div>
      <div class="column third sidebar">
        <? snippet('sidebar-speakers') ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
