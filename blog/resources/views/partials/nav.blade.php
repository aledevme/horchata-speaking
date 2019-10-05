<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" 
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills ">
                <li class="nav-item"> 
                    <a href="{{ route('home') }}" class="nav-link {{ setActive('home') }}"> @lang('Home') </a> 
                </li>
                <li class="nav-item"> 
                    <a href="{{ route('about') }}" class="nav-link {{ setActive('about') }} "> @lang('About') </a> 
                </li>
                <li class="nav-item"> 
                    <a href="{{ route('projects.index') }}" class="nav-link {{ setActive('projects.*') }}"> @lang('Projects')  </a> 
                </li>
                <li class="nav-item"> 
                    <a href="{{ route('contact') }}" class="nav-link {{ setActive('contact') }}">@lang('Contact') </a> 
                </li>
                @guest
                <li class="nav-item"> 
                    <a href="{{ route('login') }}"  class="nav-link {{ setActive('login') }}">Login</a> 
                </li>    
                @else
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Cerrar sesión</a>
                    </li>
                @endguest 
            </ul>
        <div>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
