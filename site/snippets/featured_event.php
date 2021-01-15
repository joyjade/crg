<li>
    <h3>
      <?= $event->day()->toDate('F d, Y') ?> | 
      <span class="type"> <?= Str::upper($event->intendedTemplate()->name())?> </span>
    </h3>
    <div class="image">
      <?php if ($image = $event->image()): ?>
        <figure>
          <a href="<?= $event->url() ?>"><?= $event->image() ?></a>
        </figure>
      <?php endif ?>
    </div>
    <div class="event-line">
      <div>
        <?php if( $event->reading()->isEmpty()): ?>
          <h2> 
            <a href="<?= $event-> url() ?>"><?= $event-> title() ?></a>
          </h2>
          <p> <?= $event->notes()?></p>
        <?php else: ?>
          <?php foreach( $event-> reading() -> toPages() as $reading): ?> 
            <a href="<?= $event->url() ?>">
              <h2><?= $reading->title()?></h2>
              <p> Selection ⟶ <?= $event->assignment()?></p>
            </a>
          <?php endforeach ?>
        <?php endif ?>
      </div>
      <p class="location">
        <?= $event->starttime()?>-<?= $event->endtime()?><?php if ($event->location()->isNotEmpty()): ?>, 
          <?= $event->location()->html()?> 
        <?php endif ?>
      </p>
    </div>
    
</li>
