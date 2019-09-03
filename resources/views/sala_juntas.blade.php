@extends('layouts.default')

@section('content')
<div class="sala-juntas">
    <div class="container">
        <div class="row">
            <div class="col-12 sala-juntas__box">
                <div class="sala-juntas__box__content">
                    <input type="hidden" id="salaSection1Title" value="Great place, <span class='d-block d-md-inline'></span> great people, <span class='d-block d-md-inline'></span> great meeting.">
                    <p class=" text-center mt-2 mt-md-5 ">
                    <span class="title salaSection1Title"></span>
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 text-center">
                            <p>
                                Nuestas salas de juntas son completamente adaptables a tus necesidades, desde el número de personas hasta el equipo electrónico y materiales que necesites, coffee brake para juntas largas o catering para desayunos. Nuestro staff te ayudará en todo lo que necesites para que solo tengas que preocuparte de tu presentación.
                            </p>
                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="row mt-5 justify-content-center">
                                <div class="col-6 col-md-3 text-center">
                                    <img class="sala-juntas__icons" src="/img/sala_juntas/Paneles.svg" alt="">
                                    <p class="sala-juntas__description mt-3" data-aos="fade-up" data-aos-duration="1500">Paneles para espacio  flexible</p>
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <img class="sala-juntas__icons" src="/img/sala_juntas/Pantallas.svg" alt="">
                                    <p class="sala-juntas__description mt-3" data-aos="fade-up" data-aos-duration="1500">Pantallas interactivas </p>
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <img class="sala-juntas__icons" src="/img/sala_juntas/Cafe_1.svg" alt="">
                                    <p class="sala-juntas__description mt-3" data-aos="fade-up" data-aos-duration="1500">Servicio de café y bebidas</p>
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <img class="sala-juntas__icons" src="/img/sala_juntas/wifi.svg" alt="">
                                    <p class="sala-juntas__description mt-3" data-aos="fade-up" data-aos-duration="1500">Internet WiFi y Ethernet dedicado</p>
                                </div>
                                <div class="d-none d-md-block w-100 mt-3"></div>
                                <div class="col-6 col-md-3 text-center">
                                    <img class="sala-juntas__icons" src="/img/sala_juntas/Recepcion.svg" alt="">
                                    <p class="sala-juntas__description mt-3" data-aos="fade-up" data-aos-duration="1500">Recepción y staff de apoyo </p>
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <img class="sala-juntas__icons" src="/img/sala_juntas/Limpieza_1.svg" alt="">
                                    <p class="sala-juntas__description mt-3" data-aos="fade-up" data-aos-duration="1500">Servicio de Limpieza </p>
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <img class="sala-juntas__icons" src="/img/sala_juntas/Estacionamiento.svg" alt="">
                                    <p class="sala-juntas__description mt-3" data-aos="fade-up" data-aos-duration="1500">Estacionamiento</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- seccion2--}}
        <div class="sala-juntas__section2">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="/img/sala_juntas/imagen_01.png" alt="">
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="/img/sala_juntas/imagen_02.png" alt="">
                </div>
            </div>
        </div>
        {{-- /seccion2--}}
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row mt-5">
                    <div class="col-md-6 ">
                        <p data-aos="fade-left" data-aos-duration="1500">
                            Reserva desde una hora alguno de nuestros meeting rooms llenando el formulario. También puedes contactarnos directamente por teléfono o por correo electrónico.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 object-bold" data-aos="fade-right" data-aos-duration="1500">
                                <p class="my-0">+52 (998) 154 3834 </p>
                                <p>hola@enterwork.mx  </p>
                            </div>
                            <div class="col-md-6 text-center text-md-right">
                                <a href="" class="col-10 col-md-12 col-lg-8 btn btn-pink2 btn-sectionCircle">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
