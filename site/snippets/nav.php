<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $site->title()?> | <?= $page->title() ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?= js(['assets/js/global.js', '@auto'])?>
	<?= css(['assets/css/global.css', 'assets/type/typography.css', '@auto']) ?>
</head>

<body class="grid">
	<nav>
		<div class="dotted">
			<div class="triptych-italick title">
				<a href="<?= $site->url() ?>"><?= $site->title() ?></a>
			</div>
			<?php foreach ($site->children()->listed() as $item): ?>
				<?php if($item == page('info')): ?>
					<div class="triptych uppercase" id='info'><?=$item->title()?></div>
				<?php else: ?>
					<div class="triptych uppercase"><?=$item->title()->link()?></div>
				<?php endif ?>
			<?php endforeach ?>
		</div>
	</nav>

