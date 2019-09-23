@extends('layout')
@section('title','contactanos')
@section('content')
    <h1> {{ __('Contact') }} </h1>
    <form action="{{ route('contact') }}" method="post">
        @csrf
        <input name="name" type="text" placeholder="Nombre ..." value="{{ old('name') }}"> <br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input name="email" type="text" placeholder="email ..." value="{{ old('email') }}"> <br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input name="subject" type="text" placeholder="asunto" value="{{ old('subject') }}"> <br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}
        <textarea name="content" cols="30" rows="10">{{ old('content') }}</textarea> <br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}
        <button> @lang('Send') </button>

    </form>
@endsection
