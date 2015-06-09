<? snippet('header') ?>

<main>
  <section>
    <article class="header">
      <div class="column full">
        <h3><?= $page->title()->html() ?></h3>
      </div>
    </article>
    <article>
      <div class="column three-quarters main">
        <div class="column-group">
          <? foreach ( $merchandise as $item ) { ?>
            <div class="column half">
              <div class="item">
                <? if ( $item->product_image() ) { ?>
                  <img src="<?= $item->images()->first()->url() ?>" />
                <? } ?>
                <h3><?= $item->title()->html() ?> — $<?= $item->price()->int() ?></h3>
              </div>
            </div>
          <? } ?>
        </div>
      </div>
      <div class="column quarter sidebar">
        <? snippet('sidebar-merch') ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
