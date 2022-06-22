@extends('adminlte::page')

@section('title','Listar Autores')

@section('content_header')
    <h1>Lista de Autores</h1>
@stop

@section('content')

@if($errors->anY())
        @foreach ($errors-> all() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif


        <h4>Lista de Autores :</h4>

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

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('SUP!');
    </script>
@stop
