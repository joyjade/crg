<p><?= $page-> notes() ?></p>
</br>
<?php if ($page->location()->isNotEmpty()): ?> 
  <p>
    Where: <?= $page->location()->html()?> 
  </p>
<?php endif ?>
<div class="image">
  <?php if ($image = $page->image()): ?>
    <figure>
      <?= $page->image() ?>
    </figure>
  <?php endif ?>
</div>


