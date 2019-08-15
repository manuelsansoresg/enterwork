@extends('layouts.default')

@section('content')
    <div id="app"></div>
    <div class="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-md-flex justify-content-between align-items-center hero">
                    <div class="col-12 col-md-6 mt-4 mt-md-0">
                        <img src="/img/construccion/construcccion.svg" alt="">
                        <ul class="ul-header">
                            <li>_Coworking Space</li>
                            <li>_Meeting Rooms</li>
                            <li>_Private Offices</li>
                            <li>_Coffe Bar</li>
                            <li>_Roof Garden</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 offset-md-2 mt-4 mt-md-0">
                        <h2 class="text-white title">Contacto</h2>
                        <form id="contacto" autocomplete="off">
                            <div class="mt-n4">
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" name="nombre" type="text" id="input-4" />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                    <span class="input__label-content input__label-content--hoshi">Nombre*</span>
                                </label>
                            </span>
                            </div>
                            <div class="mt-n4">
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" name="email" type="text" id="input-4" />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                    <span class="input__label-content input__label-content--hoshi">Correo electrónico*</span>
                                </label>
                            </span>
                            </div>
                            <div class="mt-n4">
                             <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" name="telefono" type="text" id="input-4" />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                    <span class="input__label-content input__label-content--hoshi">Teléfono*</span>
                                </label>
                            </span>
                            </div>
                            <div class="mt-n4">
                             <span class="input input--hoshi">
                                 <textarea class="input__field input__field--hoshi" name="mensaje" id="" cols="30" rows="5"></textarea>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                    <span class="input__label-content input__label-content--hoshi">Mensaje*</span>
                                </label>
                            </span>
                            </div>
                            <div class="" id="spinner-contacto" style="display: none">
                                <div class="col-12 text-center mt-5">
                                    <i class="fas fa-spinner fa-spin text-muted"></i>
                                </div>
                            </div>
                            <div class="text-right">
                                <a href="#" onclick="contacto()"><img class="footer__btn" src="/img/construccion/Enviar.svg" alt=""></a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="footer mt-5 mt-md-1">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-5 col-md-2">
                            <img class="" src="/img/construccion/Enter_2019.svg">
                        </div>
                        <div class="col-auto">
                            <span class="text-white footer__text">Siguenos</span>
                            <a href="https://www.facebook.com/EnterWorkMX" target="_blank"><img class="footer__social ml-3" src="/img/construccion/FB_Blanco.svg" alt=""></a>
                            <a href="https://www.instagram.com/enter_work/" target="_blank">   <img class="footer__social ml-3" src="/img/construccion/IG_Blanco.svg" alt=""></a>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



@endsection
