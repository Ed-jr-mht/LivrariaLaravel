<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Editora</title>
</head>
<body>
    <h1>Editar Editora</h1>

    <h1>Detalhes da Editora : {{$editora->nome }}</h1>

    <ul>
        <li>local: {{$editora->local }}</li>
        <li>Site:  {{$editora->site }} </li>
        <li>Email:  {{$editora->email }}</li>
    </ul>

    <form action="{{route('editoras.destroy', $editora->id)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar a Editora "{{$editora->nome}}"</button>
    </form>
</body>
</html>
