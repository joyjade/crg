<?php $date = $page->date(); ?>
<?php snippet('nav') ?>

<main class="reading triptych">
  <div>
    <div class="header">
      <div class="w70">
        <h3>
          <?= $date ->toDate('F Y') ?>
          <?php if ($page->current()->bool()) :?>
            <span class="label subheader">currently reading</span>
          <?php endif ?>
        </h3>
        <h2>
          <a href="<?= $page-> url() ?>"><?= $page-> fullTitle() ?>,</a>
          <span class="triptych-italick"><?= $page-> author()?></span>  
        </h2>
      </div>
    </div>
    <div class="content">
      <div class="w70 thinpads">
        <h4></h4>
        <p><?= $page-> note()-> markdown() ?></p>
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
        <h4></h4>
        <?php if ($page->category()->isNotEmpty()) :?>
          <span class="subheader"><?=$page->category()?></span>
        <?php endif ?>
        <?php if ($page->location()->isNotEmpty()): ?> 
          <p>
            <?= $page->location()->html()?> 
          </p>
        <?php endif ?>
      </div>
    </div>
  </div>
</main>

<?php 
  snippet('aside', ['class' => '', 'image' => $page->cover() ? $page->cover() : '']); 
  snippet('footer'); 
?>
