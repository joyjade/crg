<div>
    <?php if($success): ?>
        <div class="alert success">
            <p><?= $success ?></p>
        </div>
    <?php else: ?>
        <?php if (isset($alert['error'])): ?>
            <div class="alert error"><?= $alert['error'] ?></div>
        <?php endif ?>
        <form class="subscribe-form" method="post" action="<?= $page->url() ?>">
            <div class="honeypot">
                <label for="website">Website <abbr title="required">*</abbr></label>
                <input type="website" id="website" name="website">
            </div>
            <div class="field">
                <label for="name">
                    Name <abbr title="required">*</abbr>
                </label>	
                <input type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
                <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>
            </div>
            <div class="field">
                <label for="email">
                    Email <abbr title="required">*</abbr>
                </label>
                <input type="email" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
                <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>
            </div>
            <input class="subscribe-button" type="submit" name="submit" value="Submit">
        </form>
    <?php endif ?>
</div>