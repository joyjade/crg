<?php snippet('nav') ?>
<?php $reading = $page-> reading() -> toPage();?>

<main class="annotation triptych">
	<div class="heading">
			<div class="book-title" data-src="<?=$reading ->image() ? $reading ->image()-> url() : '#'?>">
        <span class="uppercase">
          <?= $reading-> fullTitle() ?>,
        </span> 
        <span class="triptych-italick"><?= $reading-> author()?></span>
      </div>
      <div class="back-button dotted">
        <h6><a href="<?= $page->parent()->url() ?>">⟵ Back </a></h6>
      </div>
  </div>
  <div class="details">
    <?= $page-> text() -> markdown() ?>
  </div>


  <?php if ($page->hasPrevListed()): ?>
		<div class="prev-button dotted triptych uppercase">
			<h6><a href="<?= $page->prevListed()->url() ?>">⟵ <?=$page->prevListed()->title() ?></a></h6>
		</div>
	<?php endif ?>

	<?php if ($page->hasNextListed()): ?>
		<div class="next-button dotted triptych uppercase">
			<h6><a href="<?= $page->nextListed()->url() ?>"><?=$page->nextListed()->title() ?> ⟶</a></h6>
		</div>
	<?php endif ?>

</main>
<?php 
  $image = $reading->image() ? $reading->image() : '';
  snippet('aside', ['class' => '', 'image' => $image]); 
  snippet('footer');
?>