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
        <? foreach ( $speakers as $speaker ) { ?>
          <div class="speaker">
            <h3><?= $speaker->years_in_program()->html() ?> Years</h3>
            <h4><?= $speaker->title()->html() ?></h4>
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
