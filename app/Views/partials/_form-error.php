<?php if (session('validator')) : ?>
    <div>
        <?= session('validator')->listErrors() ?>
    </div>
    <br>
<?php endif ?>
