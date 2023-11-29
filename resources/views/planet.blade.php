@extends('layouts.master')
@vite('resources/css/home.css')

@section('content')
<div class="home">
    <div class="homeContent">
        <h1>Today's planet</h1>
        <div class="row">
                @if(isset($object['photo']))
                <div class="col-12">
                    {{ $object['photo'] }}
                </div>
                @endif
                <div class="text-center col-12 mt-5">
                    <p>{{ $object['title'] }}</p>
                </div>
                
            </div>
            <div class="col-12 mt-5">
                {{ $object['text'] }}
            </div>
        </div>

    </div>
</div>
@stop