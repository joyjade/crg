<?php snippet('nav') ?>

<main class="<?= $page ?> triptych">
  <div class='upcoming-events'>
    <h3 class="header triptych uppercase">Upcoming</h3> 
    <?php $upcomingmtgs = $kirby->collection("events/upcoming") -> sortBy('day', 'asc'); if ($upcomingmtgs->count() > 0): ?>
      <ul class="upcoming calendar">
        <?php 
          foreach ($upcomingmtgs as $event):
          snippet('featured_event', ['event' => $event]);
          endforeach;
        ?>		
      </ul>
    <?php endif ?>
  </div>
    
  <div class='past-events'>
    <h3 class="header triptych uppercase">Past</h3>
    <?php 	$pastmtgs = $kirby->collection("events/past") -> sortBy('day', 'desc') -> limit(10); if ($pastmtgs->count() > 0): ?>
      <ul class="calendar">
        <?php 
          foreach ($pastmtgs as $event):
          snippet('event_line', ['event' => $event]);
          endforeach;
        ?>		   
      </ul>
    <?php endif ?>
  </div>	
    
</main>
  
</section>
<?php snippet('aside', ['class' => '']) ?>
<?php snippet('footer') ?>
