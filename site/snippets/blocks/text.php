<?php 

/** @var \Kirby\Cms\Block $block */ 
if($block->indented()->bool()): ?>
  <div class="indented">
    <?= $block->text();?>
  </div>
<?php else : ?>
  <?= $block->text();?>
<?php endif ?>