<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de livros</title>
</head>
<body>
    <h1>Lista de Livros</h1>

    <p><a href="{{route('livros.create')}}">[Inserir novo livro]</a></p>

    <hr>

    @if (session('message'))
        <div>
            {{session('message')}}
        </div>
    @endif

    <div>
        @foreach ($livros as $livro)
        <p>
            {{$livro->titulo}}
            <a href="{{route('livros.show', $livro->id)}}">[Ver detalhes]</a>
            <a href="{{route('livros.edit', $livro->id)}}">[Editar]</a>
        </p>
        @endforeach
    </div>

    <div>
        <form  method="post" action="{{ route('livros.search')}}">
            @csrf
            <p>BUSCAR: </p>
            <input type="text" name="search" id="search" placeholder="Digite sua Busca...">
            <button type="submit">[Buscar]</button>
        </form>
    </div>

    @if (isset($filters))
        {{$livros->appends($filters)->links()}}
     @else
        {{$livros->links() }}

    @endif
</body>
</html>
