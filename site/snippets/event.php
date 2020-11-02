<ul class="calendar">
    <?php foreach ($events as $event): ?>
        <li class="flt w30 thinpads">
            <a href="<?= $event->url() ?>">
                <?php if ($image = $event->image()): ?>
                    <figure><?= $event->image() ?></figure>
                <?php endif ?>
                <div>
                  <time><?= $event->day()->toDate('F d, Y') ?></time>
                  <?php foreach( $event-> reading() -> toPages() as $reading): ?> 
                    <div class="event-line">
                        <div>
                          <a href="<?= $reading->url() ?>"> 
                            <?= $reading->title()?>
                          </a>
                          → <?= $event->assignment()?></div>
                        <div><?= $event->location()->html()?></div>
                    </div>
                  <?php endforeach ?>
                </div>
            </a>
        </li>
    <?php endforeach ?>
</ul>