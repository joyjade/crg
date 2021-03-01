<footer class="info triptych dotted">
    <?php $info = page('info'); $sections = $info->blueprint()->fields()?>
    <section class="menu">
        <a href="#" id="item_first" class="menu-item active">
          <h4>Mission</h4>
        </a>
        <a href="#" id="item_second" class="menu-item">
          <h4>History</h4>
        </a>
        <a href="#" id="item_third" class="menu-item">
          <h4>Partners</h4>
        </a>
        <a href="#" id="item_fourth" class="menu-item">
          <h4>FAQ</h4>
        </a>
        <a href="#" id="item_fifth" class="menu-item">
          <h4>Contact</h4>
        </a>
        <a href="#" id="item_sixth" class="menu-item">
          <h4>Donate</h4>
        </a>
        <a href="#" id="item_seventh" class="menu-item">
          <h4>Site</h4>
        </a>

      <a href="#" id="slide_close">
        <img src="<?= asset('assets/icons/arrow-down.svg')->url() ?>" class="slide-close dotted m-hide">
        <img src="<?= asset('assets/icons/x.svg')->url() ?>" class="slide-close dotted m-show">
      </a>
    </section>
    <section class="content">
        <div id="first">
          <h3 >Mission</h3>             
          <?= $info-> mission() -> kirbytext()?>
        </div>
        <div id="second">
          <h3 >History</h3>   
          <?= $info-> history() -> kirbytext()?>
        </div>
        <div id="third">
          <h3 >Partners</h3> 
          <?php foreach( $info-> partners() -> toStructure() as $partner ): ?> 
            <div class="flex table">
              <p><a href="<?=$partner -> url() ?>"><?= $partner -> name()?></a> ⟶</p>
              <p><?=$partner -> description() ?></p>
            </div>
          <?php endforeach ?>
        </div>
        <div  id="fourth">
          <h3>FAQ</h3> 
          <?= $info-> faq()-> kirbytext() ?>
        </div>
        <div id="fifth">
          <h3>Contact</h3>   
          <div class="flex table">
            <div><p>Join the group ⟶</p></div>
            <div><p><?= Html::email($info->email()) ?></p></div>
            <div><p>Location ⟶</p></div>
            <div><?= $info-> location() ?></div>
            <?php foreach($info->links()->toStructure() as $link): ?>
              <div><p><?=$link->name()?> ⟶ </div>
              <div><a href='<?=$link->url()?>' target="_blank"><?=$link->alias()?></a></p> </div>
              
            <?php endforeach ?>
          </div>
          <?php snippet('subscribe') ?> 
        </div>
        <div id="sixth">
          <h3 >Donate</h3>
          <p> We are graciously housed under LACA. Donate <strong><a href="<?= $info-> donate()->url() ?>">here</a></strong> to contribute...</p>
        </div>
        <div id="seventh">
          <h3>Site</h3>
          <?= $info-> credits() ?>
        </div>  
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </section>

</footer>
<?= js(['assets/js/global.js', '@auto'])?> 
</body>

</html>