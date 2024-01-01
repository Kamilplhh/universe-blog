@extends('layouts.master')
@vite('resources/css/home.css')
@vite('resources/css/auth.css')

@section('content')
<div class="home">
    <div class="loginContent">
        <h1>Login</h1>
        <div class="login">
            <form method="POST">
                @csrf
                <div class="row">
                    <input type="text" class="col-md-6 col-sm-12 offset-md-3 mt-1 mb-4" placeholder="Login" name="login" required></input>
                    <input type="password" class="col-md-6 col-sm-12 offset-md-3 mt-1 mb-4" placeholder="Password" name="password" required></input>
                </div>
            </form>
        </div>
    </div>
</div>
@stop