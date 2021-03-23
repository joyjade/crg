<?php snippet('nav') ?>
<main>
  <div class="bookmark triptych">
    <h3 class="header triptych uppercase">
      <a href="<?=$page->parent()->url()?>">
        <?= $page->parent()-> title() ?>
      </a>
    </h3>
    <?php snippet('bookmark_gallery', ['bookmarks' => $page->siblings()->listed()]) ?>
    <div class="content">
      <h4 class="uppercase">$6 Donation</h4></br>
      <?= $page-> details()->kirbytext() ?>
      <h4 class="uppercase">About the Artist</h4></br>
      <?= $page-> bio()->kirbytext() ?>
    </div>
  </div>
</main>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>