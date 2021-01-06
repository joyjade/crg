<?php ?> 
<ul class="calendar <?= $classname ?> ">
    <?php foreach ($events as $event): ?>
        <li>
            <h3>
              <?= $event->day()->toDate('F d, Y') ?> | 
              <span class="type"> <?= Str::upper($event->intendedTemplate()->name())?> </span>
            </h3>
            <div class="event">
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
                  <?php else: ?>
                    <?php foreach( $event-> reading() -> toPages() as $reading): ?> 
                      <h2> 
                        <a href="<?= $reading->url() ?>"> 
                          <?= $reading->title()?>
                        </a>
                      </h2>
                      <p> Selection ⟶ <?= $event->assignment()?></p>
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
    <?php endforeach ?>
</ul>