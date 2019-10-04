import AOS from "aos";

$( document ).ready(function()
{
    if ( $("#map").length > 0 ) {
        var map;
        function initialize(){
            var myLatLng = {lat: 21.009431, lng: -89.577054};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Enter Plaza Odara'
            });


        }
        google.maps.event.addDomListener(window, "load", initialize);
    }

    if ($(".landing").length > 0) {
        var isMovil = false;
        /* funcion posicionamiento scroll*/
        function isScrolledIntoView(elem) {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();
            var elemTop = $(elem).offset().top;
            var elemBottom = elemTop + $(elem).height();
            return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom) && (elemBottom <= docViewBottom) && (elemTop >= docViewTop));
        }
        /* funcion posicionamiento scroll*/
        AOS.init({disable: 'mobile'});

        $('.header').css({
            'background': "url('/img/landing/Imagen_Home.png') no-repeat center",
            'width': '100%',
            'background-size': 'cover',
            'height': '100vh'
        });

        /* saber si viene de escritorio o movil */
        function myFunction(x) {
            if (x.matches) { // If media query matches
                isMovil = true;
            } else {
            }
        }

        var x = window.matchMedia("(max-width: 700px)");
        myFunction(x); // Call listener function at run time
        x.addListener(myFunction); // Attach listener function on state changes

        if (isMovil) {
            $('.header').css({
                'height': '60vh'
            });
        }

        var landingIcons = 0;
        $(window).scroll(function () {

            if (isScrolledIntoView($('.landing__section2__icons'))) {
                landingIcons = landingIcons + 1;
                //the div is now visible to user. here add your script

                if (landingIcons == 1){
                    testAnim('bounceIn', 'landing__section2__icons');
                }


            }

        });
    }




    if ($(".landing__section5").length > 0) {
        window.invertColorCircle = function (colorOrginal , colorChange, circleBig, circleSmall, isOver) {
           if(isOver){
                $('.' + circleBig + '').removeClass('bg-black');


                if(colorOrginal == 'bg-yellow'){
                    $('.title-yellow').addClass('text-body');
                }
                $('.' + circleBig + '').addClass('text-white');

                $('.' + circleBig + '').removeClass(colorOrginal);
                $('.' + circleSmall + '').removeClass(colorChange);


                $('.' + circleBig + '').addClass(colorChange);
                $('.' + circleSmall + '').addClass(colorOrginal);
           }else{
               if(colorOrginal == 'bg-yellow'){
                   $('.title-yellow').removeClass('text-body');
               }
                $('.' + circleBig + '').removeClass('bg-black');
                $('.' + circleSmall + '').removeClass('bg-black');
                $('.' + circleBig + '').removeClass('text-white');

                $('.' + circleBig + '').addClass(colorOrginal);
                $('.' + circleSmall + '').addClass(colorChange);

           }

        }
    }

    $( ".next-circle" ).click(function() {

        mover(1);
    });

    $( ".preview-circle" ).click(function() {
        mover(-1);
    });

    /*
    * funcion para la navegacion
    * */
    var cualvemos = 0;

    function mover(direccion) {
        var title = ['Virtual <br> Offices', 'Meeting <br> Rooms', 'Coworking', 'Private'];
        var price = ['$900', '$200', '$2,000', '$9,000'];
        var description = [
            ' Recepción de correspondencia<br>\n' +
            '                    Contestación personalizada<br>\n' +
            '                    Staff de apoyo<br>\n' +
            '                    CCTV 24/7<br>\n' +
            '                    Print Center',

            '   Adaptables a tus necesidades <br>\n' +
            '                                Mobiliario ergonómico<br>\n' +
            '                                Servicio de café y bebidas<br>\n' +
            '                                Internet de alta velocidad<br>',

            'Desk Service más: <br>\n' +
            '                                Acceso ilimitado a espacios <br>\n' +
            '                                Mobiliario ergonómico <br>\n' +
            '                                Servicio de café y bebidas <br>\n' +
            '                                Internet dedicado',

            'Desk Service más: <br>\n' +
            '                                Oficina Privada <br>\n' +
            '                                Mobiliario ergonómico <br>\n' +
            '                                Servicio de café y bebidas <br>\n' +
            '                                Internet dedicado'
        ];
        var background = ['#FF66CC', '#FF9999', '#FFFF66', '#99FF66'];

        var ultima = 4-1;
        var auxiliar = cualvemos + direccion; // se sumará 1 o se restará 1 al índice
        // si el resultado es menor que cero, le decimos que vaya al otro extremo y muestre la ultima
        if(auxiliar < 0) {
            auxiliar = ultima;
        }
        // si el resultado es mayor que la última, le decimos que vaya al otro extremo y muestre la primera
        if(auxiliar > ultima) {
            auxiliar = 0;
        }
        // listo, ahora ya podemos cambiar el dato sin problemas
        cualvemos = auxiliar;
        $('#section5-movil-title').html(title[cualvemos]);
        $('#section5-movil-description').html(description[cualvemos]);
        $('#section5-movil-price').html(price[cualvemos]);
        $('.landing__section5__circle ').css({
            'background-color': background[cualvemos]
        });

        $('.btn-primary ').css({
            'background-color': background[cualvemos]
        });
       /* var image = $("#img-modal");
        image.fadeOut('fast', function () {
            image.attr('src', $('#'+cualvemos).val());
            image.fadeIn('fast');
        });*/


    }

    $( ".next-slider" ).click(function() {

        moverSlider(1);
    });

    $( ".preview-slider" ).click(function() {
        moverSlider(-1);
    });


    var cualvemosSlider = 0;
    function moverSlider(direccion) {

        var slider = ['/img/landing/slider/RECEPCION.jpg', '/img/landing/slider/FACHADA.jpg', '/img/landing/slider/COWORK.jpg'];
        var titles = ['Recepción', 'Fachada', 'Cowork'];
        var ultima = slider.length-1;
        var auxiliar = cualvemosSlider + direccion; // se sumará 1 o se restará 1 al índice
        // si el resultado es menor que cero, le decimos que vaya al otro extremo y muestre la ultima
        if(auxiliar < 0) {
            auxiliar = ultima;
        }
        // si el resultado es mayor que la última, le decimos que vaya al otro extremo y muestre la primera
        if(auxiliar > ultima) {
            auxiliar = 0;
        }
        // listo, ahora ya podemos cambiar el dato sin problemas
        cualvemosSlider = auxiliar;
        var image = $("#imgSlider");
        /*image.fadeOut('fast', function () {
            image.attr('src', slider[cualvemosSlider]);
            image.fadeIn('fast');
        });*/
        $('#imgSlider')
            .fadeOut(400, function() {
                $("#imgSlider").attr('src',slider[cualvemosSlider]);
                $('#slider-description').html(titles[cualvemosSlider]);
            })
            .fadeIn(400);

    }
});
