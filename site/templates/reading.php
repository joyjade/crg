<?php $date = $page->date(); ?>
<?php snippet('nav') ?>

<main class="reading triptych">
  <div>
    <div class="header">
      <div class="w70">
        <h4 class="uppercase">
          <?php $page->show_date()->bool() ? $date = $date->toDate('F d, Y') : $date = $date ->toDate('F Y') ?>
          <?= $date ?>
        </h4>
        <h2>
          <a href="<?= $page-> url() ?>"><?= $page-> fullTitle() ?>,</a>
          <span class="triptych-italick"><?= $page-> author()?></span>  
        </h2>
        <div class="reading-nav dotted triptych flex uppercase">
          <div class="back-button">
            <h6><a href="<?= $page->parent()->url() ?>">Back </a></h6>
          </div>
          <?php if ($page->hasPrevListed()): ?>
            <div>
              <a class="prev-button" href="<?= $page->prevListed()->url() ?>">
                <div class="inner-arrow"></div>
              </a>
            </div>
          <?php endif ?>
          <?php if ($page->hasNextListed()): ?>
            <div>
              <a class="next-button" href="<?= $page->nextListed()->url() ?>">
                <div class="inner-arrow"></div>
              </a>
            </div>
          <?php endif ?>
        </div>
       
      </div>
    </div>
    <div class="content">
      <div class="w70 thinpads">
        <h4></h4>
        <div>
          <?= $page-> note()-> kirbytext() ?>
        </div>
        
        <?php if($page->blurb()->isNotEmpty()) :?>
          <div>
            <p><em>Selection</em><p>
            <?= $page-> blurb()-> kirbytext() ?>
            <p class="right">– <?= $page-> contributor()?></p>
          </div>
        <?php endif ?>
        
        <?php if($page->links()->isNotEmpty()) :?>
          <ul class="references">
            <li class="heading"><i>Associations</i></li>
            <?php foreach ($page->links()-> toStructure() as $link): ?>
              <li><a class="highlight" href="<?= $link->url() ?>"><?= $link->description() ?></a></li>
            <?php endforeach ?>
          </ul>
        <?php endif ?>

        <?php foreach ($page->attachments() as $file): ?>
          <p><?= $file ?></p>
        <?php endforeach ?>
        <div class="image">
          <?php foreach ($page->memes() as $meme): ?>
            <figure>
              <?= $meme ?>
            </figure>
          <?php endforeach ?>
        </div>
      </div>
      <div class="w30 thinpads">
        <ul class="dotted details">
          <?php if($page->current()->bool()) :?>
            <li><span class="label">Currently Reading</span></li>
          <?php endif ?>
          <li>
            <?php if($page->custom_time()->isNotEmpty()) :?> 
              <span><?= $page->custom_time() ?></span>
            <?php else :?>
              <span>Sunday, 7-9PM</span>
            <?php endif ?>
          </li>
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
              Link to Reading<?= $page->hosted_elsewhere()->bool() ? '' : '*'?>

            </a></li>

            <?php if(!$page->hosted_elsewhere()->bool()): ?>
            <h6 class="cti">
              *Hosted by <a href="http://criticaltheoryindex.org/" target="_blank">
                Critical Theory Index
              </a>
            <h6>
            <?php endif ?>
          <?php endif?>

        </ul>
        
      </div>
    </div>
    
  </div>
</main>

<?php 
  snippet('aside', [
    'class' => '', 
    'image' => $page->cover() ? $page->cover() : ''
    ]); 
  snippet('footer'); 
?>
