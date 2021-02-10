<?php foreach($_POST as $key) : ?>
    <?= var_dump($_POST) ?>
    <p>You checked out: <b><?= $key ?></b></p>
<?php endforeach; ?>