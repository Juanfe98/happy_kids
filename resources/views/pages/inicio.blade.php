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

<section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-reading"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Asesoria de Tareas</h3>
                        <p>Acompañamiento directo a nuestros niños para realizar positivamente las labores académicas que se presentan a diario. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-books"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Refuerzos</h3>
                        <p>Clases de repaso para primaria, secundaria y clases de preparación de exámanes para todas las asignaturas.
                            Aquí se reforzará en áreas donde existan falencias.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-kids"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Vacaciones Recreativas</h3>
                        <p> Es un programa recreo-deportivo con actividades increíblemente divertidas para niños que desean disfrutar al máximo sus vacaciones</p>
                    </div>
                </div>
            </div>
</section>
{{-- Slider Section Began --}}

@endsection