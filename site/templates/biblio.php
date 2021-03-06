<?php snippet('nav') ?>

<?php $title = $page-> title(); 
      $readings = $site -> find('readings');?>

<main>
  <div class="biblio triptych">
    <div class="back-button dotted ">
      <h6><a href="<?= $page->parent()->url() ?>">⟵ Back </a></h6>
    </div>
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

<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>