<?php snippet('nav') ?>

<main class="<?= $page ?>">
	<div class="triptych">
		<header>
			<h1 class="thinpads"><?= $page->text()->html()?></h1>
		</header>

		<div class='w100 thinpads'>
			<?php 	$upcomingmtgs = 
              $page->children()->listed()->filter(function ($child) {
                return $child->day()->toDate() > time();
              }); if ($upcomingmtgs->count() > 0): ?>
				<?php snippet('featured_event', ['events' => $upcomingmtgs, 'classname' => 'upcoming'])?>		
        <?php endif ?>
    </div>
      
    <div class='past-events thinpads'>
      <h2 class="triptych-italick ">Past</h2>
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
      
	</div>
</main>
  
</section>
<?php snippet('footer') ?>
