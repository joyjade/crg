<?php $date = $page->day(); 
      $reading = $page -> reading() -> first() -> toPage(); $slug = $reading -> slug();
      $related_events = page('events') -> children()->filterBy("reading", '- readings/' . $slug)->sortBy("day");
      ?>

<?php snippet('nav') ?>

<main class="event triptych">
  <div>
    <div class="header">
      <div class="w70">
        <h3>
          <?= $date ->toDate('l, F d, Y') ?>  |
          <?= $page->starttime()?>-<?= $page->endtime()?>
        </h3>
        <h2>
          <a href="<?=$reading->url()?>"><?= $reading->title()?></a><?php if($reading-> subtitle()->isNotEmpty()): ?>: 
            <?= $reading-> subtitle() ?><?php endif ?>
        </h2>
      </div>
    </div>
    <div class="content">
      <div class="w70 thinpads">
        <h4><span class="grotesque">Selection</span> ⟶ <?= $page-> assignment() ?></h4>
        </br>
        <?php snippet('event_details') ?>
      </div>
      <div class="w30 thinpads">
        <ul class="related"> 
          <li> 
            <a href="<?= $reading -> url()?>">
            <h4>
              <span class="grotesque">Reading</span> ⟶
              <span class="book-title"> <?= $reading -> title()?></span>
            </h4>
            </a>
          </li>
          <?php snippet('related', ['related_events' => $related_events]) ?>
        </ul>
      </div>
    </div>
  </div>
</main>
  
</section>

<?php 
  $image = $page->image()->isNotEmpty() ? $reading->image() : '';
  snippet('aside', ['class' => 'hidden', 'image' => $image]); 
  snippet('footer');
?>