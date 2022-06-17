<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar a Editora</title>
</head>
<body>

    <h1>Editar a Editora {{$editora->nome }}</h1>


    @if ($errors->any())
        @foreach ($errors->all() as $errors)
            <p>{{$error}}</p>
        @endforeach
    @endif

    <div>
        <form method="POST" action="{{route('editoras.update', $editora->id)}}">
            @method('put')
            @csrf
            <p>Nome : <input type="text" name="nome" id="nome" placeholder="Digite o nome" value="{{$editora->nome}}"></p>
            <p>Local: <input type="text" name="local" id="local" placeholder="Digite o local" value="{{$editora->local}}"></p>
            <p>Site: <input type="text" name="site" id="site" placeholder="Digite o site" value="{{$editora->site}}"></p>
            <p>Email: <input type="text" name="email" id="email" placeholder="Digite o email" value="{{$editora->email}}"></p>

            <p><button type="submit">Enviar</button></p>
        </form>
    </div>

</body>
</html>
