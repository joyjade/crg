<?php snippet('nav') ?>

	<main>
		<div class="<?= $page ?> triptych">
			<p><?= $page-> text() ?></p>
			<br/>
			<br/>
			Instagram → <a href='<?=$page->social()?>' target="_blank"><?=$page->insta()?></a>
			<br/>
			Join the group → <?= Html::email($page->email()) ?>
			<br/>
		</div>
		<?php snippet('subscribe') ?>
	</main>

<?php snippet('footer') ?>