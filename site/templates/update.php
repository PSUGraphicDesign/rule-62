<? snippet('header') ?>

<main>
  <section>
    <article>
      <div class="column two-thirds">
        <? snippet('news-post', ['post' => $page]) ?>
      </div>
      <div class="column third">
      <!-- Sidebar? -->
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
