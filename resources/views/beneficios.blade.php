@extends('layouts.default')

@section('content')
<div class="beneficios">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-7">
                <input type="hidden" id="beneficios-title1" value="Enter_ life at work ">
                <span class="title beneficios-title1"></span>
            </div>
            <div class="w-100"></div>
            <div class="col-12 col-md-7">
                <p>
                    Si eres un creativo, trabajas de forma remota, buscas simplificar tu operación, o estás expandiendo o empezando una empresa, en Enter_work podrás encontrar un espacio para concentrarte, trabajar y tener reuniones para tu nueva empresa en instalaciones de primera. Elige tu espacio de trabajo según tu horario, el trabajo que estés haciendo o tu estado de ánimo.
                </p>
            </div>
        </div>
        {{-- seccion2--}}
        <div class="beneficios__section2 d-none d-md-block">
            <div class="row mt-5">
                <div class="col-12 col-md-4 beneficios__section2__box-yellow beneficios__section2__box" onmouseout="document.getElementById('icon_yellow').src='/img/beneficios/Coworking_Amarillo.svg';" onmouseover="document.getElementById('icon_yellow').src='/img/beneficios/Coworking_Negro.svg'">
                    <p class="object-bold beneficios__section2__title mt-5">
                        <img id="icon_yellow" class="beneficios__section2__icons mt-n2" src="/img/beneficios/Coworking_Amarillo.svg"  > Coworking Space</p>
                    <p class="mt-5">
                        Nuestros espacios están equipados con escritorios y sillas ergonómicas y acceso a amenidades de primer nivel, además de la oportunidad de compartir espacio con profesionales de distintas áreas.
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <img class="img-fluid" src="/img/beneficios/office.png" alt="">
                </div>
                <div class="col-12 col-md-4 beneficios__section2__box-green beneficios__section2__box" onmouseout="document.getElementById('icon_green').src='/img/beneficios/Office_verde.svg';" onmouseover="document.getElementById('icon_green').src='/img/beneficios/Office_Negro.svg'">
                    <p class="object-bold beneficios__section2__title mt-5">
                        <img id="icon_green" class="beneficios__section2__icons mt-n2" src="/img/beneficios/Office_verde.svg" >Private Offices </p>
                    <p class="mt-5">
                        Oficinas privadas que se adaptan al tamaño de tu equipo, equipadas con archivos, escritorios y sillas ergonómicas, acceso a las áreas comúnes y todos los servicios incluidos.
                    </p>
                </div>

                <div class="col-12 col-md-4">
                    <img class="img-fluid" src="/img/beneficios/Coffe.png" alt="">
                </div>
                <div class="col-12 col-md-4 beneficios__section2__box-pink beneficios__section2__box" onmouseout="document.getElementById('icon_pink').src='/img/beneficios/Coffe_Rosa.svg';" onmouseover="document.getElementById('icon_pink').src='/img/beneficios/Coffe_Negro.svg'">
                    <p class="object-bold beneficios__section2__title mt-5">
                        <img id="icon_pink" class="beneficios__section2__icons mt-n2" src="/img/beneficios/Coffe_Rosa.svg"  > Coffee Bar & Roof Terrace</p>
                    <p class="mt-5">
                        Porque a veces necesitamos un descanso, te ofrecemos estás dos áreas para tomar un espresso, aire fresco, platicar sobre nuevas ideas o realizar un evento.
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <img class="img-fluid" src="/img/beneficios/Meeting.png" alt="">
                </div>

                <div class="col-12 col-md-4 beneficios__section2__box-blue beneficios__section2__box" onmouseout="document.getElementById('icon_blue').src='/img/beneficios/Virtual_Azul.svg';" onmouseover="document.getElementById('icon_blue').src='/img/beneficios/Virtual_Negro.svg'">
                    <p class="object-bold beneficios__section2__title mt-5">
                        <img id="icon_blue" class="beneficios__section2__icons mt-n2" src="/img/beneficios/Virtual_Azul.svg"  > Virtual Offices</p>
                    <p class="mt-5">
                        Obtén una dirección comercial con manejo de correspondecia, un número telefónico local, servicio de recepción de llamadas y más.
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <img class="img-fluid" src="/img/beneficios/Virtual.png" alt="">
                </div>
                <div class="col-12 col-md-4 beneficios__section2__box-pink2 beneficios__section2__box" onmouseout="document.getElementById('icon_pink2').src='/img/beneficios/Rooms_Cora.svg';" onmouseover="document.getElementById('icon_pink2').src='/img/beneficios/Rooms_Negro.svg'">
                    <p class="object-bold beneficios__section2__title mt-5">
                        <img id="icon_pink2" class="beneficios__section2__icons mt-n2" src="/img/beneficios/Rooms_Cora.svg" >Meeting Rooms
                    </p>
                    <p class="mt-5">
                        Nuestras salas de conferencias son flexibles y adaptables al número de personas, y están equipadas con pantallas interactivas y audio para tener reuniones presenciales y remotas.
                    </p>
                </div>

            </div>
        </div>
        {{-- seccion2--}}
        {{-- seccion2--}}
        <div class="d-block d-md-none">
            <div class="row mt-5">
                <div class="col-12">
                    <img class="img-fluid" src="/img/beneficios/office.png" alt="">
                </div>
                <div class="col-12 col-md-4 beneficios__section2__box-yellow beneficios__section2__box" onmouseout="document.getElementById('icon_yellow').src='/img/beneficios/Coworking_Amarillo.svg';" onmouseover="document.getElementById('icon_yellow').src='/img/beneficios/Coworking_Negro.svg'">
                    <p class="object-bold beneficios__section2__title mt-1">
                        <img id="icon_yellow" class="beneficios__section2__icons mt-n2" src="/img/beneficios/Coworking_Amarillo.svg"  > Coworking Space</p>
                    <p class="mt-2">
                        Nuestros espacios están equipados con escritorios y sillas ergonómicas y acceso a amenidades de primer nivel, además de la oportunidad de compartir espacio con profesionales de distintas áreas.
                    </p>
                </div>
            </div>
        </div>
        {{-- /seccion2--}}
        {{-- seccion3--}}
        <div class="beneficios__section3">
            <div class="row mt-5">
                <div class="col-12 text-center" >
                    <p class="title" data-aos="fade-up" data-aos-duration="1500">Amenidades y <span class="d-block d-md-inline"></span> servicios.</p>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-10 col-md-10">
                    <div class="row justify-content-center">

                        <div class="col-6 col-md-2 text-center">
                            <img class="beneficios__section3__icons" src="/img/beneficios/seccion3/Acceso.svg" alt="">
                            <p class="mt-3 beneficios__section3__description" data-aos="fade-up" data-aos-duration="1500">Acceso y CCTV 24/7</p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img class="beneficios__section3__icons" src="/img/beneficios/seccion3/print_center.svg" alt="">
                            <p class="mt-3 beneficios__section3__description" data-aos="fade-up" data-aos-duration="1500">Print Center</p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img class="beneficios__section3__icons" src="/img/beneficios/seccion3/Wifi.svg" alt="">
                            <p class="mt-3 beneficios__section3__description" data-aos="fade-up" data-aos-duration="1500">Internet WiFi y Ethernet dedicado</p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img class="beneficios__section3__icons" src="/img/beneficios/seccion3/eventos.svg" alt="">
                            <p class="mt-3 beneficios__section3__description" data-aos="fade-up" data-aos-duration="1500">Eventos</p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img class="beneficios__section3__icons" src="/img/beneficios/seccion3/Mobiliario.svg" alt="">
                            <p class="mt-3 beneficios__section3__description" data-aos="fade-up" data-aos-duration="1500">Mobiliario Ergonómico</p>
                        </div>

                        <div class="col-md-12 w-100 pb-4 d-none d-md-block"></div>

                        <div class="col-6 col-md-2 text-center">
                            <img class="beneficios__section3__icons" src="/img/beneficios/seccion3/Elevador.svg" alt="">
                            <p class="mt-3 beneficios__section3__description" data-aos="fade-up" data-aos-duration="1500">Elevador exclusivo para Enter_work</p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img class="beneficios__section3__icons" src="/img/beneficios/seccion3/estacionamientp.svg" alt="">
                            <p class="mt-3 beneficios__section3__description" data-aos="fade-up" data-aos-duration="1500">Estacionamiento </p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img class="beneficios__section3__icons" src="/img/beneficios/seccion3/Recepción.svg" alt="">
                            <p class="mt-3 beneficios__section3__description" data-aos="fade-up" data-aos-duration="1500">Recepción y Staff de Apoyo</p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img class="beneficios__section3__icons" src="/img/beneficios/seccion3/Limpieza.svg" alt="">
                            <p class="mt-3 beneficios__section3__description" data-aos="fade-up" data-aos-duration="1500">Servicio de Limpieza  </p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img class="beneficios__section3__icons" src="/img/beneficios/seccion3/Cafe.svg" alt="">
                            <p class="mt-3 beneficios__section3__description" data-aos="fade-up" data-aos-duration="1500">Café de cortesía</p>
                        </div>

                        <div class="col-md-12 w-100 pb-4 d-none d-md-block"></div>

                        <div class="col-6 col-md-2 text-center">
                            <img class="beneficios__section3__icons" src="/img/beneficios/seccion3/Telefonía.svg" alt="">
                            <p class="mt-3 beneficios__section3__description" data-aos="fade-up" data-aos-duration="1500">Telefonía personalizada</p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img class="beneficios__section3__icons" src="/img/beneficios/seccion3/energia.svg" alt="">
                            <p class="mt-3 beneficios__section3__description" data-aos="fade-up" data-aos-duration="1500">Energía eléctrica  </p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img class="beneficios__section3__icons" src="/img/beneficios/seccion3/paqueteria.svg" alt="">
                            <p class="mt-3 beneficios__section3__description" data-aos="fade-up" data-aos-duration="1500">Paquetería</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- seccion3--}}
        {{-- seccion4--}}
        <div class="beneficios__section4">
            <div class="row mt-5">
                <div class="col-12 col-md-6">
                    <p class="title">Espacios ideales para:</p>
                    <div class="accordion mt-5 mt-md-0" id="accordionEspacios">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between"  id="headingOne" data-aos="fade-up" data-aos-duration="1500">
                              <div>
                                  <h2 class="mb-0">
                                      <button class="btn btn-link object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Freelancers
                                      </button>

                                  </h2>
                              </div>
                                <div>
                                    <button class="btn btn-link object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-plus"></i>
                                    </button>

                                </div>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionEspacios">
                                <div class="card-body">
                                    Trabajar para ti mismo es increíble, pero a veces necesitas la responsabilidad de un espacio de trabajo productivo. O un lugar para conocer a un cliente. O alguien con quien intercambiar ideas o simplemente almorzar.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between" id="headingTwo" data-aos="fade-up" data-aos-duration="1500">
                                <div>
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Nómadas Digitales
                                        </button>
                                    </h2>
                                </div>
                                <div>
                                    <button class="btn btn-link collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionEspacios">
                                <div class="card-body">
                                    Si has elegido este estilo de vida por su flexibilidad, una membresía de Enter_work es igualmente flexible. Puedes elegir un plan de medio tiemp o uno de tiempo completo, lo que sea que se adapte a tus necesidades.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between" id="headingThree" data-aos="fade-up" data-aos-duration="1500">
                                <div>
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Equipos remotos
                                        </button>
                                    </h2>
                                </div>
                                <div>
                                    <button class="btn btn-link collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionEspacios">
                                <div class="card-body">
                                    Los equipos remotos son una forma de vida para muchas empresas y startups modernas. Enter_work es el mejor punto de reunión para un día de colaboración en persona, una gran sesión de trabajo o para planear tu próximo gran proyecto.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between" id="headingFour" data-aos="fade-up" data-aos-duration="1500">
                                <div>
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Creativos
                                        </button>
                                    </h2>
                                </div>
                                <div>
                                    <button class="btn btn-link collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionEspacios">
                                <div class="card-body">
                                    Si eres diseñador, escritor o fotógrafo encontrarás espacios de trabajo inspiradores y flexibles. Además, estar rodeado de personas de diversas industrias genera grandes ideas nuevas y fomenta las colaboraciones y conexiones para todos.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header d-flex justify-content-between" id="headingFive" data-aos="fade-up" data-aos-duration="1500">
                                <div>
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Trabajadores desde casa
                                        </button>
                                    </h2>
                                </div>
                                <div>
                                    <button class="btn btn-link collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionEspacios">
                                <div class="card-body">
                                    Ya sea que tengas una oficina en el hogar o trabajes desde la mesa del comedor, sal de tu rutina y maximiza tu productividad. La flexibilidad de Enter_ te permite trabajar desde un lugar conveniente cuando lo necesites.
                                </div>
                            </div>
                        </div>



                        <div class="card">
                            <div class="card-header d-flex justify-content-between" id="headingSix" data-aos="fade-up" data-aos-duration="1500">
                                <div>
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Corporativos
                                        </button>
                                    </h2>
                                </div>
                                <div>
                                    <button class="btn btn-link collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionEspacios">
                                <div class="card-body">
                                    Si buscas simplificar las operaciones de tu empresa, estás en expansión o ingresando a un nuevo mercado, las instalaciones y servicios de Enter_work te ayudarán  a concentrarte en los temas importantes para el crecimiento de tu empresa.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-5 mt-md-0">
                    <p class="title">Con beneficios como: </p>
                    <div class="accordion mt-5 mt-md-0" id="accordionBeneficios">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between" id="headingSeven" data-aos="fade-up" data-aos-duration="1500">
                                <div>
                                    <h2 class="mb-0">
                                        <button class="btn btn-link object-bold text-dark"  type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                            Productividad
                                        </button>
                                    </h2>
                                </div>
                                <div>
                                    <button class="btn btn-link object-bold text-dark"  type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>

                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionBeneficios">
                                <div class="card-body">
                                    Varias investigaciones demuestran que los espacios de coworking mejoran tu productividad.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between" id="headingEight" data-aos="fade-up" data-aos-duration="1500">
                                <div>
                                    <h2 class="mb-0">
                                        <button class="btn btn-link  collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Trabajo separado de casa
                                        </button>
                                    </h2>
                                </div>
                                <div>
                                    <button class="btn btn-link  collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionBeneficios">
                                <div class="card-body">
                                    Salir de casa es una de las formas más rápidas de equilibrar el trabajo y la vida.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between" id="headingNine" data-aos="fade-up" data-aos-duration="1500">
                                <div>
                                    <h2 class="mb-0">
                                        <button class="btn btn-link  collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            Ambiente social
                                        </button>
                                    </h2>
                                </div>
                                <div>
                                    <button class="btn btn-link  collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionBeneficios">
                                <div class="card-body">
                                    Trabajar solo puede ser solitario a veces. Ya sea que trabajes por tu cuenta o con otras personas, trabajar desde un entorno con otras personas creativas puede mejorar tu día.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between" id="headingTen" data-aos="fade-up" data-aos-duration="1500">
                                <div>
                                    <h2 class="mb-0">
                                        <button class="btn btn-link  collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            Networking
                                        </button>
                                    </h2>
                                </div>
                                <div>
                                    <button class="btn btn-link  collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionBeneficios">
                                <div class="card-body">
                                    Amplía tu red amigos, clientes, proveedores o incluso socios comerciales, rodéate de personas que hacen un trabajo significativo y que te inspiren a hacer lo mismo.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between" id="headingEleven" data-aos="fade-up" data-aos-duration="1500">
                                <div>
                                    <h2 class="mb-0">
                                        <button class="btn btn-link  collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            Espacios diseñados para trabajar
                                        </button>
                                    </h2>
                                </div>
                                <div>
                                    <button class="btn btn-link  collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionBeneficios">
                                <div class="card-body">
                                    Nuestros espacios están diseñados para garantizar tu productividad. Nunca tendrás que luchar por un escritorio, un café o una conexión internet decente, todo está cubierto. Solo tienes que entrar y empezar a trabajar.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between" id="headingThirteen" data-aos="fade-up" data-aos-duration="1500">
                                <div>
                                    <h2 class="mb-0">
                                        <button class="btn btn-link  collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                            Sal de tu rutina
                                        </button>
                                    </h2>
                                </div>
                                <div>
                                    <button class="btn btn-link  collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionBeneficios">
                                <div class="card-body">
                                    Sentado en un escritorio, recostado en un sofá, disfrutando un café o al aire libre en la roof terrace, nuestros espacios versátiles te dan la oportunidad de no quedarte atrapado en la rutina.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between" id="headingTwelve" data-aos="fade-up" data-aos-duration="1500">
                                <div>
                                    <h2 class="mb-0">
                                        <button class="btn btn-link  collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                            Eventos
                                        </button>
                                    </h2>
                                </div>
                                <div>
                                    <button class="btn btn-link  collapsed object-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionBeneficios">
                                <div class="card-body">
                                    Tu membresía te abre las puertas a nuestra Enter_community y eventos inspiradores cada mes.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- seccion4--}}

    </div>
    {{-- seccion 5 --}}
    <div class="mt-5 mt-md-0">
        @include('section_plans')
    </div>
    {{-- seccion 5 --}}
    {{-- seccion6--}}
    <div class="mt-5 mt-md-0">
        @include('section_contact')
    </div>
    {{-- seccion6--}}
</div>
@endsection
