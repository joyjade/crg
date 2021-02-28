<footer class="info triptych dotted">
    <?php $info = page('info'); $sections = $info->blueprint()->fields()?>
    <section class="menu">
        <a href="#" id="item_first" class="menu-item active">
          <h5>Mission</h5>
        </a>
        <a href="#" id="item_second" class="menu-item">
          <h5>History</h5>
        </a>
        <a href="#" id="item_third" class="menu-item">
          <h5>Partners</h5>
        </a>
        <a href="#" id="item_fourth" class="menu-item">
          <h5>FAQ</h5>
        </a>
        <a href="#" id="item_fifth" class="menu-item">
          <h5>Contact</h5>
        </a>
        <a href="#" id="item_sixth" class="menu-item">
          <h5>Donate</h5>
        </a>
        <a href="#" id="item_seventh" class="menu-item">
          <h5>Site</h5>
        </a>

      <a href="#" id="slide_close">
        <img src="<?= asset('assets/icons/arrow-down.svg')->url() ?>" class="slide-close dotted m-hide">
        <img src="<?= asset('assets/icons/x.svg')->url() ?>" class="slide-close dotted m-show">
      </a>
    </section>
    <section class="content">
        <div class="">
          <h5 id="first">Mission</h5>             
          <?= $info-> mission() -> kirbytext()?>
          
          <h5 id="second">History</h5>   
            <?= $info-> history() -> kirbytext()?>

          <h5 id="third">Partners</h5> 
            <?= $info-> partners() -> toStructure() -> kirbytext()?>
            <?= $info-> history() -> markdown()?>
          
          <h5 id="fourth">FAQ</h5> 
            <?= $info-> faq()-> kirbytext() ?>

          <h5 id="fifth">Contact</h5>   
            <p>Join the group ⟶ <?= Html::email($info->email()) ?></p>
            <?php foreach($info->links()->toStructure() as $link): ?>
              <p><?=$link->name()?> ⟶ <a href='<?=$link->url()?>' target="_blank"><?=$link->alias()?></a></p> 
            <?php endforeach ?>
            <p>Location ⟶</p>
            <p> <?= $info-> location() ?></p>
            <?php snippet('subscribe') ?> 
            
          <h5 id="sixth">Donate</p>
            <?= $info-> donate() ?>

          <h5 id="seventh">Site</h5>
            <?= $info-> credits() ?>
            <?= $info-> history() -> markdown()?>
        </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </section>

</footer>
<?= js(['assets/js/global.js', '@auto'])?> 
</body>

</html>