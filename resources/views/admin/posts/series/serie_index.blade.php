<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie</title>
</head>
<body>
    <a href="{{route('posts.series.create_serie')}}">Criar Nova Serie</a>
<hr>
@if(session('message'))
    <div>
        {{session('message')}}
    </div>
@endif

<h1>Post de Série</h1>


@foreach($series as $serie)
    <p>{{$serie->title}} [ 
        <a href="{{ route('posts.series.show_serie', $serie->id) }}">Ver</a> |
     ]</p>
@endforeach
<hr>
<a href="{{route('posts.index')}}">Ir Para Página de Filmes</a>
</body>
</html>

