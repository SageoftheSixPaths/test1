<?php foreach($heroes as $hero) : ?>
    <li><?= 'Superhero: '.$hero->name ?>
        <ul>
            <li><?= 'Class: '.$hero->class?></li>
            <li><?= 'Rank: '.$hero->rank ?></li>
        </ul>
    </li>
<?php endforeach; ?>


<h1>Create your own superhero!</h1>

<form method='POST' action='/hero'>
    <p>Hero's name</p>
    <input type='text' name='heroName'/>
    <p>Hero's class</p>
    <input type='text' name='heroClass' />
    <p>Hero's rank</p>
    <input type='text' name='heroRank' />
    <button type='submit'>Submit</button>

</form>