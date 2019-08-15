window.contacto = function () {
    let myForm = document.getElementById('contacto');
    let formData = new FormData(myForm);
    var  Swal = require('sweetalert2');
    $('#spinner-contacto').show();
    axios.post
    ('/contact', formData)
        .then(function (response) {
            console.log(response.data);
            $('#spinner-contacto').hide();
            document.getElementById('contacto').reset();

            Swal.fire({
                title: '¡Gracias!',
                text: 'En breve  te contactaremos',
                type: 'success',
            });
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
