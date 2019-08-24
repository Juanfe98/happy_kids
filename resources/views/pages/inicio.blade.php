@extends('layouts.header')
@section('title','Happy Kids Inicio')
@section('content')


{{-- Slider section Begin --}}
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4">Aprendizaje perfecto<span>Para tu hijo</span></h1>
                    <!--            <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>-->
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4">Traer una sonrisa <span>A tu hijo</span></h1>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- Slider Section Began --}}

@endsection