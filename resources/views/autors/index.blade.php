<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de autores</title>
</head>

<body>
    <h1>Lista de Autores</h1>

    <p><a href="{{ route('autors.create') }}">[Inserir novo autor]</a></p>

    <hr>

    @if (session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif

    <div>
        @foreach ($autors as $autor)
            <p>
                {{ $autor->nome }}
                <a href="{{ route('autors.show', $autor->id) }}">[Ver detalhes]</a>
                <a href="{{ route('autors.edit', $autor->id) }}">[Editar]</a>
            </p>
        @endforeach
    </div>
</body>

</html>
