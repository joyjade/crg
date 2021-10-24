<?php /** @var \Kirby\Cms\Block $block */ ?>
<div class="<?= $block-> columns() -> isNotEmpty() ? $block-> columns() : "single"?>">
  <?= $block->text();?>
</div>