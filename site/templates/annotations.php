<?php snippet('nav') ?>
<?php 
  // $annotation = page('annotations')->children()->findBy("reading", "- " . $reading->id());
  // ($annotation) ? $annotation->url() : '#';  
  // $site->find('readings')->children()->listed()->flip();
?>

<main class="<?= $page?> triptych">
	<ul>
    <li class="notice">
      <div>
        <h3>Annotations are rolling, and highlight pink when they are out!</h3> 
      </div>
      <div>
        <h3><a href="<?= $page-> find('biblio')-> url()?>" class="triptych-italick">
          Bibliography
        </a></h3
      </div>
    </li>
    <?php foreach ($page->children()->listed()->flip() as $annotation): ?>
      <?php $reading = $annotation->reading()->toPage();?>
			<li class="book-title <?php e($annotation->text()->isEmpty(), 'default-cursor', 'highlight') ?>" 
          data-src="<?= $reading-> cover() ? $reading-> cover()-> url() : '' ?>">
        <a href="<?=$annotation->text()->isNotEmpty() ? $annotation->url() : '#'?>" class="triptych uppercase">
          <?= $reading-> fullTitle() ?>,</a>
        </a>
        <span class="triptych-italick"><?= $reading-> author()?></span>
      </li>
		<?php endforeach ?>	
	</ul>
</main>

<?php 
  $image = $page->image() ? $page->image() : '';
  snippet('aside', ['class' => 'hidden', 'image' => $image]); 
  snippet('footer');
?>