<?php snippet('nav') ?>

<main class="<?= $page ?> triptych">
  <div class='upcoming-events'>
    <h3 class="header triptych uppercase">Upcoming</h3> 
    <ul class="upcoming calendar">
      <?php 
        	if ($all_readings = page('readings')->children()->listed()->flip()
          AND $currently_reading = $all_readings->first()): ?>
        <?php snippet('featured_reading', ['reading' => $currently_reading]);?>		
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
      <ul class="calendar">
        <?php 
          foreach ($all_readings as $reading):
          snippet('past_reading', ['reading' => $reading]);
          endforeach;
        ?>		   
      </ul>
  </div>	
    
</main>
  
</section>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>
