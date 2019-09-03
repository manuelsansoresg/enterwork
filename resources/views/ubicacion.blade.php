@extends('layouts.default')

@section('content')
    <div class="ubicacion">
        <div class="container">
            <div class="row justify-content-center mt-5 d-none d-md-block">
                <div class="col-12 col-md-12">
                    <div class="row">
                        <div class="col-md-5">
                            <input type="hidden" id="ubicacionTitle" value="Enter_ location.">
                            <p class="">
                                <span class="title ubicacionTitle"></span>
                            </p>
                            <p class="mt-4">
                                Además  de nuestras  amenidades, nuestra ubicación privilegiada en Plaza Odara te acerca a servicios casi infinitos:
                            </p>
                           <div class="animated fadeInLeft">
                               <ul class="list-inline mt-4" >
                                   <li class="list-inline">@include('arrow') Con amenidades en la plaza como restaurantes, bancos, barbería, estética para mascotas y más.</li>
                                   <li class="list-inline">@include('arrow') A menos de un kilómetro de Plaza Uptown, Plaza Altabrisa y el Hospital Star Médica.</li>
                                   <li class="list-inline">@include('arrow') A menos de 5 minutos de periférico.</li>
                               </ul>
                           </div>
                        </div>
                        <div class="col-md-3 offset-md-3">
                            <div class="text-right">
                                <img class="img-fluid ubicacion__img mt-n0" src="/img/ubicacion/ODARA.png" alt="">
                            </div>
                            <div class="landing__section6__text-right mt-n2 animated fadeInUp">
                                PLAZA ODARA <br>
                                Av Yucatán 555, Jardines <br> de Vista Alegre II, 97135 <br> Mérida, Yuc.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- movil--}}
            <div class="container">
                <div class="row d-block d-md-none mt-5">
                    <div class="col-12">
                        <input type="hidden" id="ubicacionTitleMovil" value="Enter_ location.">
                        <p class="">
                            <span class="title ubicacionTitleMovil"></span>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <img class="img-fluid ubicacion__img mt-n0" src="/img/ubicacion/ODARA.png" alt="">
                        </div>
                        <div class="col-8">
                            <div class="ubicacion__text-right mt-n0 animated fadeInUp">
                                PLAZA ODARA <br>
                                Av Yucatán 555, Jardines <br> de Vista Alegre II, 97135 <br> Mérida, Yuc.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- movil--}}
        </div>
        <div id="map" class="mt-5"></div>
        {{-- movil--}}
       <div class="container d-block d-md-none">
           <div class="row  mt-5">
               <div class="col-12">
                   <p class="">
                       Además  de nuestras  amenidades, nuestra ubicación privilegiada en Plaza Odara te acerca a servicios casi infinitos:
                   </p>
               </div>
               <div class="col-12">
                   <ul class="list-inline mt-4" data-aos="fade-left" data-aos-duration="1500">
                       <li class="list-inline">@include('arrow') Con amenidades en la plaza como restaurantes, bancos, barbería, estética para mascotas y más.</li>
                       <li class="list-inline">@include('arrow') A menos de un kilómetro de Plaza Uptown, Plaza Altabrisa y el Hospital Star Médica.</li>
                       <li class="list-inline">@include('arrow') A menos de 5 minutos de periférico.</li>
                   </ul>
               </div>
           </div>
       </div>
        {{-- movil--}}
        <div class="container">
            <div class="row justify-content-center mt-5 mx-sm-0">
                <div class="col-md-10">
                    <img class="img-fluid" src="/img/ubicacion/Lugar.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        @include('section_contact')
    </div>
@endsection
