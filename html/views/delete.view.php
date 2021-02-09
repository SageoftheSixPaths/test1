<form method='POST' action='/book/delete'>
<?php foreach($books as $book) : ?>
<input type='checkbox' name='book-<?= $book->id ?>-checkbox' value='<?= $book->id ?>'/>
<span><?= $book->title ?></span>
<?php endforeach; ?>
<button type='submit'>Delete</button>
</form>