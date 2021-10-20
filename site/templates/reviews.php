<?php snippet('nav') ?>
<main class="<?= $page ?> triptych">
  <div class="notice">
    <div>
      <h3>
        <a href="<?= $page->url()?>">
          <span class="uppercase"><?= $page -> title() ?>s&nbsp;
          <?= $page-> subtitle() ?></span>  
        </a>
      </h3>
    </div>
    <div>
      <h3><a href="<?= $page -> find('mast') -> url()?>">About</a></h3>
    </div>
  </div> 
</main>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>