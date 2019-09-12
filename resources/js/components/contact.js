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
