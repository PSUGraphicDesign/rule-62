<div class="post <?= $post->uid() ?>">
  <div class="post-meta">
    <h3><?= html::a($post->url(), $post->title()) ?></h3>
    <div class="date">
      <?= $post->date('D, F j, Y') ?>
    </div>
  </div>
 
  <div class="post-content">
    <?= $post->text()->kirbytext() ?>
  </div>
</div>
