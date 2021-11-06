$(document).ready(()=>{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var dia = $('#dia');
    $.ajax({
        url: '/grado/dias',
        type: 'POST',
        data:{},
        success: (response)=>{
            response.forEach(elements => {
                elements.forEach(element => {
                    dia.append(`<option value="${element.id_dias}">${element.dias}</option`)
                });
            });
        }
    });

    var hora = $('#hora');
    var token = $('#_token');

    $.ajax({
        url: '/grado/horarios',
        type: 'POST',
        data:{},
        success: (response)=>{
            response.forEach(elements => {
                elements.forEach(element => {
                    console.log(element);
                    hora.append(`<option value="${element.id-hora}">${element.horas}</option`)
                });
            });
        }
    });

    //SI EL DIA CAMBIA SE RECARGA EL HORARIO
    dia.change(()=>{
        $.ajax({
            url: '/grado/horarios',
            type: 'POST',
            data:{
                "_token":token.val(),
                dia: dia.val(),
                hora: hora.val(),
            },
            success: (response)=>{
                response.forEach(elements => {
                    elements.forEach(element => {
                        hora.append(`<option value="${element.id-hora}">${element.horas}</option`)
                    });
                });
            }
        });
    })
});
