@extends('adminlte::page')

@section('title','Criar Autores')

@section('content_header')
    <h1>CRIE NOVOS AUTORES</h1>
@stop

@section('content')

@if($errors->anY())
        @foreach ($errors-> all() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif

    <h1>Adicionar autor</h1>

    <div>
        <form method="post" action="{{route('autors.store')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <p>Nome: <input type="text" name="nome" id="nome" placeholder="Digite o nome" value="{{old('nome')}}"></p>
            <p>Ano de nascimento: <input type="text" name="ano_nasc" id="ano_nasc" placeholder="Digite o ano de nascimento" value="{{old('ano_nasc')}}"></p>
            <p>Pais: <input type="text" name="pais" id="pais" placeholder="Digite o pais" value="{{old('pais')}}"></p>
            <p>Area: <input type="text" name="area" id="area" placeholder="Digite o area" value="{{old('area')}}"></p>
            <p>
                <a href="{{route('autors.index')}}">[Voltar]</a>
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
