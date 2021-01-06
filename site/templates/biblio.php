<?php snippet('nav') ?>

<?php $title = $page-> title(); 
      $readings = $site -> find('readings');?>

<main>
  <div class="biblio triptych">
    <a class="back-button" href=<?=$readings -> url()?>> 
      <img src="<?= asset('assets/icons/arrow-down.svg')->url() ?>" class="slide-close dotted">
    </a>
    <h1 class="triptych-italick">
      <?= $title ?>
    </h1>
    <h3 class="triptych-italick">* * *</h3>
    <ol>
      <?php foreach($readings -> children() -> listed() as $reading): ?>
        <li>
          <div class="triptych title">
            <a href=<?= $reading -> url() ?>><?= $reading->title()?><?php if($reading->subtitle()->isNotEmpty()): ?>: <?= $reading->subtitle() ?><?php endif ?></a>
            <span class="triptych-italick"><?= $reading-> author()?></span>
            </div>
          <p><?= $reading->text()?></p>
        </li>
      <?php endforeach ?>
    </ol>
  </div>
</main>

<?php snippet('aside', ['class' => '']) ?>

<?php snippet('footer') ?>