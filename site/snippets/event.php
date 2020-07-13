<ul class="calendar">
    <?php foreach ($events as $event): ?>
        <li>
            <a href="<?= $event->url() ?>">
                <?php if ($image = $event->image()): ?>
                    <figure><?= $event->image() ?></figure>
                <?php endif ?>
                <time><?= $event->day()->toDate('F d, Y') ?></time>
                <div class="event-line">
                    <div><?= $event->reading()?> → <?= $event->assignment()?></div>
                    <div><?= $event->location()->html()?></div>
                </div>
            </a>
        </li>
    <?php endforeach ?>
</ul>