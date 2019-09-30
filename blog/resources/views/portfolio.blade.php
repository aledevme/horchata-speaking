@extends('layout')
@section('title','Portafolio')
@section('content')
    <h1>Portofolio</h1>
    <ul>
        
        @forelse($projects as $itemProject)
            <li> <a href="{{ route('portfolio.show',$itemProject) }}">{{ $itemProject->title }}</a> </li>    
        @empty
            <li> No hay información de proyectos </li>
        @endforelse
        {{ $projects->links() }}
    </ul>
@endsection