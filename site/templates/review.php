<?php snippet('nav') ?>
<main class="article triptych">
  <?php snippet('review_header', ['review' => $page->parent(),  'mast' => false]) ?>

  <div class="content">
    <div class="article-header <?= $page->cover() ? "flex" : ""?>">
      <div>
        <p><?= $page->date()->toDate('M d, Y') ?></p>
        <h1><?= $page->title() ?></h1>
        <p class="byline"> By <?= $page->author()?></p>
        <p class="subtitle"><em><?= $page->subtitle() ?></em></p>
      </div>
      <?php if($page->cover()): ?>
        <div class="featured-image">
          <?= $page->cover()->toFile()?>
        </div>
      <?php endif ?>
    </div>
    <div class="article-body">
      <?php foreach ($page->article()->toBlocks() as $block): ?>
        <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
          <?= $block ?>
        </div>
      <?php endforeach ?>
      <div class="endnotes">
        <h6>Notes</h6>
        <?= $page->endnotes()->kirbytext()?>
      </div>
      <div class="bio">
        <h6>author</h6>
        <?= $page->bio()->kirbytext()?>
      </div>
    </div>
  </div>

</main>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>