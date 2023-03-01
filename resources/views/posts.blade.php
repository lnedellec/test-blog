<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1>Liste des articles</h1>
    <ul>
        @foreach ($posts as $post)
        
        <li><a href="{{route('article', ['id' => $post->id ])}}">{{$post->title}}</a></li>
        @endforeach
    </ul>
</body>
</html>