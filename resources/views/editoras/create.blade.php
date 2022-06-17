<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicione uma Editora</title>
</head>
<body>
        <h1>ADICIONE UMA EDITORA</h1>

        <div>
            <form method="post" action="{{route('editoras.store')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <p>Nome : <input type="text" name="nome" id="nome" placeholder="Digite o nome" value="{{old('nome')}}"></p>
                <p>Local: <input type="text" name="local" id="local" placeholder="Digite o local" value="{{old('local')}}"></p>
                <p>Site: <input type="text" name="site" id="site" placeholder="Digite o site" value="{{old('site')}}"></p>
                <p>Email: <input type="text" name="email" id="email" placeholder="Digite o email" value="{{old('email')}}"></p>
                <p>
                    <a href="{{route('editoras.index')}}">[Voltar]</a>
                </p>
                <p><button type="submit">Enviar</button></p>
            </form>
        </div>

</body>
</html>
