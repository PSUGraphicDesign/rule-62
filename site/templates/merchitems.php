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
        <? foreach ( $merchandise as $item ) { ?>
          <div class="item">
            <? if ( $item->product_image() ) { ?>
              <img src="<?= $item->images()->first()->url() ?>" />
            <? } ?>
            <h3><?= $item->title()->html() ?> — $<?= $item->price()->int() ?></h3>
          </div>
        <? } ?>
      </div>
      <div class="column quarter sidebar">
        <? snippet('sidebar-merch') ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
