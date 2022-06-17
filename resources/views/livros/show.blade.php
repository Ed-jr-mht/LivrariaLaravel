<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do livro</title>
</head>
<body>
    <h1>Detalhes do livro {{$livro->titulo}}</h1>

    <div>
        <ul>
            <li>ISBN: {{$livro->isbn}}</li>
            <li>Ano: {{$livro->ano}}</li>
            <li>Idioma: {{$livro->idioma}}</li>
            <li>MIDIA</li>
            <li>Noome da Midia: {{ $midia->nome}}</li>
            <li>Descrição da Midia : {{ $midia->descricao}}</li>
        </ul>
        <p>
            <a href="{{route('livros.index')}}">[Voltar]</a>
        </p>
        <form action="{{route('livros.destroy', $livro->id)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit">Deletar o livro "{{$livro->titulo}}"</button>
        </form>
    </div>
</body>
</html>
