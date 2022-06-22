@extends('adminlte::page')

@section('title','Criar Editora')

@section('content_header')
    <h1>Digite e Crie novas Editoras</h1>
@stop

@section('content')

@if($errors->anY())
        @foreach ($errors-> all() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif

    <p>será armazenados nesses campos:</p>


    <h4>CADASTRAR NOVA EDITORA</h4>


    <div>
        <form method="post" action="{{route('editoras.store')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <p>Nome : <input type="text" name="nome" id="nome" placeholder="Digite o nome" value="{{old('nome')}}"></p>
            <p>Local: <input type="text" name="local" id="local" placeholder="Digite o local" value="{{old('local')}}"></p>
            <p>Site: <input type="text" name="site" id="site" placeholder="Digite o site" value="{{old('site')}}"></p>
            <p>Email: <input type="text" name="email" id="email" placeholder="Digite o email" value="{{old('email')}}"></p>
            <p>
                <a href="{{route('editoras.index')}}">[Voltar]</a>
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
