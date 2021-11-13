<?php snippet('nav') ?>
<main class="<?= $page ?> triptych">
  <?php snippet('review_header', ['review' => $page, 'mast' => true]) ?>
  <div class="content">
    <div class="post issue">
      <div>
        <h1 class="header"><?= $page->issue_title()?></h1>
        <?= $page-> intro() -> kirbytext() ?>
      </div>
    </div>
    <?php foreach($page->children()->listed() as $article):?>
      <div class="post">
        <div class="head-line">
          <h3><?= $article->date()->toDate('F d, Y')?></h3>
        </div>
        <div class="image">
          <?php if ($cover = $article->cover()): ?>
            <figure>
              <a href="<?=$article->url()?>">
                <?= $article->cover()->toFile()?>
              </a>
            </figure>
          <?php endif ?>
        </div>
        <div class="event-line">
          <div>
            <!-- <span class="subheader">NEW</span> -->
            <h2><a href="<?= $article-> url() ?>"><?= $article-> title() ?></a></h2>
          </div>
          <p class="location">
            <span class="triptych-italick">By <?= $article->author()?></span>
          </p>
        </div>
      </div>
    <?php endforeach ?>

  </div>
</main>
<?php snippet('aside', ['class' => '', 'image' => '']); snippet('footer'); ?>