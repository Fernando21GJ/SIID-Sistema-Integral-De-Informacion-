<div id="buttons">
    <a href="<?php echo base_url('principal/'.$this->siid->TAREA_DOCENTE_EDITAR)?>"><button type="button" class="btn btn-outline-info"><i class="fa fa-plus"></i><span>Nuevo usuario</span></button></a>
</div>
<br>
<?php
    foreach ($usuarios_activos as $row) {
        echo'
            <div class="col-sm-6 col-xs-12" ><br>

                    <div class="media servicesStyle" aria-hidden="true" style="-webkit-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);-moz-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);border-radius: 11px 11px 11px 11px;
-moz-border-radius: 11px 11px 11px 11px;
-webkit-border-radius: 11px 11px 11px 11px;">
                        <span class="media-left bg-color-1" style="margin-left: 5px;margin-top: 5px;margin-bottom: 10px;">
                          <i class="fa fa-briefcase  bg-color-1" aria-hidden="true"></i>
                        </span>

                        <!-- <a href="'.base_url('principal/'.$this->siid->TAREA_ELIMINAR_DOCENTE.'/'.$row->id_usuario).'" class="btn btn-primary" style="float:right;margin-right: 15px;margin-top: 20px;">  -->
                        <a onclick="mostrarAlertaEliminarDocente('.$row->id_usuario.')" class="btn btn-primary" style="float:right;margin-right: 15px;margin-top: 20px;">
                        Eliminar
                        </a>

                        <div class="media-body" style="margin-top: 5px;">
                          <a href="'.base_url('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$row->id_usuario).'">
                          <h3 class="media-heading color-1">'.$row->nombre.'</h3>
                          <p>'.$row->paterno.' '.$row->materno.'</p>';
                          switch ($row->rol) {
                            case 1:
                              echo '<p>Administrador</p>';
                              break;
                            case 2:
                              echo '<p>Docente</p>';
                              break;
                            case 3:
                              echo '<p>Invitado</p>';
                              break;

                            default:
                              echo '<p>Sin rol</p>';
                              break;
                          }

                          echo '
                          </a>

                        </div>
                    </div>

            </div>
        ';
    }
?>

<!-- ====================================
——— CURSO MODAL
===================================== -->
<div class="modal fade " id="loginModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="panel panel-default formPanel">
        <div class="panel-heading bg-color-1 border-color-1">
          <h3 class="panel-title">Nuevo usuario</h3>
        </div>
        <div class="panel-body">
            <div class="homeContactContent">
              <?php $componentes=array('enctype' =>  "multipart/form-data"); echo  form_open("panel/docentes/usuario_nuevo",$componentes); ?>
                <div class="form-group">
                  <?php
                      $nombre = array('name'=>'nombre', 'placeholder'=>'Nombre', 'class'=>'form-control border-color-1', 'required'=>'required' );
                      echo form_input($nombre);
                  ?>
                </div>
                <br>
                <div class="form-group">
                  <?php
                      $paterno = array('name'=>'paterno', 'placeholder'=>'Apellido paterno', 'class'=>'form-control border-color-1', 'required'=>'required' );
                      echo form_input($paterno);
                  ?>
                </div>
                <br>
                <div class="form-group">
                  <?php
                      $materno = array('name'=>'materno', 'placeholder'=>'Apellido materno', 'class'=>'form-control border-color-1', 'required'=>'required' );
                      echo form_input($materno);
                  ?>
                </div>
                <br>
                <div class="form-group">
                  <?php
                      $especialidad = array('name'=>'especialidad', 'placeholder'=>'Especialidad', 'class'=>'form-control border-color-1', 'required'=>'required' );
                      echo form_input($especialidad);
                  ?>
                </div>
                <br>
                <div class="form-group">
                    <?php
                        $opciones = array(
                                      '1' => 'Administrador',
                                      '2' => 'Docente'
                                  );
                        $extra = array('id'=>'guiest_id16' ,'class'=>'form-control border-color-1', 'required'=>'required');
                        echo form_dropdown('rol_de_usuario',$opciones,'1',$extra);
                    ?>
                </div>
                <br>
                <div class="form-group">
                  <?php
                      $correo = array('name'=>'correo', 'placeholder'=>'Correo', 'type' => 'email', 'class'=>'form-control border-color-1', 'required'=>'required' );
                      echo form_input($correo);
                  ?>
                </div>
                <br>
                <div class="form-group">
                  <?php
                      $contrasenia = array('name'=>'contrasenia', 'placeholder'=>'Contraseña', 'type' => 'password', 'class'=>'form-control border-color-1', 'required'=>'required' );
                      echo form_input($contrasenia);
                  ?>
                </div>
                <br>
                <?php echo form_submit('Enviar', 'Crear', array('class'=>'btn btn-primary')); ?>
              <?php echo form_close(); ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    function mostrarAlertaEliminarDocente(identificador){
        console.log(identificador);
        swal({
            title: '¿Está seguro de eliminar este usuario?',
            text: "Esta acción es permanente",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, eliminar',
            cancelButtonText: 'No, cancelar',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-primary',
            // buttonsStyling: false
        }).then(function () {
            window.location = "<?php echo site_url('panel/eliminar_docente/eliminar_docente_id/');?>"+identificador;
        }, function (dismiss) {
            // dismiss can be 'cancel', 'overlay',
            // 'close', and 'timer'
            if (dismiss === 'cancel') {
                swal({
                    title: 'Cancelado',
                    text: "El usuario sigue disponible",
                    type: 'error',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                }
                )
            }
        });
    }//end of function mostrarAlertaEliminarDocente
</script>
