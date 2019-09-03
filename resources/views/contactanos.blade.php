@extends('layouts.default')

@section('content')
    <div class="contactanos">
        <div class="container">
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="title text-white">Contacto</p>
                </div>
            </div>
            <div class="row mt-1 mt-md-5">
                <div class="col-12 col-md-4 offset-md-1">
                   <p>
                        Contáctanos por nuestro formulario o directamente por teléfono, correo electrónico o por alguna de nuestras redes
                        sociales para más información.
                    </p>
                    <p class="object-bold d-none d-md-block">
                        +52 (998) 154 3834 <br>
                        hola@enterwork.mx
                    </p>
                    <p class="d-none d-md-block">
                        <a href="https://www.facebook.com/EnterWorkMX" target="_blank"><img class=" ml-2  footer__social"
                                src="/img/IG_Blanco.svg" alt=""></a>
                        <a href="https://www.instagram.com/enter_work/" target="_blank"><img class=" ml-2 footer__social"
                                src="/img/FB_Blanco.svg" alt=""></a>
                    </p>
                </div>
                <div class="col-12 col-md-7">
                    <form id="contactanos" autocomplete="off">
                        <div class="mat-input mt-n3">
                            <div class="mat-input-outer">
                                <input type="text" name="nombre"  autocomplete="off" />
                                <label class="">Nombre*</label>
                                <div class="border"></div>
                            </div>
                        </div>
                        <div class="mat-input">
                            <div class="mat-input-outer mt-4">
                                <input type="text" name="email" autocomplete="off" />
                                <label class="">Correo electrónico*</label>
                                <div class="border"></div>
                            </div>
                        </div>
                        <div class="mat-input">
                            <div class="mat-input-outer mt-4">
                                <input type="text" name="telefono" autocomplete="off" />
                                <label class="">Teléfono</label>
                                <div class="border"></div>
                            </div>
                        </div>
                        <div class="mat-input">
                            <div class="mat-input-outer mt-4">
                                <input type="text" name="empresa" autocomplete="off" />
                                <label class="">Empresa</label>
                                <div class="border"></div>
                            </div>
                        </div>
                        <div class="mat-input">
                            <div class="mat-input-outer mt-4">
                                <textarea name="mensaje"  cols="30" rows="10"></textarea>
                                <label class="">Mensaje*</label>
                                <div class="border"></div>
                            </div>
                        </div>
                        <div class="mat-input mt-5">
                            <p>
                                Estoy interesado/a en:*
                            </p>
                            <div class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                                <ul>
                                    <li><input id="cb1" name="interesado[]" value="Contratar Desk Service" type="checkbox"><label for="cb1">Contratar Desk Service
                                        </label></li>
                                    <li><input id="cb2" name="interesado[]" value="Rentar un Meeting Room" type="checkbox"><label for="cb2">Rentar un Meeting Room
                                        </label></li>
                                    <li><input id="cb3" name="interesado[]" value="Contratar un espacio compartido" type="checkbox"><label for="cb3">Contratar un espacio compartido
                                        </label></li>
                                    <li><input id="cb4" name="interesado[]" value="Contratar una oficina privada" type="checkbox"><label for="cb4">Contratar una oficina privada
                                        </label></li>
                                    <li><input id="cb5" name="interesado[]" value="Organizar un evento" type="checkbox"><label for="cb5">Organizar un evento
                                        </label></li>
                                    <li><input id="cb6" name="interesado[]" value="Otro" type="checkbox"><label for="cb6">Otro
                                        </label></li>
                                    <ul>
                            </div>  
                            
                        </div>
                       <div class="row">
                           <div class="col-12 text-center">
                               <div class="" id="spinner-contacto" style="display: none">
                                    <div class="col-12 text-center mt-1 pb-5">
                                        <i class="fas fa-spinner fa-spin text-muted"></i>
                                    </div>
                                </div>
                           </div>
                            <div class="col-12 col-md-4 offset-md-3">
                            * Campos obligatorios
                            </div>
                            <div class="col-12 col-md-5 mt-3 mt-md-0 text-center text-md-left">
                                <button type="button" onclick="sendContact()" class="btn btn-warning btn-sectionCircle col-9 col-md-10 col-lg-6">Enviar @include('arrow')</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="row d-block d-md-none mt-3">
                <div class="col-12 text-center object-bold">
                    <p>
                        +52 (998) 154 3834 <br>
                        hola@enterwork.mx <br>
                        <a href="https://www.facebook.com/EnterWorkMX" target="_blank"><img class=" ml-2  footer__social"
                                src="/img/IG_Blanco.svg" alt=""></a>
                        <a href="https://www.instagram.com/enter_work/" target="_blank"><img class=" ml-2 footer__social"
                                src="/img/FB_Blanco.svg" alt=""></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection