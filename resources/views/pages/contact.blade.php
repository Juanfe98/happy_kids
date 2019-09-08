@extends('layouts.header')
@section('title','Happy Kids - Contactanos')
{{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"> --}}
{{-- <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script> --}}
@section('content')

<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5 bg-primary">
                <div class="heading-section heading-section-white ftco-animate mb-5">
                    <h2 class="mb-4">Envianos Tu Mensaje</h2>
                    <p>Escribenos tus dudas y te rospenderemos rápidamente.</p>
                </div>
                <form action="#" class="appointment-form ftco-animate">
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Primer Nombre">
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Segundo Nombre">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        {{-- <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Your Course</option>
                                        <option value="">Art Lesson</option>
                                        <option value="">Language Lesson</option>
                                        <option value="">Music Lesson</option>
                                        <option value="">Sports</option>
                                        <option value="">Other Services</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="2" class="form-control"
                                placeholder="Message"></textarea>
                        </div>
                       
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group ml-md-6">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="submit" value="Request A Quote" class="btn btn-secondary py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<br/>
<br/>
<br/>
<section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-map"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Dirección</h3>
                        <p>Condominio Bello Horizonte Nte. Girardot, Cundinamarca </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-books"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Números de contacto</h3>
                        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class=" fa fa-mobile-phone">  Celular: 317 847 5977</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  <span class="fa fa-phone">Telefono: 888 8430</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary ">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-kids"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Contactate con nosotros</h3>
                        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-mail-forward"> Correo: happykids@hotmail.com</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-google"> Página web: www.happykids.com</span>
                        </p>
                    </div>
                </div>
            </div>
</section>

<div class="row justify-content-center mb-5 pb-2">
    <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4"><span>¿Dónde</span> Encontrarnos?</h2>
    </div>
</div>

<section>
    <div class="col-md-12 p-2 p-md-2 order-md-last bg-light">
        <div class="container">
            <div id="map" class="map map-home" style="margin:12px 0 12px 0;height:400px;"></div>
        </div>
        <script>
            var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                osm = L.tileLayer(osmUrl, {
                    maxZoom: 18,
                    attribution: osmAttrib
                });
            var map = L.map('map').setView([4.32294,-74.80430], 14).addLayer(osm);
            L.marker([4.32294,-74.80430])
                .addTo(map)
                .bindPopup('Happy Kids')
                .openPopup();

        </script>
    </div>
</section>

@endsection
