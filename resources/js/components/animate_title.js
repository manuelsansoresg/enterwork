import Typed from 'typed.js'

/**
 * contadores para controlar que aparezca 1 sola vez el elemento al llegar a la posicion
 */
var contLandingTitle1 = 0;
var contLandingTitle2 = 0;
var contsectionPlans1 = 0;
var contsectionPlans1Movil = 0;
var contsectionContact = 0;
var contsalaTitle1 = 0;
var contubicacionTitle1 = 0;
var contubicacionTitleMovil1 = 0;

function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();
    return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom) && (elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

if ( $(".landing").length > 0 ){


    $(window).scroll(function () {

        if (isScrolledIntoView($('.landing-title1'))) {
            contLandingTitle1 = contLandingTitle1 + 1;
            //the div is now visible to user. here add your script
            if (contLandingTitle1 == 1){
                var typed = new Typed('.landing-title1', {
                    strings: ["", $('#landing-title1').val()],
                    typeSpeed: 50,
                    contentType: 'html',
                    running: true
                });
            }

        }

        if (isScrolledIntoView($('.landing-title2'))) {
            contLandingTitle2 = contLandingTitle2 + 1;
            //the div is now visible to user. here add your script
            if (contLandingTitle2 == 1){
                var typed = new Typed('.landing-title2', {
                    strings: ["", $('#landing-title2').val()],
                    typeSpeed: 50,
                    contentType: 'html',
                    running: true
                });
            }

        }



        if (isScrolledIntoView($('.sectionPlans-title1Movil'))) {
            contsectionPlans1Movil = contsectionPlans1Movil + 1;
            //the div is now visible to user. here add your script
            if (contsectionPlans1Movil == 1){
                var typed = new Typed('.sectionPlans-title1Movil', {
                    strings: ["", $('#sectionPlans-title1Movil').val()],
                    typeSpeed: 50,
                    contentType: 'html',
                    running: true
                });
            }

        }





    });
}



/* beneficios*/
if ( $(".beneficios-title1").length > 0 ){

    var typed = new Typed('.beneficios-title1', {
        strings: ["", $('#beneficios-title1').val()],
        typeSpeed: 50,
        contentType: 'html',
        running: true
    });

}

if ( $(".sectionContact").length > 0 ) {
    $(window).scroll(function () {
        if (isScrolledIntoView($('.sectionContact'))) {
            contsectionContact = contsectionContact + 1;
            //the div is now visible to user. here add your script
            if (contsectionContact == 1) {
                var typed = new Typed('.sectionContact', {
                    strings: ["", $('#sectionContact').val()],
                    typeSpeed: 50,
                    contentType: 'html',
                    running: true
                });
            }

        }
    });
}

if ( $(".sectionPlans-title1").length > 0 ) {
    $(window).scroll(function () {
        if (isScrolledIntoView($('.sectionPlans-title1'))) {

            contsectionPlans1 = contsectionPlans1 + 1;
            //the div is now visible to user. here add your script
            if (contsectionPlans1 == 1) {
                var typed = new Typed('.sectionPlans-title1', {
                    strings: ["", $('#sectionPlans-title1').val()],
                    typeSpeed: 50,
                    contentType: 'html',
                    running: true
                });
            }

        }
    });
}
/* beneficios*/

/* sala*/

if ( $(".sala-juntas").length > 0 ){
    contsalaTitle1 = contsalaTitle1 + 1;
    //the div is now visible to user. here add your script
    if (contsalaTitle1 == 1){

        var typed = new Typed('.salaSection1Title', {
            strings: ["", $('#salaSection1Title').val()],
            typeSpeed: 50,
            contentType: 'html',
            running: true
        });
    }
}
/* sala*/


if ( $(".ubicacionTitle").length > 0 ){
    contubicacionTitle1 = contubicacionTitle1 + 1;
    //the div is now visible to user. here add your script
    if (contubicacionTitle1 == 1){

        var typed = new Typed('.ubicacionTitle', {
            strings: ["", $('#ubicacionTitle').val()],
            typeSpeed: 50,
            contentType: 'html',
            running: true
        });
    }
}

if ( $(".ubicacionTitleMovil").length > 0 ){
    contubicacionTitleMovil1 = contubicacionTitleMovil1 + 1;
    //the div is now visible to user. here add your script
    if (contubicacionTitleMovil1 == 1){

        var typed = new Typed('.ubicacionTitleMovil', {
            strings: ["", $('#ubicacionTitleMovil').val()],
            typeSpeed: 50,
            contentType: 'html',
            running: true
        });
    }
}
