<? snippet('header') ?>

<main>
  <section>
    <article>
      <div class="column three-quarters tablet-two-thirds main">
        <? foreach ( $years as $year => $speakers ) { ?>
          <div class="year" id="year-<?= $year ?>">
            <h6><?= $year ?></h6>
          </div>
          <div class="speaker-list">
            <? foreach ( $speakers as $speaker ) { ?>
              <div class="speaker">
                <h1 class="name">
                  <?= $speaker->title()->html() ?>
                </h1>
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
