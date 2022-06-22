
@extends('adminlte::page')

@section('title','Editar Autores')

@section('content_header')
    <h1>Edite Autores</h1>
@stop

@section('content')

@if($errors->anY())
        @foreach ($errors-> all() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif


        <h4>Editar Autores</h4>

        <div>
            <form method="POST" action="{{route('autors.update', $autor->id)}}">
                @method('put')
                @csrf
                <p>Nome: <input type="text" name="nome" id="nome" placeholder="Digite o Nome" value="{{$autor->nome}}"></p>
                <p>Ano de Nascimento: <input type="integer" name="ano_nasc" id="ano_nasc" placeholder="Digite o ano" value="{{$autor->ano_nasc}}"></p>
                <p>Pais: <input type="text" name="pais" id="pais" placeholder="Digite o Pais" value="{{$autor->pais}}"></p>
                <p>Area: <input type="text" name="area" id="area" placeholder="Digite o Area" value="{{$autor->area}}"></p>
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
