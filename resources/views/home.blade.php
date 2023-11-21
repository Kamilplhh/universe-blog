@extends('layouts.master')
@vite('resources/css/home.css')

@section('content')
<div class="home">
    <div class="homeContent">
        <h1>HOME</h1>
        @php($i = 0)
        @foreach($objects as $object)

        @if($i <= 2) 
        <!-- Big block -->
            <div class="row">
                @if($i == 0)
                <div class="col-xl-7 col-lg-12">
                    <div class="photo onePhoto"></div>
                    <div class="text">
                        <p>MILKY WAY, OBSERVING</p>
                        Find the center of the Milky Way: This Week in Astronomy with Dave Eicher
                    </div>
                </div>
                @endif
                @if($i == 1 || $i == 2)
                <div class="col-xl-5 col-lg-12">
                    <div class="photo"></div>
                    <div class="text">
                        <p>EXOTIC OBJECTS, MILKY WAY</p>
                        Rising star in astronomy: Katie Bouman
                    </div>
                    <div class="photo"></div>
                    <div class="text">
                        <p>EXOTIC OBJECTS, MILKY WAY</p>
                        Rising star in astronomy: Katie Bouman
                    </div>
                </div>
                @endif
            </div>
        @endif

            @if($i >= 3 && $i <= 6)
                <!-- Carousel block -->
                <div class="carousel">
                    <div class="row">
                        <div class="col-lg-5 offset-lg-1 col-md-12">
                            <div class="photo"></div>
                            <div class="text">
                                <p>MILKY WAY, OBSERVING</p>
                                Find the center of the Milky Way: This Week in Astronomy with Dave Eicher
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="photo"></div>
                            <div class="text">
                                <p>EXOTIC OBJECTS, MILKY WAY</p>
                                Rising star in astronomy: Katie Bouman
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- News block -->
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="photo"></div>
                        <div class="text">
                            <p>MILKY WAY, OBSERVING</p>
                            Find the center of the Milky Way: This Week in Astronomy with Dave Eicher
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-12">
                        <div class="photo"></div>
                        <div class="text">
                            <p>EXOTIC OBJECTS, MILKY WAY</p>
                            Rising star in astronomy: Katie Bouman
                        </div>
                    </div>
                </div>
            @endif

            @php($i++)
            @endforeach
            <div class="astronauts">
                <h2>People in space now</h2>
                <ul>
                    <li>
                        test
                    </li>
                    <li>
                        test
                    </li>
                    <li>
                        test
                    </li>
                </ul>
            </div>
    </div>
</div>
@stop