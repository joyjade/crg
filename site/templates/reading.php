<?php snippet('nav') ?>
<?php $title = $page-> title(); $slug = $page -> slug() ?>

<main class="reading">
	<div class="panel triptych">
		<div class="heading thinpads">
			<h2>
				<?=$title?>
				<?php if($page-> subtitle()->isNotEmpty()): ?>
					</h2><h2><?= $page-> subtitle() ?>
				<?php endif ?>
			</h2>
			<h3 class="author triptych-italick"><?= $page-> author() ?></h3>
		</div>
		<div class="flex detail-body m-col">
			<div class="w70 thinpads">
        <h4> Notes </h4>
        <?php if( $published = $page-> published()->isNotEmpty() or $page->publisher()->isNotEmpty() ): ?>
          <p>
            Published: <?= $page-> published() ?>
            <?php if( $page->publisher()->isNotEmpty() ): ?>
              by <?= $page-> publisher() ?>
            <?php endif ?>
          </p> 
        <?php endif ?>
				<p><?= $page->text()?></p>
				<p><?= $page->links()?></p>
				
			</div>
			
			<div class="w30 thinpads">
        <?php $related_events = page('events') -> children()->filterBy("reading", '- readings/' . $slug)->sortBy("day");
          if ($related_events-> isNotEmpty()):?>
            <h4 class="grotesque"> Meetings ⟶</h4>
            <ul class="related"> 
              <?php snippet('related', ['related_events' => $related_events]); ?>
            </ul>
        <?php endif; ?>
				<h4> Tags </h4>
				<p><?= $page->tags()?></p>
			
			</div>
		</div>
		
			<!-- <?php if($pdf = $page-> documents() -> first()): ?>
				<a class="arrow dotted" href="<?= $pdf-> url()?>" target="_blank">
					<?php snippet('download_arrow') ?>
				</a>		
			<?php endif ?> -->
	</div>



	<?php if ($page->hasPrevListed()): ?>
		<div class="prev-button dotted">
			<a href="<?= $page->prevListed()->url() ?>">⟵</a>
		</div>
	<?php endif ?>

	<?php if ($page->hasNextListed()): ?>
		<div class="next-button dotted">
			<a href="<?= $page->nextListed()->url() ?>">⟶</a>
		</div>
	<?php endif ?>
</main>

<?php 
  $image = $page->image() ? $page->image() : '';
  snippet('aside', ['class' => '', 'image' => $image ]) ?>

<?php snippet('footer') ?>