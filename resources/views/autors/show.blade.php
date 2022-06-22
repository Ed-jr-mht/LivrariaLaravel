<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do autor</title>
</head>
<body>
    <h1>Detalhes do autor {{$autor->nome}}</h1>


</body>
</html>


@extends('adminlte::page')

@section('title','Deletar Autoras')

@section('content_header')
    <h1>Listar e Deletar Autoras</h1>
@stop

@section('content')

@if($errors->anY())
        @foreach ($errors-> all() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif


    <h4> Listar e Deletar Autores</h4>

    <div>
        <ul>
            <li>Area: {{$autor->area}}</li>
            <li>Ano de nascimento: {{$autor->ano_nasc}}</li>
            <li>Pais: {{$Autor->pais}}</li>
        </ul>
        <p>
            <a href="{{route('autors.index')}}">[Voltar]</a>
        </p>
        <form action="{{route('autors.destroy', $autor->id)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit">Deletar o autor "{{$autor->nome}}"</button>
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
