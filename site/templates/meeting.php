<?php snippet('nav') ?>

<main class="dotted meetings">
    <a href='<?=$page->parent()->url()?>'>Back to All Meetings and Events</a>
	<div class="triptych">
		<h1><?= $page->title()->html() ?></h1>
		<?= $page-> text() ?>
	</div>
</main>
  
</section>
<?php snippet('footer') ?>