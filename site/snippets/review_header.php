<div class="notice">
    <div>
      <h3>
        <a href="<?= $review->url()?>">
          <span class="uppercase"><?= $review -> title() ?>&nbsp;
          <?= $review-> subtitle() ?></span>  
        </a>
      </h3>
    </div>
    <?php if($mast): ?>
      <div>
        <h3><a href="<?= $review -> find('mast') -> url()?>">About</a></h3>
      </div>
    <?php endif ?>
  </div> 