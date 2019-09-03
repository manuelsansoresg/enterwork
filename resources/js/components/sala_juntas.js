import AOS from "aos";

$(document).ready(function () {
    if ( $(".sala-juntas").length > 0 ) {

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

        $('.header').css({
            'background': "url('/img/sala_juntas/Sala_Juntas.png') no-repeat center",
            'width': '100%',
            'background-size': 'cover',
            'height': '100vh'
        });

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
                'height': '60vh'
            });
        }

        var salaIcos = 0;
        $(window).scroll(function () {

            if (isScrolledIntoView($('.sala-juntas__icons'))) {
                salaIcos = salaIcos + 1;
                //the div is now visible to user. here add your script

                if (salaIcos == 1){
                    testAnim('bounceIn', 'sala-juntas__icons');
                }


            }

        });
    }

});
