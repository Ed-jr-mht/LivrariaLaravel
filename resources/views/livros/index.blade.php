@extends('adminlte::page')

@section('title','Listar Livros')

@section('content_header')
    <h1>Lista de Livros</h1>
@stop

@section('content')

@if($errors->anY())
        @foreach ($errors-> all() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif


    <h4>CADASTRAR NOVO LIVRO</h4>
    <p><a href="{{route('livros.create')}}">[Inserir novo livro]</a></p>

    <hr>

    @if (session('message'))
        <div>
            {{session('message')}}
        </div>
    @endif

    <div>
        @foreach ($livros as $livro)
        <p>
            {{$livro->titulo}}
            <a href="{{route('livros.show', $livro->id)}}">[Ver detalhes]</a>
            <a href="{{route('livros.edit', $livro->id)}}">[Editar]</a>
        </p>
        @endforeach
    </div>

    <div>
        <form  method="post" action="{{ route('livros.search')}}">
            @csrf
            <p>BUSCAR: </p>
            <input type="text" name="search" id="search" placeholder="Digite sua Busca...">
            <button type="submit">[Buscar]</button>
        </form>
    </div>

    @if (isset($filters))
        {{$livros->appends($filters)->links()}}
     @else
        {{$livros->links() }}

    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('SUP!');
    </script>
@stop
