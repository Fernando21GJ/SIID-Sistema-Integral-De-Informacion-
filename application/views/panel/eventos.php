
   <center>
      <div class="col-sm-6 col-xs-12">
         <div class="homeContactContent">
            <div class="container">
               <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                     <tr>
                        <td>#</td>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Lugar</th>
                        <th>Notas</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php

                        foreach($ver as $fila){
                        ?>
                     <tr>
                        <td><?php echo $fila->id_evento; ?></td>
                        <td><?php echo $fila->nombre; ?></td>
                        <td><?php echo $fila->fecha; ?></td>
                        <td><?php echo $fila->lugar; ?></td>
                        <td><?php echo $fila->notas; ?></td>

                        <td>
                           <a href="<?php echo base_url('panel/Eventos/mod/'.$fila->id_evento); ?>"  class="btn btn-warning btn-mini">Editar</a>
                        <td>
                      <?php echo '<a  class="btn btn-danger btn-mini"  onclick="mostrarAlertaEliminarCurso('.$fila->id_evento.')"> Eliminar' ?>

                        </td>
                     </tr>
                     <?php
                        }

                        ?>
                  </tbody>
               </table>
                 <a href='#loginModal' data-toggle="modal" ><button type="button" class="btn btn-xl btn-outline-info "><i class="fa fa-plus"></i><span>Crear Evento</span></button></a>
                    <a href='#Recordar' data-toggle="modal" ><button type="button" class="btn btn-xl btn-outline-info "></i><span>Recordar Evento</span></button></a>

            </div>


   </center>

   </p>
   </div>
   </div>

</div>
<div class="modal fade " id="loginModal" role="dialog">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
            <div class="panel-heading bg-color-1 border-color-1">
               <h3 class="panel-title">Eventos</h3>
            </div>
            <div class="panel-body">
               <div class="homeContactContent">
                  <?php echo form_open(base_url('panel/Eventos/agregarEvento'),array('class' =>'form-group','role' => 'form' )); ?>
                  <div class="form-group">
                     <i class="" aria-hidden="true"></i>
                     <?php echo form_input(array('type' => 'text' , 'name' => 'nombre' , 'class' => 'form-control border-color-1' ,'placeholder' => 'Nombre', 'name' => 'nombre' ,'id' => 'nombre','required' => 'required'));?>
                  </div>
                  <br>
                  <div class="form-group">
                     <i class="" aria-hidden="true"></i>
                     <?php echo form_input(array('type' => 'date' , 'name' => 'fecha' , 'class' => 'form-control border-color-1' ,'placeholder' => 'Fecha', 'name' => 'fecha' ,'id' => 'fecha','required' => 'required'));?>
                  </div>
                  <br>
                  <div class="form-group">
                     <i class="" aria-hidden="true"></i>
                     <?php echo form_input(array('type' => 'text' , 'name' => 'lugar' , 'class' => 'form-control border-color-1' ,'placeholder' => 'Lugar', 'name' => 'lugar' ,'id' => 'lugar','required' => 'required'));?>
                  </div>
                  <br>
                  <div class="form-group">
                     <i class="" aria-hidden="true"></i>
                     <?php echo form_textarea(array('type' => 'text' , 'name' => 'notas' , 'class' => 'form-control border-color-1' ,'placeholder' => 'Notas', 'name' => 'notas' ,'id' => 'notas'));?>
                  </div>
                  <br>
                  <div id="buttons">
                     <p class="space-bottom">
                        <?php echo form_submit(array('type' => 'submit' ,'value' => 'Crear'  , 'class' =>'btn btn-primary'));?>
                        <?php echo form_close();?>
                         <!-- <a type="submit" class ="btn btn-success" name="submit" href="<?=base_url('principal/'.$this->siid->TAREA_EVENTOS.'')?>">Volver</a> -->
                  </div>
               </div>
            </div>
         </div>
   </div>
</div>
<div class="modal fade " id="Recordar" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="panel-heading bg-color-1 border-color-1">
               <h3 class="panel-title">Recordar Eventos</h3>
            </div>
            <div class="panel-body">
                <div class="homeContactContent">
                    <?php echo form_open(base_url('panel/Eventos/add'),array('class' =>'form-group','role' => 'form' )); ?>
                    <div class="form-group">
                        <label for="">Recordar Evento</label>
                        <div class="bookingDrop">
                            <select name="id_usuario" id="guiest_id3" class="form-control border-color-4">
                            <option value="id_usuario">Seleccione un profesor</option>
                            <?php
                                foreach ($usuario as $usuarios) {
                                   echo "
                                     <option value=".$usuarios['id_usuario'].">".$usuarios['id_usuario']." ".$usuarios['nombre']." ".$usuarios['paterno']." ".$usuarios['materno']."</option>";

                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">

                        <label for="">   </label>
                        <select name="id_evento" id="guiest_id3" class="form-control border-color-4">
                        <option value="id_evento">Seleccione un Evento</option>
                        <?php
                        foreach ($evento as $even) {
                            echo "
                              <option value=".$even['id_evento'].">".$even['id_evento']." ".$even['nombre']."</option>";

                            }
                        ?>
                    </div>
                    <br>
                    <div id="buttons">
                     <!-- <p class="space-bottom"> -->
                       <?php //echo form_submit(array('type' => 'submit' ,'value' => 'Crear'  , 'class' =>'btn btn-primary'));?>
                          <input type="submit" class ="btn btn-primary" name="submit" value="Crear"/>
                        <?php echo form_close();?>

                         <!-- <a type="submit" class ="btn btn-success" name="submit" href="<?=base_url('principal/'.$this->siid->TAREA_EVENTOS.'')?>">Volver</a> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
function mostrarAlertaEliminarCurso(identificador){
    console.log(identificador);
    swal({
        title: '¿Está seguro de eliminar esté evento?',
        text: "Esta acción es permanente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'No, cancelar',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-primary',
        // buttonsStyling: false
    }).then(function () {
        window.location = "<?php echo site_url('panel/eventos/eliminar/');?>"+identificador;
    }, function (dismiss) {
        // dismiss can be 'cancel', 'overlay',
        // 'close', and 'timer'

        if (dismiss === 'cancel') {
            swal({
                title: 'Cancelado',
                text: "El evento sigue disponible",
                type: 'error',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }
            )
        }
    });
}//end of function mostrarAlertaEliminarCurso

</script>
