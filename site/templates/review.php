<?php snippet('nav') ?>
<main class="article triptych">
  <div class="content">
    <div class="article-header">
      <h1><?= $page->title() ?></h1>
      <p><?= $page->author() ?></p>
      <p class="subtitle"><em><?= $page->subtitle() ?></em></p>
    </div>
    <div>
      <?php foreach ($page->article()->toBlocks() as $block): ?>
        <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
          <?= $block ?>
        </div>
      <?php endforeach ?>
      </div>
  </div>

</main>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>