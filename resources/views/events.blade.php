@extends('layouts.master')
@vite('resources/css/home.css')

@section('content')
<div class="home">
    <div class="homeContent">
        <h1>Events</h1>
        <div class="row mt-2">
        @foreach($objects as $object)
            <img class="photo col-lg-4 col-md-7 offset-md-1 mt-5" src="{{url('pictures/'. $object->photo)}}">
            <div class="text col-lg-5 col-md-4 mt-5">
                <p>{{($object->title)}}</p>
                {{ (Str::limit($object->mainText, 50)) . "..." }}
            </div>
        @endforeach
        </div>

    </div>
</div>
@stop