
@extends('adminlte::page')

@section('title','Listar Editoras')

@section('content_header')
    <h1>LISTA DE EDITORAS</h1>
@stop

@section('content')

@if($errors->anY())
        @foreach ($errors-> all() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif


        <h4>Lista de Editoras a baixo</h4>

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


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('SUP!');
    </script>
@stop
