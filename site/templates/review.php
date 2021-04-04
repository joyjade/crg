<?php snippet('nav') ?>
<main class="<?= $page ?> triptych">
  <h3 class="header triptych">Stay tuned...</h3> 
  <div> 
      <h4 class="uppercase">About</h4></br>
      <?= $page -> mission() -> markdown() ?>
      <p class="right">- <?= $page -> editor()?></p>
  </div>
</main>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>