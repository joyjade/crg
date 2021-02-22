<footer class="info triptych dotted">
    <?php $info = page('info'); $sections = $info->blueprint()->fields()?>
    <section>
      <?php foreach( $sections as $section):?>
        <h5><?= $section['label'] ?></h5>
      <?php endforeach ?>
      <a href="#" id="slide_close">
        <img src="<?= asset('assets/icons/arrow-down.svg')->url() ?>" class="slide-close dotted m-hide">
        <img src="<?= asset('assets/icons/x.svg')->url() ?>" class="slide-close dotted m-show">
      </a>
    </section>
    <section class="content">
        <div class="">
          <h5 id="first">Mission</h5>             
          <?= $info-> mission() -> markdown()?>
          
          <h5 id="second">History</h5>   
            <?= $info-> history() -> markdown()?>

          <h5 id="third">Partners</h5> 
            <?= $info-> partners() ?>
          
          <h5 id="fourth">FAQ</h5> 
            <?= $info-> faq() ?>

          <h5 id="fifth">Contact</h5>   
            <p>Join the group ⟶ <?= Html::email($info->email()) ?></p>
            <?php foreach($info->links()->toStructure() as $link): ?>
              <p><?=$link->name()?> ⟶ <a href='<?=$link->url()?>' target="_blank"><?=$link->alias()?></a></p> 
            <?php endforeach ?>
            <p>Location ⟶</p>
            <p> <?= $info-> location() ?></p>
            <?php snippet('subscribe') ?> 
            
          <p>Donate</p>
            <?= $info-> donate() ?>
          <p>About this site</p>
            <?= $info-> credits() ?>
        </div>
        <br/>
    </section>

</footer>
<?= js(['assets/js/global.js', '@auto'])?> 
</body>

</html>