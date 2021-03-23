<?php snippet('nav') ?>
<main>
  <div class="<?= $page ?> triptych">
    <h3 class="header triptych uppercase"><?= $page-> title() ?></h3>
    <?php snippet('bookmark_gallery', ['bookmarks' => $page->children()->listed()]) ?>
    <div class="content">
      <!-- <h4 class="uppercase">About </h4></br> -->
      <?= $page-> about()->kirbytext() ?>
    </div>
  </div>
</main>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>