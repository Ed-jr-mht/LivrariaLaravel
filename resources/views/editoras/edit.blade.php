@extends('adminlte::page')

@section('title','Editar Editora')

@section('content_header')
    <h1>Edite Editora</h1>
@stop

@section('content')

@if($errors->anY())
        @foreach ($errors-> all() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif


        <h4>Editar Editoras</h4>

        <div>
            <form method="POST" action="{{route('editoras.update', $editora->id)}}">
                @method('put')
                @csrf
                <p>Nome : <input type="text" name="nome" id="nome" placeholder="Digite o nome" value="{{$editora->nome}}"></p>
                <p>Local: <input type="text" name="local" id="local" placeholder="Digite o local" value="{{$editora->local}}"></p>
                <p>Site: <input type="text" name="site" id="site" placeholder="Digite o site" value="{{$editora->site}}"></p>
                <p>Email: <input type="text" name="email" id="email" placeholder="Digite o email" value="{{$editora->email}}"></p>

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
