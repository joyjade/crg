<li data-src="<?= $reading-> cover() ? $reading-> cover()-> url() : '' ?>">
    <h3>
      <span class="type"><?=$reading->current()->bool() ? 'currently reading' : ''?></span>
    </h3>
    <div class="image">
      <?php if ($meme = $reading->meme()): ?>
        <figure>
          <a href="<?= $reading->url() ?>"><?= $meme ?></a>
        </figure>
      <?php endif ?>
    </div>
    <div class="event-line">
      <div>
        <?php if( $reading->reading()->isEmpty()): ?>
          <h2> 
            <a href="<?= $reading-> url() ?>"><?= $reading-> title() ?></a>
          </h2>
          <p> <?= $reading->notes()?></p>
        <?php else: ?>
          <?php foreach( $reading-> reading() -> toPages() as $reading): ?> 
            <a href="<?= $reading->url() ?>">
              <h2><?= $reading->title()?></h2>
            </a>
          <?php endforeach ?>
        <?php endif ?>
      </div>
      <p class="location">
        <?= $reading->date()?><?php if ($reading->location()->isNotEmpty()): ?> 
          <p class="type"><?= $reading->location()->html()?> </p>
        <?php endif ?>
      </p>
    </div>
    
</li>
