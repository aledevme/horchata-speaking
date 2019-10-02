@extends('layout')
@section('title','Portafolio')
@section('content')
    <h1>Crear proyecto</h1>
    @include('partials.validations-errors')
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        @include('projects._form', ['btnText'=>'Guardar'] )
        
    </form>
@endsection