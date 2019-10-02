@extends('layout')
@section('title','Portafolio')
@section('content')
    <h1>Editar proyecto</h1>
    @include('partials.validations-errors')
    <form action="{{ route('projects.update',$project) }}" method="POST">
        @method('PATCH')
        @include('projects._form',['btnText'=>'Editar'])
    </form>
@endsection