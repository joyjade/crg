<?php snippet('nav') ?>

<main class="<?= $page ?>">
	<div class="heading">
			<div class="book-title">
        <h3 class="triptych uppercase">
          <?= $page-> title() ?><?php if($page->subtitle()->isNotEmpty()): ?>: <?= $page->subtitle() ?><?php endif ?>,
          <span class="triptych-italick"><?= $page-> author()?></span>
        </h3>
      </div>
  </div>
  <div class="body">
    <?= $page-> text() -> markdown() ?>
  </div>

</main>
<?php 
  // $image = $page->image()->isNotEmpty() ? $page->image() : '';
  snippet('aside', ['class' => 'hidden', 'image' => '']); 
  snippet('footer');
?>