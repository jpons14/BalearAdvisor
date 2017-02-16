@extends('frontend.layout')
@section('title', 'carrusel')
@section('body')
    <div id="slideshowIndexFrontend" class="carousel slide" data-ride="carouse2">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#slideshowIndexFrontend" data-slide-to="0" class="active"></li>
            <li data-target="#slideshowIndexFrontend" data-slide-to="1"></li>
            <li data-target="#slideshowIndexFrontend" data-slide-to="2"></li>
            <li data-target="#slideshowIndexFrontend" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/img/restaurants/restaurant1.jpg" alt="Chania">
            </div>

            <div class="item">
                <img src="/img/restaurants/restaurant2.jpg" alt="Chania">
            </div>

            <div class="item">
                <img src="/img/restaurants/restaurant3.jpg" alt="Flower">
            </div>

            <div class="item">
                <img src="/img/restaurants/restaurant4.jpg" alt="Flower">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#slideshowIndexFrontend" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#slideshowIndexFrontend" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection