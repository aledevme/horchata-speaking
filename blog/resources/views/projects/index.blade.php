@extends('layout')
@section('title','Portafolio')
@section('content')
    <h1>Portofolio</h1>
    <a href=" {{ route('project.create') }} ">crear proyecto</a>
    <ul>
        
        @forelse($projects as $itemProject)
            <li> <a href="{{ route('project.show',$itemProject) }}">{{ $itemProject->title }}</a> </li>    
        @empty
            <li> No hay información de proyectos </li>
        @endforelse
        {{ $projects->links() }}
    </ul>
@endsection