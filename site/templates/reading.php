<?php $date = $page->date(); ?>
<?php snippet('nav') ?>

<main class="reading triptych">
  <div>
    <div class="header">
      <div class="w70">
        <h4 class="uppercase">
          <?= $date ->toDate('F Y') ?>
        </h4>
        <h2>
          <a href="<?= $page-> url() ?>"><?= $page-> fullTitle() ?>,</a>
          <span class="triptych-italick"><?= $page-> author()?></span>  
        </h2>
        <div class="back-button dotted">
          <h6><a href="<?= $page->parent()->url() ?>">⟵ Back </a></h6>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="w70 thinpads">
        <h4></h4>
        <?= $page-> note()-> kirbytext() ?>
        </br>
        <div class="image">
          <?php if ($image = $page->meme()): ?>
            <figure>
              <?= $page->meme() ?>
            </figure>
          <?php endif ?>
        </div>
      </div>
      <div class="w30 thinpads">
        <ul class="dotted details">
          <?php if($page->current()->bool()) :?>
            <li><span class="label">Currently Reading</span></li>
          <?php endif ?>
          <li><span>Sunday, 7-9PM</span></li>
          <?php if ($page->category()->isNotEmpty()) :?>
            <li><span class="subheader"><?=$page->category()?><span></li>
          <?php endif ?>
          <?php if ($page->location()->isNotEmpty()): ?> 
            <li><span>
              <?= $page->location()->html()?><?php if($page->current()->bool()): ?>,<span class="tint"><?= Html::email(page('info')->email(), 'Email to Join') ?><span> 
              <?php endif ?>
            </span></li>   
          <?php endif ?>
          <?php if($page->download_reading()->isNotEmpty()) :?>
            <li><a href="<?=$page->download_reading()->url()?>" target="_blank" class="oval">
              Link to Reading*
            </a></li>
            <h6 class="cti">
              *Hosted by <a href="http://criticaltheoryindex.org/" target="_blank">
                Critical Theory Index
              </a>
            <h6>
          <?php endif?>

        </ul>
        
      </div>
    </div>
  </div>
</main>

<?php 
  snippet('aside', ['class' => '', 'image' => $page->cover() ? $page->cover() : '']); 
  snippet('footer'); 
?>
