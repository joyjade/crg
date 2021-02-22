<li data-src="<?= $reading-> cover() ? $reading-> cover()-> url() : '' ?>">
  <div>
    <time><?= $reading->date()->toDate('F Y') ?></time>
  </div>
  <div class="event-line">
    <?php if( $reading->reading()->isEmpty()): ?>
      <div class="event-line">
        <div>
          <a href="<?=$reading-> url()?>"><?= $reading-> title() ?></a>
          ⟶ <?=$reading-> notes()?>
        </div>
      </div>
    <?php else: ?>
      <?php foreach( $reading-> reading() -> toPages() as $reading): ?> 
        <div class="event-line">
          <div>
            <a href="<?= $reading->url() ?>"><?= $reading->title()?></a>
            ⟶ <?= $reading->assignment()?></div>
        </div>
      <?php endforeach ?> 
    <?php endif ?>
    <div class="event-01">
      <?php if ($image = $reading->meme()): ?>
        <figure>
          <a href="<?= $reading->url() ?>"><?= $reading->meme() ?></a>
        </figure>
      <?php endif ?>
    </div>
  <div>
</li>