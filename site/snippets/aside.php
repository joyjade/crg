<aside <?php e(is_string($image), 'class="m-hide"') ?> >
	<div class="dotted">
    <div class="thumb-image <?=$class?>">
      <?php if(!is_string($image)): ?>
        <img src="<?= $image->url()?>">
      <?php endif ?>
    </div>		
	</div>
</aside>