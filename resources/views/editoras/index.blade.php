<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Editoras</title>
</head>
<body>


    <p><a href="{{ route('editoras.create') }}">[Inserir nova editora]</a></p>

    <hr>

    @if (session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif

    <h1>Lista de Editoras</h1>

    @foreach (@$editoras as $editora )
        <p>
            {{$editora->nome }}

            <a href="{{ route('editoras.show', $editora->id) }}"> Ver Detalhes</a>
            <a href="{{ route('editoras.edit', $editora->id) }}">[]Editar]</a>

        </p>

    @endforeach
</body>
</html>
