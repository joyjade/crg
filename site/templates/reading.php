<?php snippet('nav') ?>

<main class="reading">
	<div class="panel triptych">
		<div class="heading">
			<h2>
				<?= $page-> title() ?>
				<?php if($page-> subtitle()->isNotEmpty()): ?>
					</h2><h2><?= $page-> subtitle() ?>
				<?php endif ?>
			</h2>
			<h3 class="author triptych-italick"><?= $page-> author() ?></h3>
		</div>
		<div class="flex detail-body">
			<div class="w60">
				<h4> Notes </h4>
				<p><?= $page->text()?></p>
				<p><?= $page->links()?></p>
				
			</div>
			
			<div class="w40">
				<h4> Details </h4>
				<?php if( $published = $page-> published()->isNotEmpty() or $page->publisher()->isNotEmpty() ): ?>
					<p>
						Published: <?= $page-> published() ?>
						<?php if( $page->publisher()->isNotEmpty() ): ?>
							by <?= $page-> publisher() ?>
						<?php endif ?>
					</p> 
				<?php endif ?>
				<br />

				<p> Tags </p>
				<p><?= $page->tags()?></p>
			
			</div>
		</div>
		
			<!-- <?php if($pdf = $page-> documents() -> first()): ?>
				<a class="arrow dotted" href="<?= $pdf-> url()?>" target="_blank">
					<?php snippet('download_arrow') ?>
				</a>		
			<?php endif ?> -->
	</div>



	<?php if ($page->hasPrevListed()): ?>
		<div class="prev-button dotted">
			<a href="<?= $page->prevListed()->url() ?>">⟵</a>
		</div>
	<?php endif ?>

	<?php if ($page->hasNextListed()): ?>
		<div class="next-button dotted">
			<a href="<?= $page->nextListed()->url() ?>">⟶</a>
		</div>
	<?php endif ?>
</main>

<?php snippet('aside', ['class' => '']) ?>

<?php snippet('footer') ?>