{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Article List</title>
</head> --}}


    {{-- <header>
        <nav>
            <a href="/">Home</a> |
            <a href="/articles">Articles</a>
        </nav>
    </header> --}}

<x-app-layout>
<body>
    <h1>Article List</h1>
    <ul>
        <?php foreach ($articles as $article): ?>
        <li><?php    echo $article['title'] ?></li>
        <?php endforeach ?>
    </ul>
</body>
</x-app-layout>
{{--
</html> --}}