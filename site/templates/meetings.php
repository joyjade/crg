<?php snippet('nav') ?>

<main class="dotted">
	<div class="info triptych">
		<?= $page-> text() ?>
	</div>
</main>

<?php
$success = kirby()->email([
    'from'    => 'jadeandpearls@gmail.com',
    'to'      => 'info@joy-jade.com',
    'subject' => 'Welcome!',
    'body'    => 'We will never reply',
])->isSent();
dump($success); ?>

<?php snippet('footer') ?>