<footer class="info triptych dotted">
    <?php $info = page('info') ?>
    <section>
        <p>Where</p>
        <p>⟶ Los Angeles Contemporary Archive</p>
        <p>709 N. Hill St</p>
        <p>Los Angeles</p>
        <br/>
        <p>Contact</p>
        <p>⟶ Los Angeles Contemporary Archive</p>
        <p>709 N. Hill St</p>
        <p>Los Angeles</p>
        <br/>
        <p>Instagram → <a href='<?=$info->social()?>' target="_blank"><?=$info->insta()?></a></p>
    </section>
    <section>
        <div class="flex">
            <p><?= $info-> text() ?></p>
            <a href="#" id="slide_close">
                <img src="<?= asset('assets/icons/arrow-down.svg')->url() ?>" class="slide-close dotted">
            </a>
        </div>
        
        <br/>
        <br/>
        
        <br/>
        Join the group → <?= Html::email($info->email()) ?>
        <br/>
        <?php snippet('subscribe') ?>   
    </section>

</footer>
</body>

</html>