<h1>Cadastrar Filme</h1>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" name="title" id="title" placeholder="Titulo" >
    <input type="text" name="synopsis" id="synopsis" placeholder="Sinopse" >
    <input type="text" name="director" id="director" placeholder="Diretor">
    <input type="number" name="year" id="year" placeholder="year" >
    <button type="submit">Enviar</button>
</form>