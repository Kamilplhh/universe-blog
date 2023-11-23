@extends('layouts.master')
@vite('resources/css/home.css')

@section('content')
<div class="home">
    <div class="homeContent">
        <h1>News</h1>
        <div class="row mt-1">
        @php($i = 0)
        @foreach($objects as $object)

        @if($i == 0) 
            <div class="text-center col-12">
                <p>{{($object->title)}}</p>
            </div>
            <div class="col-xl-10 offset-xl-1 col-lg-12">
                <div class="photo onePhoto"></div>
            </div>
        
        @else
            <div class="photo col-lg-5 col-md-7 mt-5"></div>
            <div class="text col-lg-5 col-md-5 mt-5">
                <p>{{($object->title)}}</p>
                {{ (Str::limit($object->mainText, 50)) . "..." }}
            </div>
        @endif

        @php($i++)
        @endforeach
        </div>

    </div>
</div>
@stop