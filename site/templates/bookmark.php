<?php snippet('nav') ?>

<?php $backurl = $page->parent()->url() ?>
<main>
  <div class="bookmark triptych"> 
    <h3 class="header triptych uppercase">
      <a href="<?= $backurl ?>">
        <?= $page->parent()-> title() ?>
      </a>
      <div class="back-button dotted m-hide">
        <h6><a href="<?= $backurl ?>">⟵ Back </a></h6>
      </div>
    </h3>
    <?php snippet('bookmark_gallery', ['bookmarks' => $page->siblings()->listed()]) ?>
    <div class="content flex">
      <div class="w25">
        <h1>$<?=$page-> price() ?></h1>
        <h4  class="uppercase"><?=$page-> title() ?></h4>
      </div>
      <div class="w75">
        <h1>&nbsp</h1>
        <?= $page-> description()->markdown() ?>
        <?php if( $page-> soldout()->bool()): ?>
          <p class="label subheader">Sold Out</p>
        <?php else : ?>
          <ul class="pay">
            <?php foreach( $page-> payment() -> toStructure() as $payment ): ?> 
              <li class=" flex">
                <span><?= $payment -> method()?></span>
                <span>
                  <a href="<?=$payment -> url() ? $payment -> url() : '#'?>">
                    <?= $payment -> handle()?>
                  </a>
                </span>
              </li>
            <?php endforeach ?>
          </ul>
          <?= $page->footnotes()->markdown() ?>
        <?php endif ?>
        

      </div>  
    </div>
    <div class="content bio flex">
      <div class="w25"></div>
      <div class="w75">
        <h4 class="uppercase">About the Artist</h4></br>
        <?= $page-> bio()->markdown() ?>
      </div>
    </div>
  </div>
</main>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>