<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme</title>
</head>
<body>
    <a href="{{route('posts.create')}}">Criar Novo Post</a>
<hr>
@if(session('message'))
    <div>
        {{session('message')}}
    </div>
@endif

<h1>Post de Filme</h1>

@foreach($posts as $post)
    <p>{{$post->title}} [ 
        <a href="{{ route('posts.show', $post->id) }}">Ver</a> |
     ]</p>
@endforeach
<hr>

 <a href="{{route('posts.series.serie_index')}}">Ir Para Página de Séries</a>
</body>
</html>

