<?php $date = $page->day(); ?>

<?php snippet('nav') ?>

<main class="event triptych">
  <div>
    <h3 class="header triptych uppercase">
      <?php if( $date->toDate() > time()) : ?> Upcoming <?php else :?> Past <?php endif ?>
      <?= Str::upper($page->intendedTemplate()->name())?>    
      <a class="back-button" href='<?=$page->parent()->url()?>'>
        <img src="<?= asset('assets/icons/arrow-down.svg')->url() ?>" class="slide-close"> Back
      </a>
    </h3> 
    <div class="content">
      <div class="w70">
        <h3>
          <?= $date ->toDate('F d, Y') ?>  |
          <?= $page->starttime()?>-<?= $page->endtime()?>
        </h3>
        <?php if( $type == 'meeting' ): 
          $reading = $page -> reading() -> first() -> toPage()?>
          <h2><a href="<?=$reading->url()?>"><?= $reading->title()?></a></h2>
          <p><span class="grotesque">Selection</span> ⟶ <?= $page-> assignment() ?></p>
          </br>
        <?php else: ?>
          <h1><?= $page->title()->html() ?></h1>
        <?php endif ?>
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
      <div class="w30">
        <h3>
          RELATED
        </h3>
        <ul class="related"> 
          <?php if( $type == 'meeting' ): 
            $reading = $page -> reading() -> first() -> toPage();
            $slug = $reading -> slug(); dump($slug);
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