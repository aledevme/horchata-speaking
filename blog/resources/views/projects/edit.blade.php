@extends('layout')
@section('title','Portafolio')
@section('content')
    <h1>Editar proyecto</h1>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $itemError)
                <li> {{$itemError}} </li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('projects.update',$project) }}" method="POST">
        @csrf @method('PATCH')
        
        <label for="">
            Titulo del proyecto
            <input type="text" name="title" value="{{ old('title', $project->title) }}"><br>
        </label>
        <br>
        <label for="">
            URL del proyecto
            <input type="text" name="url" value="{{ old('url', $project->url) }}"><br>
        </label>
        <br>
        <label for="">
            Descripción del proyecto
            <textarea name="description">{{ old('description', $project->title) }}</textarea><br>
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection