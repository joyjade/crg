<aside>
	<div class="dotted">
		<?php if ($page->image()): ?>
			<div class="thumb-image <?=$class?>">
				<img src="<?= $page->image()->url()?>">
			</div>		
		<?php endif ?>
	</div>
</aside>