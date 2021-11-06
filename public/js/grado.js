$(document).ready(() => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var cedula = $('#cedula');
    cedula.keyup((e) => {
        if (cedula.val().length > 9) {

            $.ajax({
                url: 'grado/validacion-cedula',
                type: 'POST',
                data: {
                    "cedula": cedula.val()
                },
                beforeSend: () => {
                    $('#respuesta_html').html(
                        `<p style='text-align: center;'><img src='images/ajax-loader.gif'></p>`
                    );
                },
                success: (response) => {
                    $('#respuesta_html').html(response);
                },
                error: (err) => {
                    console.log(`Error: ${err}`);
                }
            });
        } else {
            return;
        }
    });
});
