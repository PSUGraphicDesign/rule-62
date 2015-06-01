<? snippet('header') ?>

<main>
  <section>
    <article class="header">
      <div class="column two-thirds">
        <h5><?= $page->title()->html() ?></h5>
      </div>
    </article>
    <article>
      <div class="column three-quarters tablet-two-thirds main">
        <? foreach ( $years as $year => $speakers ) { ?>
          <div class="year" id="year-<?= $year ?>">
            <h2><?= $year ?></h2>
          </div>
          <div class="speaker-list">
            <? foreach ( $speakers as $speaker ) { ?>
              <div class="speaker">
                <h2 class="name">
                  <?= $speaker->title()->html() ?>
                </h2>
                <div class="bio">
                  <?= $speaker->bio()->kirbytext() ?>
                </div>
                <div class="date">
                  <?= $speaker->date('F jS') ?>
                </div>
                <div class="organizations">
                  <?= $speaker->categories() ?>
                </div>
              </div>
            <? } ?>
          </div>
        <? } ?>
      </div>
      <div class="column quarter tablet-third sidebar">
        <? snippet('sidebar-speakers', ['years' => $years]) ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
