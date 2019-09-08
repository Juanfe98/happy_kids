@extends('layouts.header')
@section('title','Happy Kids Inicio')
@section('content')


{{-- Slider section Begin --}}
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
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
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
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
                        <p>Acompañamiento directo a nuestros niños para realizar positivamente las labores académicas
                            que se presentan a diario. </p>
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
                        <p>Clases de repaso para primaria, secundaria y clases de preparación de exámanes para todas las
                            asignaturas.
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
                        <p> Es un programa recreo-deportivo con actividades increíblemente divertidas para niños que
                            desean disfrutar al máximo sus vacaciones</p>
                    </div>
                </div>
            </div>
</section>
{{-- Slider Section End --}}


<section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>La felicidad de tu hijo siempre será lo mas importante para nosotros</h2>
            </div>
            {{-- <div class="col-md-3 d-flex align-items-center">
                <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Take a Course</a></p>
            </div> --}}

        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
                <div class="text px-5 ftco-animate">
          <h2 class="mb-4">Bienvenidos a Happy Kids</h2>
                    <p>El colegio es una fase muy importante para los niños, es allí donde todos los días adquieren conocimiento, desarrollan diferentes habilidades y al mismo tiempo se relacionan con todos sus compañeros. </p>
                    <p>Nuestro objetivo es hacer acompañamiento a los niños mientras viven esta hermosa etapa, ayudandolos y asegurandonos que el conocimiento permanezca en ellos y que no falte en ningun momento la felicidad en ellos y que en todo momento esten aprendiendo cosas nuevas. </p>



<!--							<p><a href="#" class="btn btn-secondary px-4 py-3">Read More</a></p>-->
                </div>
            </div>
            <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
      <h2 class="mb-4">Lo que buscamos</h2>
                <p>Crear un espacio donde nuestros niños puedan compartir y divertirse con sus compañeros mientras hacen sus tareas, aprenden y refuerzan los temas vistos en el colegio.
                Fomentar el compañerismo y el trabajo en equipo entre ellos, fortaleciendo sus capacidades para socializar y compartir con sus compañeros.
                </p>

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                            <div class="text">
                                <h3>Seguridad</h3>
                                <p>Los niños siempre estan acompañados por los docentes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                            <div class="text">
                                <h3>Sesiones de lectura</h3>
                                <p>Es importante desde pequeños inculcarles a nuestros niños el hábito de la lectura.</p>
                            </div>
                        </div>
                    </div>
<!--
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                            <div class="text">
                                <h3>Certified Teachers</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                            </div>
                        </div>
                    </div>
-->
<!--
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                            <div class="text">
                                <h3>Sufficient Classrooms</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                            </div>
                        </div>
                    </div>
-->
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                            <div class="text">
                                <h3>Juegos Didacticos</h3>
                                <p>Un gran estímulo para el aprendizaje, mejoran la capacidad de atención y concentración.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                            <div class="text">
                                <h3>Tardes Lúdicas</h3>
                                <p>No todo tienen que ser tareas, las tardes ludicas brindan mucha felicidad a nuestros niños.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
