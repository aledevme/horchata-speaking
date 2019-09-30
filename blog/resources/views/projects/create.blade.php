@extends('layout')
@section('title','Portafolio')
@section('content')
    <h1>Crear proyecto</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <label for="">
            Titulo del proyecto
            <input type="text" name="title"><br>
        </label>
        <br>
        <label for="">
            URL del proyecto
            <input type="text" name="url"><br>
        </label>
        <br>
        <label for="">
            Descripción del proyecto
            <textarea name="description"></textarea><br>
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection