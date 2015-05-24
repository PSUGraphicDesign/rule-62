<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

  <?= css("assets/css/rule-62.css") ?>

</head>
<body class="<?= R62::body_classes() ?>">
  <header>
    <section>
      <article>
        <div class="column quarter">
          <a href="localhost/rule-62/"><img src= "<?= $site->url() ?>/assets/images/logo.png" height="210" width="200"></a>
          <!--<h1><?= $site->title()->htm() ?></h1>-->
        </div>
        <div class="column three-quarters">
          <? snippet('menu') ?>
        </div>
      </article>
    </section>
  </header>
