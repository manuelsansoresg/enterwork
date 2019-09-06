@extends('layouts.default')

@section('content')
<div class="landing">

    {{--seccion1--}}
    <div class="container">
        <div class="row">
            <div class="col-12 landing__hero__box">
                <div class="landing__hero__box-content">
                    <p class="description">Somos espacios de trabajo que miran hacia el futuro y a la vez hacia el conjunto diverso de la vida. Porque no hay trabajo sin todo lo demás, ni todo lo demás sin un gran trabajo.</p>
                </div>
            </div>
        </div>
    </div>
    {{--seccion1--}}
    {{--seccion2--}}

    <div class="landing__section2">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12 col-md-10">
                    <input type="hidden" id="landing-title1" value="<span>Enter_ <span class='d-block d-md-inline'></span> your new office.</span>">
                    <div class="w-100 d-block d-md-none mt-5"></div>
                    <p class="mt-5">
                        <span class="title mt-5 mt-md-0 landing-title1" ></span>
                    </p>
                    <div class="w-100 d-block d-md-none mt-2"></div>
                    <p class="description mt-4">
                        Enter_work te ofrece mucho más que un escritorio o una oficina, nuestros espacios de trabajo son flexibles y modernos, con amenidades y servicios especialmente diseñados para ayudarte a concentrarte, colaborar, aprender, socializar y prosperar.
                    </p>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-4 col-md-2 text-center">
                                @include('lading_svg.Espacios_Coworking')
                                <p class="mt-4" data-aos="fade-up" data-aos-duration="1500">Espacios Coworking</p>
                            </div>
                            <div class="col-4 col-md-2 text-center">
                                @include('lading_svg.Oficinas_Privadas')
                                <p class="mt-4" data-aos="fade-up" data-aos-duration="1500">Oficinas <span class="d-md-block"></span> Privadas</p>
                            </div>

                            <div class="col-4 col-md-2 text-center">
                                @include('lading_svg.Salas_juntas')
                                <p class="mt-4" data-aos="fade-up" data-aos-duration="1500">Salas de <span class="d-md-block"></span>Juntas</p>
                            </div>
                            <div class="d-block d-md-none w-100 mt-4">

                            </div>
                            <div class="col-4 col-md-2 text-center">
                                @include('lading_svg.Coffe_Bar')
                                <p class="mt-4" data-aos="fade-up" data-aos-duration="1500"> Coffee<span class="d-md-block"></span> Bar </p>
                            </div>
                            <div class="col-4 col-md-2 text-center">
                                @include('lading_svg.Roof_Terrance')
                                <p class="mt-4" data-aos="fade-up" data-aos-duration="1500">Roof<span class="d-md-block"></span> Terrace</p>
                            </div>
                            <div class="col-4 col-md-2 text-center">
                                @include('lading_svg.Espacios_virtuales')
                                <p class="mt-4" data-aos="fade-up" data-aos-duration="1500">Oficinas<span class="d-md-block"></span> Virtuales </p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            {{-- columna movil--}}
            <div class="d-block d-md-none row mt-5">
                <div class="col-12  d-flex justify-content-center align-items-center">
                    <div class="landing__section2__circle bg-yellow d-flex justify-content-center align-items-center">
                        <p class="object-bold landing__section3__title"> 360° life <span class="d-block"> at work</p>
                    </div>
                </div>
            </div>
            {{-- columna movil--}}
            <div class="row mt-5">
                <div class="col-12 col-md-8 offset-md-1">
                    <p class="description mt-5">Cuando te conviertes en un miembro de Enter_work, no solo has encontrado un nuevo espacio de trabajo, ¡tu membresía incluye acceso a excelentes comodidades! Estos son solo algunos de los servicios que vienen con todos nuestros planes:
                    </p>
                </div>
            </div>

        </div>
    </div>
    {{--/seccion2--}}

    {{--seccion3--}}
    <div class="landing__section3">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6 align-self-center text-center d-none d-sm-block">
                                <p class="object-bold landing__section3__title"> 360° life <span class="d-md-block"> at work</p>
                            </div>
                            <div class="col-md-5">
                                <ul class="list-inline description">
                                    <li class="list-inline"> @include('arrow') <span class="ml-2"> Roof Terrace </span></li>
                                    <li class="list-inline"> @include('arrow') <span class="ml-2"> Coffee Bar</span> </li>
                                    <li class="list-inline"> @include('arrow') <span class="ml-2"> Eventos de Networking</span> </li>
                                    <li class="list-inline"> @include('arrow') <span class="ml-2">Pet Friendly </span> </li>
                                    <li class="list-inline"> @include('arrow') <span class="ml-2">Salas de juntas interactivas y flexibles </span> </li>
                                    <li class="list-inline"> @include('arrow') <span class="ml-2">Acceso y CCTV 24/7 </span> </li>
                                    <li class="list-inline"> @include('arrow') <span class="ml-2">Staff de apoyo </span> </li>
                                    <li class="list-inline"> @include('arrow') <span class="ml-2">Elevador exclusivo para Enter_work </span> </li>
                                    <li class="list-inline"> @include('arrow') <span class="ml-2"> Estacionamiento amplio</span></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--seccon4--}}
    <div class="landing__section4">
        <div class="container">
            <div class="row mt-5">
                <div class="col-1 align-self-center">
                    <img  class="landing__section4__img preview-slider" src="/img/landing/Flecha_Izq.svg" alt="">
                </div>
                <div class="col-10">
                    <img  id="imgSlider" class="img-fluid" src="img/landing/slider/RECEPCION.jpg" alt="">
                </div>
                <div class="col-1 align-self-center ml-n4 ml-md-n0">
                    <img class="landing__section4__img landing__section4__arrow-right next-slider" src="/img/landing/Flecha_Der.svg" alt="">
                </div>
            </div>
            <div class="row mt-3 pb-4 pb-md-0">
                <div class="col-12 text-center description">
                    <span id="slider-description">Recepción</span>
                </div>
            </div>
        </div>
    </div>
    {{--/seccon4--}}
    {{--seccion5--}}
    @include('section_plans')
    {{--seccion5--}}

    {{--seccion6--}}
    <div class="landing__section6">
        <div id="map"></div>
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-12 col-md-12 landing__section6__box">
                    <div class="container landing__section6__box-black">
                        <div class="row">
                            <div class="col-12 col-md-6 offset-md-1">
                                <input type="hidden" id="landing-title2" value="Enter_ <span class='d-block d-md-inline'></span> Plaza Odara.">
                                <p class="mt-5">
                                    <span class="title text-white landing-title2"></span>
                                </p>
                                <p class="mt-4 description">
                                    Además de nuestras amenidades, nuestra ubicación privilegiada en Plaza Odara te acerca a servicios casi infinitos:
                                </p>
                                <p class="description mt-4">
                                    <img class="landing__section6__arrow " src="/img/landing/Flecha_Movil.svg" alt="">Con amenidades en la plaza como restaurantes, bancos, barbería, estética para mascotas y más.
                                    <br><img class="landing__section6__arrow " src="/img/landing/Flecha_Movil.svg" alt=""> A menos de un kilómetro de Plaza Uptown, Plaza Altabrisa y el Hospital Star Médica.
                                    <br><img class="landing__section6__arrow " src="/img/landing/Flecha_Movil.svg" alt=""> A menos de 5 minutos de periférico

                                </p>

                            </div>
                            <div class="col-12 col-md-3 offset-md-1 align-self-center">
                                <div class="text-center text-md-right">
                                    <img class="img-fluid landing__section6__img" src="/img/landing/01_ODARA.png" alt="">
                                </div>
                                <div class="landing__section6__text-right">
                                    <p>
                                        PLAZA ODARA <br>
                                        Av Yucatán 555, Jardines <br>
                                        de Vista Alegre II, 97135 <br>
                                        Mérida, Yuc.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--/seccion6--}}
    {{-- seccion 7--}}
    @include('section_contact')
    {{-- seccion 7--}}
</div>
@endsection
