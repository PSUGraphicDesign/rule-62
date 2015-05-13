<? snippet('header') ?>

<main>
  <section class="content">
    <article>
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </article>
    <article>
      <div class="column three-quarters main">
        <? foreach ( $updates as $update ) { ?>
          <? snippet('news-post', ['post' => $update]) ?>
        <? } ?>
      </div>
      <div class="column quarter sidebar">
        <? snippet('sidebar-home') ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
