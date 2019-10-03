@extends('layout')
@section('title','inicio')
@section('content')
    <h1>Home</h1>
    @auth
    {{ auth()->user()->name  }}    
    @endauth
    
@endsection