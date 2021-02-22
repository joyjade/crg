<?php snippet('nav') ?>

<?php 
	if ($readings = page('readings')->children()->listed()
    AND $currently_reading = $readings->findBy('current', 'true')
    ): 
?>

<main>
	<div class="<?= $page ?> triptych">
		<h1>    
      We're currently reading 
      <span class="triptych-italick book-title" 
            data-src="<?=$currently_reading ->cover() ? $currently_reading ->cover() -> url() : ''?>">
            <?=$currently_reading-> title()-> link()?>,</span> by <?=$currently_reading->author()?>. 
      Usually, we meet at LACA. In the meantime, join us online <span class="underline">this upcoming Sunday.</span> 
      <?php endif ?>

		</h1>	
		<br/><br/>

		<h1>
			A few things we’ve read in the past is 
			<?php 
				$selected_readings = $readings-> not($currently_reading)-> shuffle()-> limit(3);
				$last = $selected_readings-> last();
				foreach($selected_readings as $reading): 
      ?>
        <?php if ($reading == $last): ?>
          <span class="triptych"> and </span> 
        <?php endif ?>
        <span class="triptych-italick book-title" 
          <?php if($reading_image = $reading-> image()): ?> 
            data-src="<?=$reading_image-> url()?>"
          <?php endif ?>>

          <?php if ($reading !== $last): ?>
					  <?= $reading-> title() -> link()?>,</span>	
					<?php else: ?>
            <?= $reading-> title() -> link()?>.</span>
          <?php endif ?>
			<?php endforeach ?>	
    </h1>
    <br/><br/>

	</div>
</main>


<?php 
  $image = $page->image()->isNotEmpty() ? $page->image() : '';
  snippet('aside', ['class' => 'hidden', 'image' => $image]); 
?>

<?php snippet('footer') ?>