@extends('adminlte::page')

@section('title','Deletar Editoras')

@section('content_header')
    <h1>Listar e Deletar Editoras</h1>
@stop

@section('content')

@if($errors->anY())
        @foreach ($errors-> all() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif


    <h4> Listar e Deletar Editoras</h4>
    <div>


        <h1>Detalhes da Editora : {{$editora->nome }}</h1>

        <ul>
            <li>local: {{$editora->local }}</li>
            <li>Site:  {{$editora->site }} </li>
            <li>Email:  {{$editora->email }}</li>
        </ul>

        <form action="{{route('editoras.destroy', $editora->id)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit">Deletar a Editora "{{$editora->nome}}"</button>
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
