<?php snippet('nav') ?>

<main class="<?= $page ?>">
	<ul>
		<?php foreach ($site->find('readings')->children()->listed()->flip() as $reading): ?>
			<li class="book-title"
			  <?php if($reading_image = $reading-> image()): ?> 
				data-src="<?=$reading_image-> url()?>"
			  <?php endif ?>>
          <?php 
          $annotation = page('annotations')->children()->findBy("reading", "- " . $reading->id());
          
          
          ?>
            <a href="<?=($annotation) ? $annotation->url() : '#'?>" class="triptych uppercase">
              <?= $reading-> title() ?><?php if($reading->subtitle()->isNotEmpty()): ?>: <?= $reading->subtitle() ?><?php endif ?>,
            </a>
		      <span class="triptych-italick"><?= $reading-> author()?></span>
		    </li>
		<?php endforeach ?>	
    <li>
      <a href="<?= $page-> find('biblio')-> url()?>" class="triptych-italick">
        Annotated Bibliography
      </a>
    </li>
	</ul>
</main>

<?php 
  // $image = $page->image()->isNotEmpty() ? $page->image() : '';
  snippet('aside', ['class' => 'hidden', 'image' => '']); 
  snippet('footer');
?>