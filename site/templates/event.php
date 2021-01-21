<?php $date = $page->day(); ?>
<?php snippet('nav') ?>

<main class="event triptych">
  <div>
    <div class="header">
      <div class="w70">
        <h3>
          <?= $date ->toDate('l, F d, Y') ?>  |
          <?= $page->starttime()?>-<?= $page->endtime()?>
        </h3>
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </div>
    <div class="content">
      <div class="w70 thinpads">
        <h4></h4>
        <?php snippet('event_details') ?>
      </div>
      <div class="w30 thinpads">
        <h4></h4>
      </div>
    </div>
  </div>
</main>

<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>
