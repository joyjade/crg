<?php snippet('nav') ?>
<main class="<?= $page ?> reviews triptych">
  <div class="notice">
    <div>
      <h3>
        <a href="<?= $page->parent()->url()?>">
            <span class="uppercase"><?= $page->parent()->title() ?>&nbsp;
            <?= $page-> parent() -> subtitle() ?></span>  
        </a>
      </h3>
    </div>
    <div>
      <h3><a href="<?= $page -> url()?>"></a>
        About</h3>
    </div>
  </div> 
  <div class="content"> 
      <h4 class="uppercase">About</h4></br>
      <?= $page -> mission() -> markdown() ?>
      <p class="right">— <?= $page -> editor()?></p>
  </div>
</main>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>