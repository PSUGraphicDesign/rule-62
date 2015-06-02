<div class="post <?= $post->uid() ?>">
  <h3><?= html::a($post->url(), $post->title()) ?></h3>
  
  <div class="post-meta">
    <div class="date">
      <?= $post->date('D, F j, Y') ?>
    </div>
  </div>
 
  <div class="post-content">
    <?= $post->text()->kirbytext() ?>
  </div>
</div>
