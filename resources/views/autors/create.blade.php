<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar autor</title>
</head>
<body>
    <h1>Adicionar autor</h1>

    <div>
        <form method="post" action="{{route('autors.store')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <p>Nome: <input type="text" name="nome" id="nome" placeholder="Digite o nome" value="{{old('nome')}}"></p>
            <p>Ano de nascimento: <input type="text" name="ano_nasc" id="ano_nasc" placeholder="Digite o ano de nascimento" value="{{old('ano_nasc')}}"></p>
            <p>Pais: <input type="text" name="pais" id="pais" placeholder="Digite o pais" value="{{old('pais')}}"></p>
            <p>Area: <input type="text" name="area" id="area" placeholder="Digite o area" value="{{old('area')}}"></p>
            <p>
                <a href="{{route('autors.index')}}">[Voltar]</a>
            </p>
            <p><button type="submit">Enviar</button></p>
        </form>
    </div>
</body>
</html>
