<?php snippet('nav') ?>

<?php 
	if ($readings = page('readings')->children()->listed()): 
?>

<main>
  <div class="<?= $page ?> triptych">
    <h1>    
      <?php if ($currently_reading = $readings->findBy('current', 'true')): ?>  
        We're currently reading 
        <span class="triptych-italick book-title" 
              data-src="<?=$currently_reading ->cover() ? $currently_reading ->cover() -> url() : ''?>">
              <?=$currently_reading-> title()-> link()?>,</span> by <?=$currently_reading->author()?>.
      <?php else: ?>
        We're about to read
        <span class="triptych-italick book-title" 
              data-src="<?=$readings->last()->cover() ? $readings->last()->cover() -> url() : ''?>">
              <?=$readings->last()-> title()-> link()?>,</span> by <?=$readings->last()->author()?>. 
      <?php endif ?>
        Usually, we meet at LACA. In the meantime, join us <span class="underline">online every Sunday,</span> 
          7-9PM PST.
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
<?php endif ?>

<?php 
  $image = $page->image()->isNotEmpty() ? $page->image() : '';
  snippet('aside', ['class' => 'hidden', 'image' => $image]); 
?>

<?php snippet('footer') ?>