import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles
import  'animate.css';
import Typed from "typed.js";

$(document).ready(function () {

    if ( $(".beneficios").length > 0 ) {
        $('.menu__logo').attr('src', '/img/Enter_Negro.svg');

        AOS.init();
        /* funcion posicionamiento scroll*/
        function isScrolledIntoView(elem) {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();
            var elemTop = $(elem).offset().top;
            var elemBottom = elemTop + $(elem).height();
            return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom) && (elemBottom <= docViewBottom) && (elemTop >= docViewTop));
        }
        /* funcion posicionamiento scroll*/
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
                'height': '25vh'
            });
        }
        var beneficiosIcos = 0;
        $(window).scroll(function () {

            if (isScrolledIntoView($('.beneficios__section3__icons'))) {
                beneficiosIcos = beneficiosIcos + 1;
                //the div is now visible to user. here add your script

                if (beneficiosIcos == 1){
                    testAnim('bounceIn', 'beneficios__section3__icons');
                }


            }

        });
    }
});
