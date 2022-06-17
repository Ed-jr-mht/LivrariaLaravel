<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar o Autor</title>
</head>
<body>
    <h1>Editar o Autor "{{$autor->nome}}"</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $errors)
            <p>{{$error}}</p>
        @endforeach
    @endif

    <div>
        <form method="POST" action="{{route('autors.update', $autor->id)}}">
            @method('put')
            @csrf
            <p>Nome: <input type="text" name="nome" id="nome" placeholder="Digite o Nome" value="{{$autor->nome}}"></p>
            <p>Ano de Nascimento: <input type="integer" name="ano_nasc" id="ano_nasc" placeholder="Digite o ano" value="{{$autor->ano_nasc}}"></p>
            <p>Pais: <input type="text" name="pais" id="pais" placeholder="Digite o Pais" value="{{$autor->pais}}"></p>
            <p>Area: <input type="text" name="area" id="area" placeholder="Digite o Area" value="{{$autor->area}}"></p>
            <p>
                <a href="{{route('autors.index')}}">[Voltar]</a>
            </p>
            <p><button type="submit">Enviar</button></p>
        </form>
    </div>
</body>
</html>
