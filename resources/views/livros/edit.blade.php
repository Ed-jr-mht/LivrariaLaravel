
@extends('adminlte::page')

@section('title','Editar Livro')

@section('content_header')
    <h1>Edite Livros</h1>
@stop

@section('content')

@if($errors->anY())
        @foreach ($errors-> all() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif


        <h4>Editar Livro</h4>

            <div>
                <form method="POST" action="{{route('livros.update', $livro->id)}}">
                    @method('put')
                    @csrf
                    <p>Título: <input type="text" name="titulo" id="titulo" placeholder="Digite o título" value="{{$livro->titulo}}"></p>
                    <p>Ano: <input type="text" name="ano" id="ano" placeholder="Digite o ano" value="{{$livro->ano}}"></p>
                    <p>Idioma: <input type="text" name="idioma" id="idioma" placeholder="Digite o idioma" value="{{$livro->idioma}}"></p>
                    <p>ISBN: <input type="text" name="isbn" id="isbn" placeholder="Digite o ISBN" value="{{$livro->isbn}}"></p>
                    <p><img src="{{ url("storage/{$livro->capa}") }}" alt="{{ $livro->titulo}}" style= " max-width:100px">
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

