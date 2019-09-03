import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles
import  'animate.css';

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

    if ( $(".ubicacion").length > 0 ) {
        AOS.init();

        var isMovil = false;
        /* saber si viene de escritorio o movil */
        function myFunction(x) {
            if (x.matches) { // If media query matches
                isMovil = true;
            }else{
            }
        }

        var x = window.matchMedia("(max-width: 700px)");
        myFunction(x); // Call listener function at run time
        x.addListener(myFunction); // Attach listener function on state changes

        if(isMovil){
            $('.header').css({
                'height': '15vh'
            });
        }
    }

});
