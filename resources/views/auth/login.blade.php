@extends('auth.layout.index')

@section('title')
    {{ __('language.login') }}
@endsection

@section('content')
    <form action="{{ route('post-login') }}" method="post">
        @csrf
        <div class="">
            <div class="login-margin-botton center-word">
                <h3 class="margin-top">{{ __('language.login') }}</h3>
            </div>
            <div class="username">
                <span class="icon"><i class='fas fa-user'></i></span>
                <input type="text" id="username" name="username" placeholder="{{ __('language.Username') }}">
            </div>
            <div class="password">
                <span class="icon"><i class="fas fa-lock"></i></span>
                <input type="password" id="username" name="password" placeholder="{{ __('language.Password') }}">
            </div>
            <div class="center-word margin-top">
                <input type="submit" value="{{ __("language.login") }}" class="btn btn-outline-success">
            </div>
            <div class="center-word margin-top">
                <p>{{ __('language.Or_Login') }}</p>
                <i class="fab fa-facebook icon-size"></i>
                <i class="fab fa-google-plus icon-size"></i>
            </div>
        </div>
        </div>
    </form>
@endsection

@section('img')
    <img src="{{ asset('image/login.jpg') }}" alt="">
@endsection