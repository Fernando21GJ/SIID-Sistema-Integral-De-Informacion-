<?php
    if (!function_exists('modal_nuevo_archivo')) {
        function modal_nuevo_archivo($id_subcategoria, $subcategoria){
            $html = '
                <div class="modal fade" id="modal_nuevo_archivo_subcat_'.$id_subcategoria.'" tabindex="-1" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="panel-heading bg-color-1 border-color-1">
                          <h3 class="panel-title">'.$subcategoria.'</h3>
                        </div>
                        <div class="panel-body">
                            <div class="homeContactContent">
                              '.form_open_multipart("panel/subcategorias/documento_nuevo").'
                                <label for="form">Nombre del documento</label>
                                <div class="form-group">
                                    '.form_input(['name'=>'nombre-documento', 'placeholder'=>'Nombre de documento', 'class'=>'form-control border-color-1', 'required'=>'required']).'
                                    <input type="hidden" name="categoria" value="'.$id_subcategoria.'" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="form">Seleccione un documento</label>
                                    <div class="input-icon-append">
                                        <div class="custom-file">
                                            <input type="file" name="documento" class="custom-file-input" id="customFile">
                                        </div>
                                    </div>
                                </div>
                                '.form_input(['name'=>"categoria", 'class'=>"form-control", 'type'=>"hidden", "value"=>$id_subcategoria]).'
                                <br>
                                '.form_submit('Enviar', 'Agregar', array('class'=>'btn btn-primary')).'
                              '.form_close().'
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            ';
            return $html;
        }//end function modal_nuevo_archivo
    }//end if !function_exists

    if (!function_exists('modal_editar_curso')) {
        function modal_editar_curso($id_curso, $curso, $descripcion){
            $html = '
                <div class="modal fade " id="editarCurso_'.$id_curso.'" tabindex="-1" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="panel-heading bg-color-1 border-color-1">
                          <h3 class="panel-title">Editar curso</h3>
                        </div>
                        <div class="panel-body">
                            <div class="homeContactContent">
                                '.form_open("panel/cursos_editar/curso_editar").'
                                <div class="form-group">
                                      '.form_input(['name'=>'curso', 'class'=>'form-control border-color-1', 'value'=>$curso]).'
                                      <input type="hidden" name="id-curso" value="'.$id_curso.'" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <!-- <i class="fa fa-comments" aria-hidden="true"></i> -->
                                    <!-- <textarea class="form-control border-color-4" placeholder="Write message"></textarea> -->
                                  '.form_textarea(['name'=>'descripcion', 'placeholder'=>'Descripción', 'class'=>'form-control border-color-4', 'value'=>$descripcion]).'
                                </div>
                                <br>
                                <!-- <button type="submit" class="btn btn-primary">Send Message</button> -->
                                '.form_submit('Editar', 'Editar', array('class'=>'btn btn-primary')).'
                              '.form_close().'
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
            ';
            return $html;
        }//end function modal_editar_curso
    }//end if !function_exists

    if (!function_exists('modal_editar_subcategoria')) {
        function modal_editar_subcategoria($id_categoria, $categoria){
            $html = '
                <div class="modal fade " id="editarSubcategoria_'.$id_categoria.'" tabindex="-1" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="panel-heading bg-color-1 border-color-1">
                          <h3 class="panel-title">Editar Subcategoria</h3>
                        </div>
                        <div class="panel-body">
                            <div class="homeContactContent">
                                '.form_open("panel/cursos_editar/subcategoria_editar").'
                                <div class="form-group">
                                      '.form_input(['name'=>'subcategoria', 'class'=>'form-control border-color-1', 'value'=>$categoria]).'
                                      <input type="hidden" name="id-subcategoria" value="'.$id_categoria.'" />
                                </div>
                                <br>
                                <!-- <button type="submit" class="btn btn-primary">Send Message</button> -->
                                '.form_submit('Editar', 'Editar', array('class'=>'btn btn-primary')).'
                              '.form_close().'
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
            ';
            return $html;
        }//end function modal_editar_curso
    }//end if !function_exists
?>
