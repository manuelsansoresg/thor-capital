$( "#contactanos" ).submit(function( event ) {
    event.preventDefault();
    sendContact('contactanos');
});

$( "#contactanosmovil" ).submit(function( event ) {
    event.preventDefault();
    sendContact('contactanosmovil');
});
function sendContact(name_div) {

    let myForm   = document.getElementById(name_div);
    let formData = new FormData(myForm);
    var Swal     = require('sweetalert2');

    var error_title = $('#error-title').val();
    var error_description = $('#error-description').val();

    var ok_title = $('#ok-title').val();
    var ok_description = $('#ok-description').val();

    $('.spinner-contacto').show();

    axios.post
    ('/contact/send', formData)
        .then(function (response) {

            $('.spinner-contacto').hide();

            document.getElementById(name_div).reset();

            Swal.fire({
                title: ok_title,
                text: ok_description,
                type: 'success',
            });

        })
        .catch(function (error) {

            var result = error.response.data;

            $('.spinner-contacto').hide();

            Swal.fire({
                title: '¡ '+error_title+' !',
                text: error_description,
                type: 'error',
            });

        })
        .then(function () {
        });
}
