<div class="post <?= $post->uid() ?>">
  <h3><?= $post->title() ?></h3>
  <div class="post-content">
    <?= $post->text()->kirbytext() ?>
  </div>
</div>
