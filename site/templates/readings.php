<?php snippet('nav') ?>

<?php $readings = $page->children()->listed() ?>

<main class="<?= $page ?> triptych">
  <div class='upcoming-events'>
    <h3 class="header triptych uppercase">Current & Upcoming</h3> 
    <ul class="upcoming calendar">
      <?php 
        if ($upcomings = $readings -> filter(function($upcoming) {
          return $upcoming->date()->toDate() > time();
        })) :  
          foreach ($upcomings as $upcoming):
            snippet('featured_reading', ['reading' => $upcoming]);
          endforeach;		
        else :?>
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
          foreach ($readings as $reading):
          snippet('past_reading', ['reading' => $reading]);
          endforeach;
        ?>		   
      </ul>
  </div>	
    
</main>
  
</section>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>
