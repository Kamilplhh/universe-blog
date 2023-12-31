@extends('layouts.master')
@vite('resources/css/home.css')

@section('content')
<div class="home">
    <div class="homeContent">
        <h1>HOME</h1>
        @php($i = 0)
        @foreach($objects as $object)

        @if($i <= 2) <!-- Big block -->
            <div class="row">
                @if($i == 0)
                <div class="col-xl-7 col-lg-12">
                    <img class="photo onePhoto" src="{{url('pictures/'. $object->photo)}}">
                    <div class="text">
                        <p>{{($object->title)}}</p>
                        {{ (Str::limit($object->mainText, 50)) . "..." }}
                    </div>
                </div>
                @endif
                @if($i == 1 || $i == 2)
                <div class="col-xl-5 col-lg-12">
                    <img class="photo" src="{{url('pictures/'. $object->photo)}}">
                    <div class="text">
                        <p>{{($object->title)}}</p>
                        {{ (Str::limit($object->mainText, 50)) . "..." }}
                    </div>
                    <img class="photo" src="{{url('pictures/'. $object->photo)}}">
                    <div class="text">
                        <p>{{($object->title)}}</p>
                        {{ (Str::limit($object->mainText, 50)) . "..." }}
                    </div>
                </div>
                @endif
            </div>
            @endif

            @if($i >= 3 && $i <= 6) <!-- Carousel block -->
                <div class="carousel">
                    <div class="row">
                        @if($i%2!==0)
                        <div class="col-lg-5 offset-lg-1 col-md-12">
                            <img class="photo" src="{{url('pictures/'. $object->photo)}}">
                            <div class="text">
                                <p>{{($object->title)}}</p>
                                {{ (Str::limit($object->mainText, 50)) . "..." }}
                            </div>
                        </div>
                        @else
                        <div class="col-lg-6 col-md-12">
                            <img class="photo" src="{{url('pictures/'. $object->photo)}}">
                            <div class="text">
                                <p>{{($object->title)}}</p>
                                {{ (Str::limit($object->mainText, 50)) . "..." }}
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @else
                <!-- News block -->
                <div class="row">
                    @if($i%2!==0)
                    <div class="col-lg-5 col-md-12">
                        <img class="photo" src="{{url('pictures/'. $object->photo)}}">
                        <div class="text">
                            <p>{{($object->title)}}</p>
                            {{ (Str::limit($object->mainText, 50)) . "..." }}
                        </div>
                    </div>
                    @else
                    <div class="col-lg-5 offset-lg-1 col-md-12">
                        <img class="photo" src="{{url('pictures/'. $object->photo)}}">
                        <div class="text">
                            <p>{{($object->title)}}</p>
                            {{ (Str::limit($object->mainText, 50)) . "..." }}
                        </div>
                    </div>
                    @endif
                </div>
                @endif

                @php($i++)
                @endforeach

                <!-- Astronauts block -->
                <div class="astronauts">
                    <h2>People in space now</h2>
                    First 9 <a href="http://open-notify.org/Open-Notify-API/People-In-Space/" target="_blank">(source)</a>
                    @if(isset($pets))
                    {{ message }}
                    @else
                    <div class="row mt-3">
                        @foreach($peoples as $people)
                        <div class="col-4 py-2">
                            <a href="{{ 'https://www.google.com/search?q=' . $people['name'] }}" target="_blank">{{ $people['name'] }}</a><br>
                            {{ $people['craft'] }}
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
    </div>
</div>
@stop