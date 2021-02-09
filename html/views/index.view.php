<form action='/checkout' method='POST'>
<?php if($books) : ?>
    <?php foreach($books as $book) : ?>
        <input type='checkbox' name='book-<?= $book->id ?>-checkbox' value="<?= $book->id ?>"/>
        <a href=<?= "/book/$book->id"?>><?= $book->title ?></a>
    <?php endforeach; ?>
    <button type='submit'>Check out</button>
    <?php else : ?>
    <?= 'Sorry, all books are currently checked out:(' ?>
<?php endif; ?>
</form>