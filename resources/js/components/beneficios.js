import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles
import  'animate.css';
import Typed from "typed.js";
import  Swiper  from 'swiper';
import 'swiper/dist/css/swiper.min.css';

$(document).ready(function () {

    if ( $(".beneficios").length > 0 ) {
        $('.menu__logo').attr('src', '/img/Enter_Negro.svg');


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

        AOS.init({disable: 'mobile'});

        if(isMovil){
            $('.header').css({
                'height': '25vh'
            });
            var mySwiper = new Swiper ('.swiper-container', {
                // Optional parameters
                direction: 'horizontal',
                loop: true
            })
        }else{

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
        /* acordeon*/
        $(".expand").on( "click", function() {
            $(this).next().slideToggle(200);
            var $expand;
            $expand = $(this).find(">:first-child");

            if($expand.text() == "+") {
                $expand.text("-");
            } else {
                $expand.text("+");
            }
        });
        /* acordeon*/
    }
});
