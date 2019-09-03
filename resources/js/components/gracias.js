$(document).ready(function () {
    if ($(".gracias").length > 0) {
        $('body').css({
            'background-color': "black",
            'color': "white",
        });
        var isMovil = false;
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
                'height': '15vh'
            });
        }
    }
});