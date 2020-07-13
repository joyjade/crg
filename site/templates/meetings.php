<?php snippet('nav') ?>

<main class="dotted meetings">
	<div class="triptych">
		<header>
			<h1 class="thinpads"><?= $page->text()->html()?></h1>
		</header>

		<div class='flt half thinpads'>
			<h3 class="triptych-italick uppercase">Past</h3>
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
			<h3 class="triptych-italick uppercase">Upcoming</h3>
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
