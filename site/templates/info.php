<?php snippet('nav') ?>

<main class="dotted">
	<div class="info triptych">
		<?= $page-> text() ?>
		<br/>
		<br/>
		Instagram → <a href='<?=$page->social()?>' target="_blank"><?=$page->insta()?></a>
		<br/>
		Join the group → <?= Html::email($page->email()) ?>
	</div>
</main>

<?php snippet('footer') ?>
