@extends('layout')
@section('title',$project->title)
@section('content')
<div class="container">
    <div class="bg-white p-5 shadow rounded">
            <h1 class="display-5"> {{ $project->title }} </h1>
            <p class="text-secondary"> {{ $project->description }} </p>
            <p class="text-secondary text-black-50"> Creado {{ $project->created_at->diffForHumans() }} </p>
            <div class="btn-group">
                @auth
                <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('projects.destroy',$project) }}" method="post">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm"> Eliminar </button>
                </form>
                @endauth
            </div>
            <a href="{{ route('projects.index') }}" class="btn btn-primary btn-sm">Regresar</a>
    </div>
    
</div>
@endsection
