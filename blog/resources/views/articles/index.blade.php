<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Article Index</title>
</head>
<body>
    <h1>Article Index</h1>
    <ul>
        @foreach ($articles as $article)
            <li>
                {{ $article["title"]}}
            </li>
        @endforeach
    </ul>
</body>
</html>
