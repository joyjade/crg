<?php if ($related_events-> isNotEmpty()):?>
  <?php foreach ($related_events as $related_event):?>
    <li>    
      <a href="<?= $related_event -> url()?>">
        <date><?= $related_event -> day() -> toDate('m/d/Y') ?></date>
        <p><?= $related_event -> assignment() ?></p>
      </a>
    </li>
  <?php endforeach ?>
  </br>
<?php endif ?>