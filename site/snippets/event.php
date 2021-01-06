<ul class="calendar">
    <?php foreach ($events as $event): ?>
        <li>
          <div>
            <time><?= $event->day()->toDate('F d, Y') ?></time>
            <!-- <span class="type"> <?= Str::upper($event->intendedTemplate()->name())?> </span> -->
          </div>
          <div class="event-line">
            <?php if( $event->reading()->isEmpty()): ?>
              <div class="event-line">
                <div>
                  <a href="<?=$event-> url()?>"><?= $event-> title() ?></a>
                  ⟶ <?=$event-> notes()?>
                </div>
              </div>
            <?php else: ?>
              <?php foreach( $event-> reading() -> toPages() as $reading): ?> 
                <div class="event-line">
                  <div>
                    <a href="<?= $reading->url() ?>"><?= $reading->title()?></a>
                    ⟶ <?= $event->assignment()?></div>
                </div>
              <?php endforeach ?> 
            <?php endif ?>
            <div class="event">
              <?php if ($image = $event->image()): ?>
                <figure>
                  <a href="<?= $event->url() ?>"><?= $event->image() ?></a>
                </figure>
              <?php endif ?>
            </div>
          <div>
        </li>
    <?php endforeach ?>
</ul>