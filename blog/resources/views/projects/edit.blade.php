@extends('layout')
@section('title','Portafolio')
@section('content')
    <div class="container">
        <h1>Editar proyecto</h1>
        @include('partials.validations-errors')
        <form action="{{ route('projects.update',$project) }}" method="POST">
            @method('PATCH')
            @include('projects._form',['btnText'=>'Editar'])
        </form>
    </div>
@endsection