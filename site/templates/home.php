<? snippet('header') ?>

<main>
  <section class="hero"></section>
  <section class="content">
    <article>
      <div class="column three-quarters main">
        <div class="news-intro">
          <div class="date">
            <?= $update->date('D, F j, Y') ?>
          </div>
          <h2>
            New Event!
          </h2>
        </div>
        <? snippet('news-post', ['post' => $update]) ?>
      </div>
      <div class="column quarter sidebar">
        <? snippet('sidebar-home') ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
