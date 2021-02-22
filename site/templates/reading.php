<?php $date = $page->date(); ?>
<?php snippet('nav') ?>

<main class="event triptych">
  <div>
    <div class="header">
      <div class="w70">
        <h3>
          <?= $date ->toDate('F Y') ?>
        </h3>
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </div>
    <div class="content">
      <div class="w70 thinpads">
        <h4></h4>
        <p><?= $page-> note() ?></p>
        </br>
        <?php if ($page->location()->isNotEmpty()): ?> 
          <p>
            Where: <?= $page->location()->html()?> 
          </p>
        <?php endif ?>
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
      </div>
    </div>
  </div>
</main>

<?php 
  snippet('aside', ['class' => '', 'image' => $page->cover() ? $page->cover() : '']); 
  snippet('footer'); 
?>
