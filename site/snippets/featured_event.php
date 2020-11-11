<ul class="calendar <?= $classname ?> ">
    <?php foreach ($events as $event): ?>
        <li>
            <h3><?= $event->day()->toDate('F d, Y') ?></h3>
            <div class="event">
              <?php if ($image = $event->image()): ?>
                <figure>
                  <a href="<?= $event->url() ?>"><?= $event->image() ?></a>
                </figure>
              <?php endif ?>
            </div>
            <div class="event-line">
                <?php foreach( $event-> reading() -> toPages() as $reading): ?> 
                  <div>
                    <h3> 
                      <a href="<?= $reading->url() ?>"> 
                        <?= $reading->title()?>
                      </a>
                    </h3>
                    <p> → <?= $event->assignment()?></p>
                  </div>
                <?php endforeach ?>
                <p class="location"><?= $event->location()->html()?></p>
            </div>
            
        </li>
    <?php endforeach ?>
</ul>