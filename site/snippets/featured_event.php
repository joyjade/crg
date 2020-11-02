<ul class="calendar <?= $classname ?> ">
    <?php foreach ($events as $event): ?>
        <li>
            <!-- <a href="<?= $event->url() ?>"> -->
              <h2><?= $event->day()->toDate('F d, Y') ?></h2>
                <div class="">
                  <?php foreach( $event-> reading() -> toPages() as $reading): ?> 
                    <div class="event-line">
                        <div>
                          <h3> 
                            <a href="<?= $reading->url() ?>"> 
                              <?= $reading->title()?>
                            </a>
                          </h3>
                          <p> → <?= $event->assignment()?></p>
                        </div>
                      <div>
                      <?= $event->location()->html()?></div>
                      <?php if ($image = $event->image()): ?>
                          <figure><?= $event->image() ?></figure>
                      <?php endif ?>
                    </div>
                  <?php endforeach ?>
                </div>
            <!-- </a> -->
        </li>
    <?php endforeach ?>
</ul>