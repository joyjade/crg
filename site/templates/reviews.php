<?php snippet('nav') ?>
<main class="<?= $page ?> triptych">
  <?php snippet('review_header', ['review' => $page]) ?>
  <div class="content">
    <?php foreach($page->children()->listed() as $article):?>
      <div>
        <h2>
          <a href="<?=$article->url()?>">
          <?= $article->title()?> by <?= $article->author()?>
          </a>
        </h2>
      </div>
    <?php endforeach ?>

  </div>
</main>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>