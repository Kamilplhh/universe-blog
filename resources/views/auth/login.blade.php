@extends('layouts.master')
@vite('resources/css/home.css')
@vite('resources/js/auth.js')

@section('content')
<div class="home">
    <div class="loginContent">
        <a class='on-login button' id="login">Login</a>
        <a class='off-login button' id="register">Register</a>
        <div class="login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                    <input type="email" class="col-md-6 col-sm-12 offset-md-3 mt-1 mb-4" placeholder="Email" name="email" required></input>
                    <input type="password" class="col-md-6 col-sm-12 offset-md-3 mt-1 mb-4" placeholder="Password" name="password" required></input>
                    <div class="col-12 text-center"><button type="submit" class="submit">Login</button></div>
                </div>
            </form>
        </div>
        <div class="register">
            <form method="POST" id="new" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <input type="email" class="col-md-6 col-sm-12 offset-md-3 mt-1 mb-4" placeholder="Email" name="email" required></input>
                    <input type="text" class="col-md-6 col-sm-12 offset-md-3 mt-1 mb-4" placeholder="Nickname" name="nickname" required></input>
                    <input type="password" class="col-md-6 col-sm-12 offset-md-3 mt-1 mb-4" placeholder="Password" name="password" id='password' required></input>
                    <input type="password" class="col-md-6 col-sm-12 offset-md-3 mt-1 mb-4" placeholder="Repeat password" id='passwordRepeat' required></input>
                    <div class="col-12 text-center"><button type="submit" class="submit">Register</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop