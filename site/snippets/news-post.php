<div class="post <?= $post->uid() ?>">
  <div class="post-meta">
    <div class="date">
      <?= $post->date('D, F j, Y') ?>
    </div>
  </div>
  <h3><?= $post->title() ?></h3>
  <div class="post-content">
    <?= $post->text()->kirbytext() ?>
  </div>
</div>
