<div id="buttons">
   <a href='#loginModal' data-toggle="modal" ><button type="button" class="btn btn-outline-info"><i class="fa fa-plus"></i><span>Nueva nota</span></button></a>
</div>
<br>
<!-------------->
<?php
   foreach ($notas_activas as $row) {
     // code...
     ?>

               <div class="media courseList couresListPage">
                 <a class="media-left border-color-4" href="course-single-left-sidebar.html">
                 </a>
                  <div class="media-body">
                   <h3 class="media-heading"><a class="color-4"><?php echo $row->nombre; ?></a></h3>
                   <ul class="list-inline">
                     <li><i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo $row->fecha; ?></li>
                   </ul>
                   <p><?php echo $row->nota; ?></p>
                   <ul class="list-inline btn-sky btnPart">
                     <li><a class="btn btn-primary" onclick="mostrarAlertaEliminarNota(<?php echo $row->id_nota ?>)"><i aria-hidden="true"></i>Eliminar nota</a></li>
                     <li><a href="<?php echo base_url('panel/editarnota/edit/'.$row->id_nota.'') ?>"   data-toggle="modal" class="btn btn-primary "><i aria-hidden="true"></i>Editar nota</a></li>

                   </ul>
                  </div>
               </div>

               <br>

               <?php
               }
               ?>
<!--==========
   -->
<!-- ====================================
   ——— NOTAS MODAL

   ===================================== -->
<div class="modal fade " id="loginModal" tabindex="-1" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
            <div class="panel-heading bg-color-1 border-color-1">
               <h3 class="panel-title">Nota nueva</h3>
            </div>
            <div class="panel-body">
               <div class="homeContactContent">
                  <?php echo form_open("panel/notas/nota_nueva") ?>
                  <div class="form-group">
                     <!-- <i class="fa fa-user"></i> -->
                     <!-- <input type="text" class="form-control border-color-1" id="first-name-1" placeholder="First name"> -->
                     <?php
                        $nombre = array('name'=>'nombre', 'placeholder'=>'Nombre nota', 'class'=>'form-control border-color-1', 'required'=>'required' );
                        echo form_input($nombre);
                        ?>
                  </div>
                  <br>
                  <div class="form-group">
                     <!-- <i class="fa fa-comments" aria-hidden="true"></i> -->
                     <!-- <textarea class="form-control border-color-4" placeholder="Write message"></textarea> -->
                     <?php
                        $nota = array('name'=>'nota', 'placeholder'=>'Descripción', 'class'=>'form-control border-color-4', 'required'=>'required');
                        echo form_textarea($nota);
                        ?>
                  </div>
                  <br>
                  <div class="form-group">
                     <!-- <i class="fa fa-comments" aria-hidden="true"></i> -->
                     <!-- <textarea class="form-control border-color-4" placeholder="Write message"></textarea> -->
                     <input type="date" class="form-control" name="date_out" required="required" value="<?php echo isset($itemOutData->date_out) ? set_value('date_out', date('Y-m-d', strtotime($itemOutData->date_out))) : set_value('date_out'); ?>">
                  </div>
                  <br>
                  <!-- <button type="submit" class="btn btn-primary">Send Message</button> -->
                  <?php echo form_submit('Enviar', 'Crear', array('class'=>'btn btn-primary')); ?>
                  <?php echo form_close(); ?>
               </div>
            </div>
         </div>
   </div>
</div>
<!--==== MODAL EDITAR=======------->

<script>
function mostrarAlertaEliminarNota(identificador){
    console.log(identificador);
    swal({
        title: '¿Está seguro de eliminar esta nota?',
        text: "Esta acción es permanente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'No, cancelar',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-primary',
        // buttonsStyling: false
    }).then(function () {
        window.location = "<?php echo site_url('panel/notas/eliminar_nota/');?>"+identificador;
    }, function (dismiss) {
        // dismiss can be 'cancel', 'overlay',
        // 'close', and 'timer'
        if (dismiss === 'cancel') {
            swal({
                title: 'Cancelado',
                text: "La nota sigue disponible",
                type: 'error',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }
            )
        }
    });
}//end of function mostrarAlertaEliminarNota
</script>
