<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Article List</title>
</head>

<body>
    <header>
        <nav>
            <a href="/">Home</a> |
            <a href="/assignment">Assignments</a>
        </nav>
    </header>

    <h1>Assignment List</h1>
    <ul>
        <?php foreach ($assignment as $assignment): ?>
        <li><?php    echo $assignment['title'] ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>