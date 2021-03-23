<?php snippet('nav') ?>

<?php 
  $reading_list = page('readings'); 
  if ($readings = page('readings')->children()->listed()): 
?>

<main class="<?= $page ?> triptych">
  <div>
    <h1>    
      <?php if ($currently_reading = $reading_list->currentlyReading()): ?>  
        We're currently reading <?= snippet('book_title', ['rdg'=> $currently_reading])?>.
      <?php else: ?>
        We're about to read <?= snippet('book_title', ['rdg'=> $reading_list->children()->listed()->last()])?>.
      <?php endif ?>
        Usually, we meet at LACA. In the meantime, join us every <span class="underline">Sunday, 7-9PM PST.</span>
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
        <span class="triptych-italick book-title highlight" 
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
  $image = $page->image()->isNotEmpty() ? $page->image() : '';
  snippet('aside', ['class' => 'hidden', 'image' => $image]); 
?>

<?php snippet('footer') ?>