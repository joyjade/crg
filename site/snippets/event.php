<ul class="calendar">
    <?php foreach ($events as $event): ?>
        <li>
          <time><?= $event->day()->toDate('F d, Y') ?></time>
          <?php foreach( $event-> reading() -> toPages() as $reading): ?> 
            <div class="event-line">
                <div>
                  <a href="<?= $reading->url() ?>"> 
                    <?= $reading->title()?>
                  </a>
                  → <?= $event->assignment()?></div>
            </div>
          <?php endforeach ?> 
        </li>
    <?php endforeach ?>
</ul>