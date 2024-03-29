@extends('layouts.header')

@section('title','Happy Kids Servicios')


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/kidsplaying.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Vacaciones Recreativas</h1>
                <p class="breadcrumbs"><span class="mr-2">Los niños esperan con ansiedad salir a vacaciones</span></p>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2> Actividades </h2>
                {{-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country</p> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 vacations d-lg-flex ftco-animate">
                <div class="img" style="background-image: url(images/course-1.jpg);"></div>
                <div class="text bg-light p-4">
                    <h3><a href="#">Arts Lesson</a></h3>
                    <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="col-md-12 vacations d-lg-flex ftco-animate">
                <div class="img" style="background-image: url(images/course-2.jpg);"></div>
                <div class="text bg-light p-4">
                    <h3><a href="#">Language Lesson</a></h3>
                    <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            {{-- <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="img" style="background-image: url(images/course-3.jpg);"></div>
                <div class="text bg-light p-4">
                    <h3><a href="#">Music Lesson</a></h3>
                    <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="img" style="background-image: url(images/course-4.jpg);"></div>
                <div class="text bg-light p-4">
                    <h3><a href="#">Sports Lesson</a></h3>
                    <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div> --}}
        </div>
    </div>
</section>

@endsection
