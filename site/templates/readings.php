<?php snippet('nav') ?>

<main class="<?= $page ?> dotted">
	<ul>
		<?php foreach ($page->children()->listed()->flip() as $reading): ?>
		    <li>
		      <a href="<?= $reading->url() ?>" class="triptych uppercase">
		        <?= $reading-> title() ?>,
		      </a>
		      <span class="triptych-italick"><?= $reading-> author()?></span>
		      <?php if($pdf =  $reading-> documents() -> first()): ?>
						<a class="arrow dotted" href="<?= $pdf-> url()?>" target="_blank">
							<?php snippet('download_arrow') ?>
						</a>		
					<?php endif ?>
		    </li>
		<?php endforeach ?>	
	</ul>
</main>


<?php snippet('footer') ?>