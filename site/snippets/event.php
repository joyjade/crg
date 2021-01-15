<?php $date = $page->day(); ?>

<?php snippet('nav') ?>

<main class="event triptych">
  <div>
    <div class="header">
      <div class="w70">
        <h3>
          <?= $date ->toDate('F d, Y') ?>  |
          <?= $page->starttime()?>-<?= $page->endtime()?>
        </h3>
        <?php if( $type == 'meeting' ): 
        $reading = $page -> reading() -> first() -> toPage()?>
        <h2>
          <a href="<?=$reading->url()?>"><?= $reading->title()?></a><?php if($reading-> subtitle()->isNotEmpty()): ?>: 
            <?= $reading-> subtitle() ?><?php endif ?>
        </h2>
        <?php else: ?>
          <h1><?= $page->title()->html() ?></h1>
        <?php endif ?>
      </div>
    </div>
    <div class="content">
      <div class="w70 thinpads">
        <h4><span class="grotesque">Selection</span> ⟶ <?= $page-> assignment() ?></h4>
        <p><?= $page-> notes() ?></p></br>
        <?php if ($page->location()->isNotEmpty()): ?> 
          <p>
            Where? <?= $page->location()->html()?> 
          </p>
        <?php endif ?>
        <div class="image">
          <?php if ($image = $page->image()): ?>
            <figure>
              <?= $page->image() ?>
            </figure>
          <?php endif ?>
        </div>
      </div>
      <div class="w30 thinpads">
        <h4>*</h4>
        <ul class="related"> 
          <?php if( $type == 'meeting' ): 
            $reading = $page -> reading() -> first() -> toPage();
            $slug = $reading -> slug();
            $related_events = page('events') -> children()->filterBy("reading", '- readings/' . $slug)->sortBy("day");?>
            <li> 
              <a href="<?= $reading -> url()?>">
              <p><span class="grotesque">Reading</span> ⟶ <?= $reading -> title()?></p>
              </a>
            </li>
            <?php if ($related_events-> isNotEmpty()):?>
                <?php endif; foreach ($related_events as $related_event):?>
                  <li>    
                    <a href="<?= $related_event -> url()?>">
                      <?= $related_event -> day() -> toDate('F d, Y') ?>
                      <p><?= $related_event -> assignment() ?></p>
                    </a>
                  </li>
                <?php endforeach ?>
              </br>
          <?php else: ?>
          <h1><?= $page->title()->html() ?></h1>
          <?php endif ?>
        </ul>
      </div>
    </div>
  </div>
</main>
  
</section>
<?php snippet('aside', ['class' => 'hidden']) ?>
<?php snippet('footer') ?>