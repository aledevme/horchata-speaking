@extends('layout')
@section('title','contactanos')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto py-3">
                <form action="{{ route('contact') }}" method="post" class="bg-white shadow rounded py-3 px-4">
                    @csrf
                    <h1 class="display-4"> {{ __('Contact') }} </h1>
                    @if ( session('Message') )
                        {{ session('Message') }}
                    @endif
                    <hr>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input 
                        id="name" 
                        name="name" 
                        class="form-control shadow-sm border-0 @error('name') is-invalid @enderror" 
                        type="text" placeholder="Nombre ..." 
                        value="{{ old('name') }}">
        
                        @error('name')
                            <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electronico</label>
                        <input 
                        id="email"
                        name="email" 
                        type="text" 
                        placeholder="email ..." 
                        class="form-control shadow-sm border-0  @error('name') is-invalid @enderror" 
                        value="{{ old('email') }}">
        
                        @error('email')
                            <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input 
                        id="subject"
                        name="subject" 
                        type="text" 
                        placeholder="asunto" 
                        class="form-control shadow-sm border-0 @error('name') is-invalid @enderror" 
                        value="{{ old('subject') }}">
        
                        @error('subject')
                            <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Contenido</label>
                        <textarea 
                        id="content"
                        name="content" 
                        class="form-control shadow-sm border-0 @error('name') is-invalid @enderror" 
                        cols="30" 
                        rows="10">{{ old('content') }}</textarea> 
        
                        @error('content')
                            <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>
        
                    <button class="btn btn-primary btn-lg btn-block"> @lang('Send') </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
@endsection
