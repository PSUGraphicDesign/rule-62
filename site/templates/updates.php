<? snippet('header') ?>

<main>
  <section class="content">

    <article>
      <div class="column two-thirds main">
        <? foreach ( $updates as $update ) { ?>
          <? snippet('news-post', ['post' => $update]) ?>
        <? } ?>
      </div>
      <div class="column third sidebar">
        <? snippet('sidebar-home') ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
