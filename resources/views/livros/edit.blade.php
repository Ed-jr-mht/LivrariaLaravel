<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar o livro</title>
</head>
<body>
    <h1>Editar o livro "{{$livro->titulo}}"</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $errors)
            <p>{{$error}}</p>
        @endforeach
    @endif

    <div>
        <form method="POST" action="{{route('livros.update', $livro->id)}}">
            @method('put')
            @csrf
            <p>Título: <input type="text" name="titulo" id="titulo" placeholder="Digite o título" value="{{$livro->titulo}}"></p>
            <p>Ano: <input type="text" name="ano" id="ano" placeholder="Digite o ano" value="{{$livro->ano}}"></p>
            <p>Idioma: <input type="text" name="idioma" id="idioma" placeholder="Digite o idioma" value="{{$livro->idioma}}"></p>
            <p>ISBN: <input type="text" name="isbn" id="isbn" placeholder="Digite o ISBN" value="{{$livro->isbn}}"></p>
            <p><img src="{{ url("storage/{$livro->capa}") }}" alt="{{ $livro->titulo}}" style= " max-width:100px">
            <p>
                <a href="{{route('livros.index')}}">[Voltar]</a>
            </p>
            <p><button type="submit">Enviar</button></p>
        </form>
    </div>
</body>
</html>
