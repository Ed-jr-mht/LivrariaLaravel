<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar um livro</title>
</head>
<body>
    <h1>Adicionar um livro</h1>

    <div>
        <form method="post" action="{{route('livros.store')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <p>Título: <input type="text" name="titulo" id="titulo" placeholder="Digite o título" value="{{old('titulo')}}"></p>
            <p>Ano: <input type="text" name="ano" id="ano" placeholder="Digite o ano" value="{{old('ano')}}"></p>
            <p>Idioma: <input type="text" name="idioma" id="idioma" placeholder="Digite o idioma" value="{{old('idioma')}}"></p>
            <p>ISBN: <input type="text" name="isbn" id="isbn" placeholder="Digite o ISBN" value="{{old('isbn')}}"></p>
            <p>Capa: <input type="file" name="capa" id="capa" placeholder="Insira a Capa"></p>
            <p>
                <a href="{{route('livros.index')}}">[Voltar]</a>
            </p>
            <p><button type="submit">Enviar</button></p>
        </form>
    </div>
</body>
</html>
