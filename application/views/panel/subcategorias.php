<link rel="stylesheet" href="<?php echo base_url("recursos-panel/assets/icons-templete/css/style.css"); ?>">
<div class="col-xs-12">
    <div class="tabCommon tabLeft">
        <div class="col-md-3">
            <br>
            <br>
            <ul class="nav nav-tabs">
                <?php
                    if($subcategorias != NULL){
                        foreach ($subcategorias as $row) {
                            echo '<li><a data-toggle="tab" href="#leftMenu'.$row['id_subcategoria'].'">'.$row['subcategoria'].'</a></li>';
                        }//end foreach
                    }
                ?>
                <li><a data-toggle="tab" href="#nuevaSub"><i class="fa fa-plus"></i> Nueva</a></li>
                <!-- <li><a data-toggle="tab" href="#leftMenu2">nature</a></li>
                <li><a data-toggle="tab" href="#leftMenu3">Children</a></li> -->
            </ul>
        </div>
        <div class="col-md-9">
              <p>Seleccione una categoría de su lado izquierdo para poder visualizar sus documentos</p>
              <!-- <div class="wrapper">
                  <p class="info">Download project files:</p>
                  <div class="files">
                      <a href="example.com/myfile.pdf">
                          <p>Project summary<span>Size: 5 mb</span></p>
                      </a>
                      <a href="example.com/myfile.xls">
                          <p>Budget spreadsheet<span>Size: 2 mb</span></p>
                      </a>
                      <a href="example.com/myfile.doc">
                          <p>Project requirements<span>Size: 1 mb</span></p>
                      </a>
                  </div>
              </div> -->
            <div class="tab-content">
                <?php
                    if($subcategorias != NULL){
                    for ($i=0; $i < sizeof($subcategorias) ; $i++) {
                        echo modal_nuevo_archivo($subcategorias[$i]['id_subcategoria'],$subcategorias[$i]['subcategoria']).'
                            <div id="leftMenu'.$subcategorias[$i]['id_subcategoria'].'" class="tab-pane fade">
                            <div class="wrapper">
                                <div class="media">
                                    <div class="media-body">
                                    <h3 class="media-heading">'.$subcategorias[$i]['subcategoria'].'</h3>
                                        <div class="row">
                                            <div class="col-md-offset-10">
                                                <div id="buttons">
                                                    <a href="#modal_nuevo_archivo_subcat_'.$subcategorias[$i]['id_subcategoria'].'" data-toggle="modal" ><button type="button" class="btn btn-outline-info"><i class="fa fa-plus"></i><span>Nuevo</span></button></a>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="files">
                        ';
                        foreach ($subcategorias[$i]['documentos'] as $val) {
                            // echo '
                            //       <div class="col-sm-6 col-xs-12">
                            //         <div class="media featuresContent wow fadeInUp">
                            //           <span class="media-left bg-color-1">
                            //             <i class="fa fa-graduation-cap bg-color-1" aria-hidden="true"></i>
                            //           </span>
                            //           <div class="media-body">
                            //           <a href="'.base_url('principal/'.$this->siid->TAREA_VISUALIZAR_DOCUMENTO.'/'.$val->id_documento).'">  <h3 class="media-heading color-1">'.$val->nombre.'</h3></a>
                            //           </div>
                            //         </div>
                            //       </div>
                            //
                            // ';
                            echo '
                                <div><a class="eliminar" style="color:red;" onclick="mostrarAlertaEliminarDocumento('.$val->id_documento.','.$subcategorias[$i]['id_subcategoria'].')"><i class="fa fa-times" ></i></a></div>
                                <!--<a href="'.base_url('principal/').$this->siid->TAREA_VISUALIZAR_DOCUMENTO.'/'.$val->id_documento.'/_'.$val->tipo.'">-->
                                <a href="'.base_url($val->url).'">
                                    <p>'.$val->nombre.'</p>
                                </a>
                            ';
                        }
                        echo '
                                </div><!-- End div files  -->
                                </div><!-- End div wrapper  -->

                                </div><!-- End div media body -->
                                </div><!-- End div media -->
                            </div>
                        ';
                    }//end foreach
                    }//end if $subcategorias vacia
                ?>
                <div id="nuevaSub" class="tab-pane fade">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="media-heading">Ingresa el nombre de la categoria</h3>
                            <p>Se recomienda escribir palabras clave</p>
                            <?php echo form_open("panel/subcategorias/subcategoria_nueva") ?>
                              <div class="form-group">
                                <!-- <i class="fa fa-user"></i> -->
                                <!-- <input type="text" class="form-control border-color-1" id="first-name-1" placeholder="First name"> -->
                                <?php
                                    $categoria = array('name'=>'categoria', 'placeholder'=>'Nombre de la categoria', 'class'=>'form-control border-color-1', 'required'=>'required' );
                                    echo form_input($categoria);
                                ?>
                              </div>

                              <!-- <button type="submit" class="btn btn-primary">Send Message</button> -->
                              <?php echo form_submit('Enviar', 'Crear', array('class'=>'btn btn-primary')); ?>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ====================================
——— CURSO MODAL
===================================== -->
<!-- <a href=\'#loginModal\' data-toggle="modal" ><button type="button" class="btn btn-outline-info"><i class="fa fa-plus"></i><span>Nuevo</span></button></a> -->

<script>
function mostrarAlertaEliminarDocumento(identificador,id_subcategoria){
    console.log(identificador);
    swal({
        title: '¿Esta seguro de eliminar este documento?',
        text: "Esta acción es permanente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'No, cancelar',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-primary',
        // buttonsStyling: false
    }).then(function () {
        window.location = "<?php echo site_url('panel/subcategoria_editar/eliminar_documento/');?>"+identificador+'/'+id_subcategoria;
    }, function (dismiss) {
        // dismiss can be 'cancel', 'overlay',
        // 'close', and 'timer'
        if (dismiss === 'cancel') {
            swal({
                title: 'Cancelado',
                text: "El documento sigue disponible",
                type: 'error',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }
            )
        }
    });
}//end of function mostrarAlertaEliminarDocumento
</script>
