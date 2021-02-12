<?php snippet('nav') ?>
<?php 
  // $annotation = page('annotations')->children()->findBy("reading", "- " . $reading->id());
  // ($annotation) ? $annotation->url() : '#';  
?>


<main class="<?= $page ?>">
	<ul>
    <?php $site->find('readings')->children()->listed()->flip() ?>
    <?php foreach ($page->children()->listed() as $annotation): ?>
      <?php $reading = $annotation->reading()->toPage();?>
			<li class="book-title" data-src="<?= $reading-> image() ? $reading-> image()-> url() : '' ?>">
        <a href="<?= $annotation->url()?>" class="triptych uppercase">
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
  $image = $page->image() ? $page->image() : '';
  snippet('aside', ['class' => 'hidden', 'image' => $image]); 
  snippet('footer');
?>