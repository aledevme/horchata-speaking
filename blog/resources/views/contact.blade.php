@extends('layout')
@section('title','contactanos')
@section('content')
    <h1>Contact</h1>
    <form action="{{ route('contact') }}" method="post">
        @csrf
        <input name="nombre" type="text" placeholder="Nombre ..."> <br>
        <input name="email" type="text" placeholder="email ..."> <br>
        <input name="subject" type="text" placeholder="asunto" ...> <br>
        <textarea name="content" cols="30" rows="10"></textarea>
        <button>Enviar</button>
    </form>
@endsection