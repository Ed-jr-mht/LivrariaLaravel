@extends('adminlte::page')

@section('title','Criar Livro')

@section('content_header')
    <h1>Digite e Crie novos Livros</h1>
@stop

@section('content')

@if($errors->anY())
        @foreach ($errors-> all() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif

    <p>será armazenados nesses campos:</p>


    <h4>CADASTRAR NOVO LIVRO</h4>
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('SUP!');
    </script>
@stop
