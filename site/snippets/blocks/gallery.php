<?php /** @var \Kirby\Cms\Block $block */ ?>
<figure>
  <ul class="flex">
    <?php foreach ($block->images()->toFiles() as $image): ?>
    <li>
      <?= $image ?>
      <?php if(! $block->hide_single_caption()->bool()): ?>  
        <figcaption>
          <?= $image->caption() ?>
        </figcapion>
      <?php endif ?>
    </li>
    <?php endforeach ?>
  </ul>
  <figcaption>
    <?= $block -> group_caption() -> toString() ?>
  </figcaption>
</figure>