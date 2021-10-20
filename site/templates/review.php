<?php snippet('nav') ?>
<main class="article triptych">
  <div class="content">
    <h1>
      <?= $page->title() ?>
      <?= $page->author() ?>
      <?php foreach ($page->article()->toBlocks() as $block): ?>
        <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
          <?= $block ?>
        </div>
      <?php endforeach ?>
    </h1>
    
  </div>

</main>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>