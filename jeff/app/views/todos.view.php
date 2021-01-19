<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="description"
        />
    </head>
    <body>
        <?php foreach($tasks as $task) : ?>
            <li><?= $task->description; ?></li>
        <?php endforeach; ?>
        <h1>Insert in another todo task</h1>
        <form method='POST' action='/todos'>
            <input name='task'></input>
        </form>
    </body>
</html>