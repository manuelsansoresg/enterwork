$(document).ready(function () {
    if ($(".contactanos").length > 0) {
        $('body').css({
            'background-color': "black",
            'color': "white",
        });
        window.sendContact = function name() {

            let myForm   = document.getElementById('contactanos');
            let formData = new FormData(myForm);
            var Swal     = require('sweetalert2');

            $('#spinner-contacto').show();

            axios.post
                ('/contact/send', formData)
                .then(function (response) {

                    $('#spinner-contacto').hide();

                    document.getElementById('contactanos').reset();
                    window.location = '/gracias';


                })
                .catch(function (error) {

                    var result = error.response.data;

                    $('#spinner-contacto').hide();

                    Swal.fire({
                        title: '¡Error!',
                        text: 'Los campos marcados con * son obligatorios',
                        type: 'error',
                    });

                })
                .then(function () {
                });
        }

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
