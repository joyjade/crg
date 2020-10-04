<?php snippet('nav') ?>

<main class="<?= $page ?>">
	<ul>
		<?php foreach ($page->children()->listed()->flip() as $reading): ?>
			<li class="book-title"
			  <?php if($reading_image = $reading-> image()): ?> 
				data-src="<?=$reading_image-> url()?>"
			  <?php endif ?>>
		      <a href="<?= $reading->url() ?>" class="triptych uppercase">
		        <?= $reading-> title() ?><?php if($reading->subtitle()->isNotEmpty()): ?>: <?= $reading->subtitle() ?><?php endif ?>,
		      </a>
		      <span class="triptych-italick"><?= $reading-> author()?></span>
		      <!-- <?php if($pdf =  $reading-> documents() -> first()): ?>
						<a class="arrow dotted" href="<?= $pdf-> url()?>" target="_blank">
							<?php snippet('download_arrow') ?>
						</a>		
					<?php endif ?> -->
		    </li>
		<?php endforeach ?>	
	</ul>
</main>

<?php snippet('aside', ['class' => 'hidden']) ?>

<?php snippet('footer') ?>