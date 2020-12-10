<?php snippet('nav') ?>

<main class="<?= $page ?>">
    <a href='<?=$page->parent()->url()?>'>Back to All Events</a>
	<div class="triptych">
		<h1><?= $page->title()->html() ?></h1>
		<?= $page-> text() ?>
	</div>
</main>
  
</section>
<?php snippet('footer') ?>