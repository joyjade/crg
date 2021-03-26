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
        <h1>$6</h1>
        <h4  class="uppercase">Community <br/> Bookmark #1</h4>
      </div>
      <div class="w75">
        <h1>&nbsp</h1>
        <?= $page-> details()->markdown() ?>
        <ul class="pay">
          <li class=" flex">
            <span>Venmo</span>
            <span>@Olivia-Leiter</span>
          </li>
          <li class="flex">
            <span>Cash App</span>
            <span>$CommunityReading</span>
          </li>
        </ul>
        <?= $page->footnotes()->markdown() ?>

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