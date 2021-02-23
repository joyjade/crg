<li data-src="<?= $reading-> cover() ? $reading-> cover()-> url() : '' ?>">
    <div class="head-line">
      <h3>
        <?= $reading->date()->toDate('F Y')?>
        <?php if ($reading->current()->bool()) :?>
          <span class="label subheader">currently reading</span>
        <?php endif ?>
      </h3>
    </div>
    <div class="image">
      <?php if ($meme = $reading->meme()): ?>
        <figure>
          <a href="<?= $reading->url() ?>"><?= $meme ?></a>
        </figure>
      <?php endif ?>
    </div>
    <div class="event-line">
      <div>
        <?php if ($reading->category()->isNotEmpty()) :?>
          <span class="subheader"><?=$reading->category()?></span>
        <?php endif ?>
        <h2> 
          <a href="<?= $reading-> url() ?>"><?= $reading-> title() ?></a><?= $reading->subtitle()->isNotEmpty() ? $reading->subtitle() : '' ?>,
          <span class="triptych-italick"><?= $reading-> author()?></span>
        </h2>
      </div>
      <p class="location">
        On <?= $reading->location()->isNotEmpty() ?  $reading->location()->html() : ''?>, 
        Email/DM to join 
      </p>
    </div>
    
</li>
