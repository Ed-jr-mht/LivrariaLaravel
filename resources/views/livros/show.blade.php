
@extends('adminlte::page')

@section('title','Deletar Livro')

@section('content_header')
    <h1>Listar e Deletar Livros</h1>
@stop

@section('content')

@if($errors->anY())
        @foreach ($errors-> all() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif


    <h4> Listar e Deletar LIVRO</h4>
    <div>
        <ul>
            <li>ISBN: {{$livro->isbn}}</li>
            <li>Ano: {{$livro->ano}}</li>
            <li>Idioma: {{$livro->idioma}}</li>
            <li>MIDIA</li>
            <li>Noome da Midia: {{ $midia->nome}}</li>
            <li>Descrição da Midia : {{ $midia->descricao}}</li>
        </ul>
        <p>
            <a href="{{route('livros.index')}}">[Voltar]</a>
        </p>
        <form action="{{route('livros.destroy', $livro->id)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit">Deletar o livro "{{$livro->titulo}}"</button>
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
