<footer class="info triptych dotted">
    <?php $info = page('info') ?>
    <section>
        <p>Where</p>
        <p>⟶ Los Angeles Contemporary Archive</p>
        <p>709 N. Hill St</p>
        <p>Los Angeles</p>
        <br/>
        <p>Contact</p>
        <p>⟶ <?= Html::email($info->email()) ?></p>
        <br/>
        <p>Instagram <br/> ⟶ <a href='<?=$info->social()?>' target="_blank"><?=$info->insta()?></a></p>
    </section>
    <section>
        <div class="flex">
            <p><?= $info-> text() ?></p>
            <a href="#" id="slide_close">
                <img src="<?= asset('assets/icons/arrow-down.svg')->url() ?>" class="slide-close dotted m-hide">
                <img src="<?= asset('assets/icons/x.svg')->url() ?>" class="slide-close dotted m-show">
            </a>
        </div>
        
        <br/>
        <br/>
        
        <br/>
        Join the group ⟶
        <br/>
        <?php snippet('subscribe') ?>   
    </section>

</footer>
</body>

</html>