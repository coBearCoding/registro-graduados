$(document).ready(() => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    var consulta_table = $('#consulta-table');
    consulta_table.DataTable();
});

function eliminar(id_agenda){
    Swal.fire({
        title: 'Confirmacion',
        text: 'Esta seguro que desea eliminar esta cita?',
        icon:'warning',
        confirmButtonText: 'Confirmar',
        showCancelButton:true,
    }).then((value)=>{
        if(value.isConfirmed == true){
            $.ajax({
                url:'/administrativos/eliminar',
                type: 'POST',
                data:{
                    id_agenda: id_agenda,
                },
                success: (response)=>{
                    Swal.fire({
                        title: 'Eliminacion',
                        text: 'Cita eliminada correctamente',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((value)=>{
                        if(value.isConfirmed == true){
                            location.reload();
                        }
                    });
                },
                error:((err)=>{
                    Swal.fire({
                        title: 'Eliminacion',
                        text: 'Cita no pudo ser elimnada',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }),
            });
        }
    });
}


function editar(id_agenda){
    // $.ajax({
    //     url: '/editar',
    //     data:{
    //         "id_agenda": id_agenda
    //     },
    //     success: (response)=>{
    //         console.log(response);
    //     },
    //     error: (err)=>{

    //     }
    // })

    $('#editar_modal').modal("toggle");
}

function saveEditar(id_agenda){
    Swal.fire({
        title: 'Confirmacion',
        text: 'Esta seguro que desea eliminar esta cita?',
        icon:'warning',
        confirmButtonText: 'Confirmar',
        showCancelButton:true,
    }).then((value)=>{
        if(value.isConfirmed == true){
            $.ajax({
                url:'/administrativos/save-editar',
                type: 'POST',
                data:{
                    id_agenda: id_agenda,
                },
                success: (response)=>{
                    Swal.fire({
                        title: 'Eliminacion',
                        text: 'Cita eliminada correctamente',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((value)=>{
                        if(value.isConfirmed == true){
                            location.reload();
                        }
                    });
                },
                error:((err)=>{
                    Swal.fire({
                        title: 'Eliminacion',
                        text: 'Cita no pudo ser elimnada',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }),
            });
        }
    });
}
