@extends('layouts.master')
@vite('resources/css/home.css')

@section('content')
<div class="home">
    <div class="homeContent">
        <h1>Today's planet</h1>
        <div class="row">
            @foreach($object as $object)
                @if(isset($object['photo']))
                <div class="col-12">
                    <img src="{{url('pictures/'. $object['photo'])}}">
                </div>
                @endif
                <div class="text-center col-12 mt-5">
                    <h2><p>{{ $object['title'] }}</p></h2>
                </div>
                
            </div>
            <div class="col-12 mt-5">
                {{ $object['text'] }}
            </div>
            @endforeach
        </div>
        
    </div>
</div>
@stop