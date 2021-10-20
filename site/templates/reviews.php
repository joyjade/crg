<?php snippet('nav') ?>
<main class="<?= $page ?> triptych">
  <div class="notice">
    <div>
      <h3>
        <a href="<?= $page->url()?>">
          <span class="uppercase"><?= $page -> title() ?>&nbsp;
          <?= $page-> subtitle() ?></span>  
        </a>
      </h3>
    </div>
    <div>
      <h3><a href="<?= $page -> find('mast') -> url()?>">About</a></h3>
    </div>
  </div> 
  <div class="content">
    <?php foreach($page->children()->listed() as $article):?>
      <div>
        <h2><?= $article->title()?> by <?= $article->author()?></h2>
      </div>
    <?php endforeach ?>

  </div>
</main>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>