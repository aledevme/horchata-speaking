@extends('layout')
@section('title','Portafolio')
@section('content')
    <h1>Portofolio</h1>
    <ul>
        @isset($portafolio)
            @forelse($portafolio as $itemPortfolio)
                <li> {{ $itemPortfolio['title'] }} <small>{{ $loop->first ? 'es el primero' : ''}}</small> </li>
            @empty
                <li> No hay información de proyectos </li>
            @endforelse
        @else
            <li>Fallo de información</li>
        @endisset
    </ul>
@endsection