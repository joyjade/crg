<?php snippet('nav') ?>

<main class="<?= $page ?>">
	<div class="triptych">
		<div class='upcoming-events'>
      <h3 class="header triptych uppercase">Upcoming</h3> 
			<?php $upcomingmtgs = $kirby->collection("events/upcoming") -> sortBy('day', 'asc'); if ($upcomingmtgs->count() > 0): ?>
				<?php snippet('featured_event', ['events' => $upcomingmtgs, 'classname' => 'upcoming'])?>		
        <?php endif ?>
    </div>
      
    <div class='past-events'>
      <h3 class="header triptych uppercase">Past</h3>
      <?php 	$pastmtgs = $kirby->collection("events/past") -> sortBy('day', 'desc') -> limit(10); if ($pastmtgs->count() > 0): ?>
        <?php snippet('event', ['events' => $pastmtgs])?>		
      <?php endif ?>
    </div>	
      
	</div>
</main>
  
</section>
<?php snippet('aside', ['class' => '']) ?>
<?php snippet('footer') ?>
