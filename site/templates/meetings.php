<?php snippet('nav') ?>

<main class="<?= $page ?>">
	<div class="triptych">
		<header>
			<h1 class="thinpads"><?= $page->text()->html()?></h1>
		</header>

		<div class='flt half thinpads'>
			<h4 class="triptych-italick uppercase">Past</h4>
			<?php 	$pastmtgs = 
						$page->children()
						->listed()
						->filter(function ($child) {
							return $child->day()->toDate() < time();
						})->limit(7);
					if ($pastmtgs->count() > 0): ?>
				<?php snippet('event', ['events' => $pastmtgs])?>		
			<?php endif ?>
		</div>	
		
		<div class='flt half thinpads'>
			<h4 class="triptych-italick uppercase">Upcoming</h4>
			<?php 	$upcomingmtgs = 
						$page->children()
						->listed()
						->filter(function ($child) {
							return $child->day()->toDate() > time();
						});

					if ($upcomingmtgs->count() > 0): ?>
				<?php snippet('event', ['events' => $upcomingmtgs])?>		
			<?php endif ?>
		</div>
	
	</div>
</main>
  
</section>
<?php snippet('footer') ?>
