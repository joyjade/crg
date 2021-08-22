<ul class="gallery">
  <?php if( $bookmark ): ?>
    <li class="triptych uppercase">
        <a href="<?=$bookmark->url()?>" data-src="<?=$bookmark->image('back.jpg')->url()?>">
          <div class="photo-wrapper">
            <div class="photo">
              <?= $bookmark-> image('front.jpg') ?>
            </div>
            <div class="reveal photo">
              <?= $bookmark-> image('back.jpg') ?>
            </div>
          </div>  
        </a>
        <h6><?= $bookmark-> artist() ?></h6>
    </li>
    <li class="empty">*</li>
    <li class="empty m-hide">*</li>
    <li class="empty m-hide">*</li>
  <?php else: ?> 
    <?php foreach ($bookmarks as $bookmark): ?>
      <li class="triptych uppercase">
        <a href="<?=$bookmark->url()?>" data-src="<?=$bookmark->image('back.jpg')->url()?>">
          <div class="photo-wrapper">
            <div class="photo">
              <?= $bookmark-> image('front.jpg') ?>
            </div>
            <div class="reveal photo">
              <?= $bookmark-> image('back.jpg') ?>
            </div>
          </div>  
        </a>
        <h6><?= $bookmark-> artist() ?></h6>
      </li>
    <?php endforeach ?>	
    <li class="empty m-hide">*</li>
    <li class="empty m-hide">*</li>
  <?php endif ?>
</ul>