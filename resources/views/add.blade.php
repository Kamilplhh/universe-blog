@extends('layouts.master')
@vite('resources/css/home.css')
@vite('resources/js/add.js')

@section('content')
<div class="home">
    <div class="homeContent">
        <h1>Add News</h1>
        <div class="mt-1 text-center">
            <label for="format-select">Format:</label><br>
            <div class="dropdown dropdown-dark">
                <select name="styles" id="format-select" class="dropdown-select">
                    <option value="News">News</option>
                    <option value="Events">Events</option>
                    <option value="Planet">Planet</option>
                </select>
            </div><br>
            <label for="style-select">Choose style:</label><br>
            <div class="dropdown dropdown-dark mb-2">
                <select name="styles" id="style-select" class="dropdown-select">
                    <option value="1">Style #1</option>
                    <option value="2">Style #2</option>
                    <option value="3">Style #3</option>
                </select>
            </div>
        </div>
        <form enctype="multipart/form-data" id="formPlanet" method="POST" action="{{ route('addNews') }}">
            @csrf
            <div id="addPanel" class="row">
            </div>
        </form>
    </div>
</div>
@stop