<?php snippet('nav') ?>

<?php $title = $page-> title(); 
      $readings = $site -> find('readings');?>

<main class="bibliography">
  <div>
    <a href=<?=$readings -> url()?>> Back to Readings </a>
    <h1 class="triptych-italick">
      <?= $title ?>
    </h1>
    <ol>
      <?php foreach($readings -> children() -> listed() as $reading): ?>
        <li>
          <h6 class="triptych">
            <a href=<?= $reading -> url() ?>><?= $reading->title()?><?php if($reading->subtitle()->isNotEmpty()): ?>: <?= $reading->subtitle() ?><?php endif ?></a>
            <span class="triptych-italick"><?= $reading-> author()?></span>
          </h6>
          <p><?= $reading->text()?></p>
        </li>
      <?php endforeach ?>
    </ol>
  </div>
</main>

<?php snippet('aside', ['class' => '']) ?>

<?php snippet('footer') ?>