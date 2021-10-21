<?php /** @var \Kirby\Cms\Block $block */ ?>
<figure>
  <ul class="flex">
    <?php foreach ($block->images()->toFiles() as $image): ?>
    <li>
      <?= $image ?>
      <em><?= $image->caption() ?></em>
    </li>
    <?php endforeach ?>
  </ul>
</figure>