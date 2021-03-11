<?php snippet('nav') ?>

<main class="<?= $page ?> triptych">
  <div class='upcoming-events'>
    <h3 class="header triptych uppercase">Upcoming</h3> 
    <ul class="upcoming calendar">
      <?php if ($upcoming_readings) :  
          foreach ($upcoming_readings as $upcoming):
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
    <ul class="calendar past-readings" data-page="<?= $pagination->nextPage() ?>">
      <?php 
        foreach ($past_readings as $past):
          snippet('past_reading', ['reading' => $past]);
        endforeach;
      ?>		   
    </ul>
    <button class="load-more" accesskey="m">
      <h6>Load more<span class="ellipses-loader">…</span></h6>
    </button>
  </div>	
    
</main>
  
</section>
<?php 
  snippet('aside', ['class' => 'hidden', 'image' => $page->image()]); 
  snippet('footer'); 
?>
