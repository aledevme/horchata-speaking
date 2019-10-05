@extends('layout')
@section('title','Portafolio')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mx-auto py-4 shadow bg-white rounded">
                <h1 class="display-5">Crear proyecto</h1>
                <hr>
                @include('partials.validations-errors')
                <form action="{{ route('projects.store') }}" method="POST">
                    @csrf
                    @include('projects._form', ['btnText'=>'Guardar'] )
                </form>
            </div>
        </div>
    </div>
@endsection