<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <!--<div class="panel-heading">
          Collapsible Accordion Panel Group
      </div>-->
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
  					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
              <div class="bg-color-3 panel-heading">
                <h4 class="color-9 panel-title">
                  <strong>Bandeja de Entrada: <?php if($num_of_message == 0 ){
                                                        echo 'No hay nuevos mensajes';
                                                      } elseif ($num_of_message == 1) {
                                                        echo $num_of_message.' nuevo mensaje';
                                                      } else {
                                                        echo $num_of_message.' nuevos mensajes';
                                                      }
                                              ?>
                  </strong>
                </h4>
              </div>
  					</a><!-- /.collapse -->
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                <div class="row">
                  <div class="table-responsive">
                    <?php

                       if($mensajes_entrada != NULL){ ?>
                         <table id="example" class = "table table-responsive">
                           <thead bgcolor="#e1e2e3">
                             <th>Remitente</th>
                             <th>Asunto</th>
                             <th>Fecha</th>
                             <th>Eliminar</th>
                             <th>Leer</th>
                           </thead>

                           <tbody id="message-tbody">
                    <?php
                            foreach($mensajes_entrada as $row){

                              if($row['estatus_e'] == -1) {
                    ?>
                               <tr class = "bg-color-1" style="font-weight: bold;">
                                  <td><?php echo $row['emisor_e'];?></td>
                                  <td><?php echo $row['asunto_e'];?></td>
                                  <td><?php echo $row['fecha_e'];?></td>
                                  <td><a class="eliminar" style="color:red;" onclick="mostrarAlertaEliminarDocumento(<?php echo $row['id_mensaje_e'] ?>)"><span class="fa fa-trash"></span></a></td>
                                  <td><a href="<?php echo base_url('principal/'.$this->siid->TAREA_LEER_MENSAJES.'/'.$row['id_mensaje_e']) ?>" class="color-6"><span class="fa fa-eye"></span></a></td></td>
                                </tr>
                    <?php
                              }else{
                    ?>
                                <tr  style="font-weight: bold;">
                                   <td><?php echo $row['emisor_e'];?></td>
                                   <td><?php echo $row['asunto_e'];?></td>
                                   <td><?php echo $row['fecha_e'];?></td>
                                   <td><a class="eliminar" style="color:red;" onclick="mostrarAlertaEliminarDocumento(<?php echo $row['id_mensaje_e'] ?>)"><span class="fa fa-trash"></span></a></td>
                                   <td><a href="<?php echo base_url('principal/'.$this->siid->TAREA_LEER_MENSAJES.'/'.$row['id_mensaje_e']) ?>" class="color-6"><span class="fa fa-eye"></span></a></td>
                                 </tr>
                    <?php
                              }
                            }//end foreach
                    ?>
                          </tbody>
                         </table>
                    <?php
                      }//end if mensjes != NULL
                       else {
                    ?>
                          <div class="alert alert-danger" role="alert" align="center" style="font-weight: bold;">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only"></span> Ningún mensaje
                          </div>
                    <?php
                        }//end else
                    ?>
                  </div><!-- /.table-responsive -->
                </div><!-- /.row -->
              </div><!-- /.panel-body -->
            </div><!-- /.collapseOne -->
          </div><!-- /.panel-default -->
          <div class="panel panel-default">
  					<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
              <div class="bg-color-3 panel-heading">
                <h4 class="color-9 panel-title">
                  <strong>Bandeja de Salida  </strong>
                </h4>
              </div>
  					</a><!-- /.collapse -->
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="row">
                  <div class="table-responsive">
                    <?php

                       if($mensajes_salida != NULL){ ?>
                         <table id="bandeja_salida" class = "table table-responsive">
                           <thead bgcolor="#e1e2e3">
                             <th>Remitente</th>
                             <th>Asunto</th>
                             <th>Destinatario</th>
                             <th>Fecha</th>
                             <th>Eliminar</th>
                             <th>Leer</th>
                           </thead>
                           <tbody id="message-tbody">
                    <?php
                            foreach($mensajes_salida as $row_s){

                    ?>
                              <tr  style="font-weight: bold;">
                                 <td><?php echo $row_s['emisor_s'];?></td>
                                 <td><?php echo $row_s['asunto_s'];?></td>
                                 <td><?php echo $row_s['receptor_s'];?></td>
                                 <td><?php echo $row_s['fecha_s'];?></td>
                                 <td><a class="eliminar" style="color:red;" onclick="mostrarAlertaEliminarDocumento(<?php echo $row_s['id_mensaje_s'] ?>)"><span class="fa fa-trash"></span></a></td>
                                 <td><a href="<?php echo base_url('principal/'.$this->siid->TAREA_LEER_MENSAJES.'/'.$row_s['id_mensaje_s']) ?>" class="color-6"><span class="fa fa-eye"></span></a></td>
                               </tr>
                    <?php

                            }//end foreach
                    ?>
                          </tbody>
                         </table>
                    <?php
                      }//end if mensjes != NULL
                       else {
                    ?>
                          <div class="alert alert-danger" role="alert" align="center" style="font-weight: bold;">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only"></span> Ningún mensaje
                          </div>
                    <?php
                        }//end else
                    ?>
                  </div><!-- /.table-responsive -->
                </div><!-- /.row -->
              </div><!-- /.panel-body -->
            </div><!-- /.collapseTwo -->
          </div><!-- /.panel-default -->
        </div><!-- /.accordion -->
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->



<!-- =========================
MODAL ELIMINAR MENSAJE
===========================-->
<script>
function mostrarAlertaEliminarDocumento(identificador){
    console.log(identificador);
    swal({
        title: '¿Está seguro de eliminar este mensaje?',
        text: "Esta acción es permanente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'No, cancelar',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-primary',
        // buttonsStyling: false
    }).then(function () {
        window.location = "<?php echo site_url('panel/mensajes/eliminar_mensajes/');?>"+identificador;
    }, function (dismiss) {
        // dismiss can be 'cancel', 'overlay',
        // 'close', and 'timer'
        if (dismiss === 'cancel') {
            swal({
                title: 'Cancelado',
                text: "El Mensaje sigue disponible",
                type: 'error',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }
            )
        }
    });
}//end of function mostrarAlertaEliminarDocumento
</script>
