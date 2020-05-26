
<!-- <button type="button" class="btn-social btn-linkedin btn-circle"></button> -->
<?php
    foreach ($cursos_activos as $value) {
        echo '
            <div class="col-md-4">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                        <a class="editar" href="#editarCurso_'.$value['id_curso'].'" data-toggle="modal"><i class="fa fa-pencil" ></i></a> |
                        <a class="eliminar" onclick="mostrarAlertaEliminarCurso('.$value['id_curso'].')"><i class="fa fa-times" ></i></a> | '.$value['curso'].'
                    </h3>
                  </div>
                  <div class="panel-body">
                    <p>'.$value['descripcion'].'</p>
                    <div class="list-group">';
                        foreach ($value['subcategorias'] as $row) {
                            echo '<li class="list-group-item"><a class="editar" href="#editarSubcategoria_'.$row->id_categoria.'" data-toggle="modal"><i class="fa fa-pencil" ></i></a> | <a class="eliminar" onclick="mostrarAlertaEliminarSubcategoria('.$row->id_categoria.')"><i class="fa fa-times" ></i></a> | '.$row->categoria.' </li>';
                            echo modal_editar_subcategoria($row->id_categoria, $row->categoria);
                        }
                    echo '</div>
                  </div>
                </div>
            </div>
        ';
        echo modal_editar_curso($value['id_curso'],$value['curso'],$value['descripcion']);
    }//end foreach
?>


<script>
function mostrarAlertaEliminarCurso(identificador){
    console.log(identificador);
    swal({
        title: '¿Está seguro de eliminar este curso?',
        text: "Esta acción es permanente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'No, cancelar',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-primary',
        // buttonsStyling: false
    }).then(function () {
        window.location = "<?php echo site_url('panel/cursos_editar/eliminar_curso/');?>"+identificador;
    }, function (dismiss) {
        // dismiss can be 'cancel', 'overlay',
        // 'close', and 'timer'
        if (dismiss === 'cancel') {
            swal({
                title: 'Cancelado',
                text: "El curso sigue disponible",
                type: 'error',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }
            )
        }
    });
}//end of function mostrarAlertaEliminarCurso

function mostrarAlertaEliminarSubcategoria(identificador){
    console.log(identificador);
    swal({
        title: '¿Está seguro de eliminar esta subcategoría?',
        text: "Esta acción es permanente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'No, cancelar',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-primary',
        // buttonsStyling: false
    }).then(function () {
        window.location = "<?php echo site_url('panel/cursos_editar/eliminar_subcategoria/');?>"+identificador;
    }, function (dismiss) {
        // dismiss can be 'cancel', 'overlay',
        // 'close', and 'timer'
        if (dismiss === 'cancel') {
            swal({
                title: 'Cancelado',
                text: "La subcategoría sigue disponible",
                type: 'error',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }
            )
        }
    });
}//end of function mostrarAlertaEliminarSubcategoria
</script>
