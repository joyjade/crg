<?php snippet('nav') ?>

<main class="reading dotted">
	<div class="info triptych">
			<p><?= $page-> title() ?></p>
			<p>Author: <?= $page-> author() ?></p>
			<?php if($published = $page-> published()->isNotEmpty()): ?>
				<p>Published: <?= $page-> published() ?></p>
			<?php endif ?>
			<?php if($page->publisher()->isNotEmpty()): ?>
				<p>by <?= $page-> publisher() ?></p>
			<?php endif ?>

			<!-- <?php if($pdf = $page-> documents() -> first()): ?>
				<a class="arrow dotted" href="<?= $pdf-> url()?>" target="_blank">
					<?php snippet('download_arrow') ?>
				</a>		
			<?php endif ?> -->
	</div>



	<?php if ($page->hasPrevListed()): ?>
		<div class="prev-button dotted">
			<a href="<?= $page->prevListed()->url() ?>">previous book</a>
		</div>
	<?php endif ?>

	<?php if ($page->hasNextListed()): ?>
		<div class="next-button dotted">
			<a href="<?= $page->nextListed()->url() ?>">next book</a>
		</div>
	<?php endif ?>
</main>

<?php snippet('footer') ?>