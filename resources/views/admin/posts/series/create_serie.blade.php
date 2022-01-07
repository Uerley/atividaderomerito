<h1>Cadastrar Série</h1>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
<form action="{{route('posts.series.serie_store')}}" method="post">
    @csrf
    <input type="text" name="title" id="title" placeholder="Titulo" >
    <input type="text" name="synopsis" id="synopsis" placeholder="Sinopse" >
    <input name="year" type="number" placeholder="Ano">
    <input name="temp" type="number" placeholder="Temporadas">
    <button type="submit">Enviar</button>
</form>