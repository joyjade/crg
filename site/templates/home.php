<?php snippet('nav') ?>

<?php 
	if ($all_readings = page('readings')->children()->listed()->flip()
		AND $currently_reading = $all_readings->first()): 
?>

<main class="dotted">
	<div class="home triptych">
		<h1>
			We meet on Sundays, <span class="underline">the only way we can.</span> 
				We're currently reading <span class="triptych-italick book-title" data-src="<?=$currently_reading ->image() -> url()?>">
					<?=$currently_reading-> title()-> link()?>,</span> 
					by <?=$currently_reading->author()?>.
		</h1>	
		<br/><br/>

		<h1>
			A few things we’ve read in the past is 
			<?php 
				$selected_readings = $all_readings-> not($currently_reading)-> shuffle()-> limit(3);
				$last = $selected_readings-> last();
				foreach($selected_readings as $reading): 
			?>
				<span class="triptych-italick book-title" 
					<?php if($reading_image = $reading-> image()): ?> 
						data-src="<?=$reading_image-> url()?>"
					<?php endif ?>>
					<?php if ($reading !== $last): ?>
						<?= $reading-> title() -> link()?>,</span>	
					<?php else: ?>
						<span class="triptych"> and </span> 
						<?= $reading-> title() -> link()?> </span>
	        		<?php endif ?>
			<?php endforeach ?>	
		</h1>

	</div>
</main>

<aside class="dotted">
	<div class="hidden-image">
		<img src="<?= $page->image()->url()?>">
	</div>		
</aside>

<?php endif ?>

<?php snippet('footer') ?>