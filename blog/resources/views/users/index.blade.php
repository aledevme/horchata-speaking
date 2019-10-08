
@extends('layout')
@section('title','Usuarios')
    
@section('content')
<div class="container">
        <div class="col-12 col-sm-10 mx-auto py-4">
            <div class="shadow rounded bg-white py-5 px-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($usuarios as $user)
                                <tr>
                                    <th>{{ $user->name }}</th>
                                    <th>{{ $user->email }}</th>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
@endsection