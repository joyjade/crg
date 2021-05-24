<?php snippet('nav') ?>

<?php 
  $reading_list = page('readings'); 
  if ($readings = page('readings')->children()->listed()): 
?>

<main class="<?= $page ?> triptych">
  <div>
    <h1>    
      <?php if ($currently_readings = $reading_list->currentlyReading()): ?>  
        We’re currently reading 
        <?php foreach($currently_readings as $currently_reading): ?>
          <?php if($currently_readings->count() > 1 && $currently_reading == $currently_readings->last()): ?>
            and <?= snippet('book_title', ['rdg'=> $currently_reading])?>. 
          <?php elseif($currently_readings->count() > 1 && $currently_reading != $currently_readings->last()): ?>
            <?= snippet('book_title', ['rdg'=> $currently_reading])?>
          <?php else: ?>
            <?= snippet('book_title', ['rdg'=> $currently_reading])?>.
          <?php endif ?>
        <?php endforeach ?>
      <?php else: ?>
        We’re about to read <?= snippet('book_title', ['rdg'=> $reading_list->children()->listed()->last()])?>.
      <?php endif ?>
        Usually, we meet at LACA. 
        In the meantime, 
        <span  class="tooltip">
          join us
          <span class="tooltip-text">
            Email communityreadinggroup@gmail.com to receive instructions for our upcoming meeting
          </span>
        </span> 
        every <span class="underline">Sunday, 7-9PM PST.</span>
    </h1>
    <br/><br/>

    <h1>
      A few things we’ve read in the past are 
      <?php 
        $selected_readings = $readings-> not($currently_readings)-> shuffle()-> limit(3);
        $last = $selected_readings-> last();
        foreach($selected_readings as $reading): 
      ?>
        <?php if ($reading == $last): ?>
          <span class="triptych"> and </span> 
        <?php endif ?>
        <span class="triptych-italick book-title highlight" 
          data-src="<?= $reading-> cover() ? $reading-> cover()-> url() : '' ?>">

          <?php if ($reading !== $last): ?>
            <?= $reading-> title() -> link()?>,</span>	
          <?php else: ?>
            <?= $reading-> title() -> link()?>.</span>
          <?php endif ?>
      <?php endforeach ?>	
    </h1>
  </div>
  <div class="notice">
    <div>
      <h3>Support CRG Programming with a <a href="<?= $site->find('bookmarks')->url()?>" class="triptych-italick highlight">Community Bookmark.</a></h3>
    </div>
    <div>
      <h3>Or <a href="<?= page('info')->donate()->url()?>" target="_blank">donate now!</a></div></h3>
  </div>
</main>
<?php endif ?>

<?php 
  snippet('aside', ['class' => 'hidden', 'image' => $page->image()]); 
?>

<?php snippet('footer') ?>