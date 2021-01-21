<?php snippet('nav') ?>

<main class="<?= $page ?> triptych">
  <div class='upcoming-events'>
    <h3 class="header triptych uppercase">Upcoming</h3> 
    <ul class="upcoming calendar">
      <?php $upcomingmtgs = $kirby->collection("events/upcoming") -> sortBy('day', 'asc'); if ($upcomingmtgs->count() > 0): ?>
        <?php 
          foreach ($upcomingmtgs as $event):
          snippet('featured_event', ['event' => $event]);
          endforeach;
        ?>		
    <?php else :?>
        <li class="none">
          <h2>
            We are likely meeting next Sunday. Hang tight for an update.
          </h2>
        </li>
      <?php endif ?>
    </ul>
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
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>
