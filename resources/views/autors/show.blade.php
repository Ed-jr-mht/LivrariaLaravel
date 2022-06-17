<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do autor</title>
</head>
<body>
    <h1>Detalhes do autor {{$autor->nome}}</h1>

    <div>
        <ul>
            <li>Area: {{$autor->area}}</li>
            <li>Ano de nascimento: {{$autor->ano_nasc}}</li>
            <li>Pais: {{$Autor->pais}}</li>
        </ul>
        <p>
            <a href="{{route('autors.index')}}">[Voltar]</a>
        </p>
        <form action="{{route('autors.destroy', $autor->id)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit">Deletar o autor "{{$autor->nome}}"</button>
        </form>
    </div>
</body>
</html>
