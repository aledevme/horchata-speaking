@extends('layout')
@section('title','Portafolio')
@section('content')
    <div class="container">
            <h1 class="display-4">Portofolio</h1>
            @auth
                <a href=" {{ route('projects.create') }} " class="btn btn-primary btn-sm py-1">crear proyecto</a>    
            @endauth
            <p class="lead text-secondary py-3">
                    Proyectos realizados
            </p>
            <ul class="list-group">
                @forelse($projects as $itemProject)
                <li class="list-group-item border-0 mb-3 shadow-sm"> 
                        <a href="{{ route('projects.show', $itemProject) }}" class="d-flex text-secondary  justify-content-between align-items-center">
                        <span class="font-weight-bold">{{ $itemProject->title }} </span>
                        <span class="text-black-50">{{ $itemProject->created_at->diffForHumans() }}</span>
                    </a> 
                </li>
                @empty
                <li class="list-group-item border-0 mb-3 shadow-sm"> 
                        No hay proyectos que mostrar
                    </li>
                @endforelse
                {{ $projects->links() }}
            </ul>
    </div>
@endsection