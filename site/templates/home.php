<? snippet('header') ?>

<main>
  <section class="hero"></section>
  <section class="content">
    <article>
      <div class="column three-quarters main">
        <? snippet('news-post', ['post' => $update]) ?>
      </div>
      <div class="column quarter sidebar">
        <? snippet('sidebar-home') ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
