<br>
<?php
  if($editar_usuario!=null){
      foreach ($editar_usuario as $row) {
        if($this->session->rol==1){
          echo'
            <h3>'.$row->nombre.' '.$row->paterno.' '.$row->materno.'</h3><br>';
            if($row->horario!=null){
              echo '
              <div id="buttons" style="float:right;">
                  <a href="'.base_url('horarios/'.$row->horario).'" download="'.$row->horario.'"><button type="button" class="btn btn-outline-info"><span>Descargar horario</span></button></a>
                  ';
                  $componentes=array('enctype' =>  "multipart/form-data",'style'=>'float:right;'); echo  form_open("panel/docente_editar/bootear_contra",$componentes);
                  echo form_input(array('type'=>'submit','value'=>'Reestablecer contraseña','class'=>'btn btn-primary'));
                  echo form_close();
                  echo '
              </div>
              ';
            }else{
              echo '
              <div>
                  <p style="color: red;">Usuario sin horario</p>
              </div>
              <div id="buttons" style="float:right;">
              ';
                $componentes=array('enctype' =>  "multipart/form-data",'style'=>'float:right;'); echo  form_open("panel/docente_editar/bootear_contra",$componentes);
                echo form_input(array('type'=>'submit','value'=>'Reestablecer contraseña','class'=>'btn btn-primary'));
                echo form_close();
                echo '
              </div>
              ';
            }
            switch ($row->rol) {
              case 1:
                  echo '<h4>Tipo de usuario : Administrador ';
                  if($row->tutor==1){
                    echo '(Tutor)</h4>';
                  }else{
                    echo '';
                  }
                break;
              case 2:
                  echo '<h4>Tipo de usuario : Docente ';
                  if($row->tutor==1){
                    echo '(Tutor)</h4>';
                  }else{
                    echo '';
                  }
                break;
              case 3:
                  echo '<h4>Tipo de usuario : Invitado ';
                  if($row->tutor==1){
                    echo '(Tutor)</h4>';
                  }else{
                    echo '';
                  }
                break;
              default:
                // code...
                break;
            }
            echo '<h4>Correo : '.$row->email.'</h4>';
            if($especialidades!=null){
              echo '<h4>Especialidades: </h4>';
              foreach ($especialidades as $esp) {
                echo '<a class="btn btn-xl btn-outline-primary" style="margin: 5px;" onclick="mostrarAlertaEliminarDocumento('.$esp->ide.','.$row->id_usuario.')">'.$esp->nombre_esp.'&nbsp <i class="fa fa-times" ></i></a>';
              }
            }
            echo '<br><br>
            <div class="row">
              <div class="col-lg-12 col-xs-12" style="-webkit-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);-moz-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);">
                <div class="homeContactContent">
                <br>';
                  $componentes=array('enctype' =>  "multipart/form-data"); echo  form_open("panel/docente_editar/editar_informacion_personal",$componentes);
            echo '<h4>Actualizar información de usuario</h4>
            <div class="col-lg-12">
              <div class="col-lg-6">
                <div class="form-group"><!--nombre-->
                  <i class="fa fa-use"></i>
                  <div class="col-lg-12">
                    <div class="col-lg-2">
                      <label>Nombre</label>
                    </div>
                    <div class="col-lg-10">';
                      echo form_input(array('class' => 'form-control border-color-4', 'id' => 'nombre', 'placeholder' => 'Nombre', 'name' => 'nombre' ,'value' => $row->nombre));
                    echo '</div>
                  </div><br><br>
                </div>
                <div class="form-group"><!--ap-->
                  <div class="col-lg-12">
                    <div class="col-lg-4">
                      <label>Apellido paterno</label>
                    </div>
                    <div class="col-lg-8">';
                      echo form_input(array('class' => 'form-control border-color-4', 'id' => 'paterno', 'placeholder' => 'Apellido paterno', 'name' => 'paterno' ,'value' => $row->paterno));
                    echo '
                    </div>
                  </div><br><br>
                </div>
                <div class="form-group"><!--am-->
                  <div class="col-lg-12">
                    <div class="col-lg-4">
                      <label>Apellido materno</label>
                    </div>
                    <div class="col-lg-8">';
                      echo form_input(array('class' => 'form-control border-color-4', 'id' => 'meterno', 'placeholder' => 'Apellido materno', 'name' => 'materno','value' => $row->materno));
                    echo '
                    </div>
                  </div><br><br>
                </div>
                <div class="form-group"><!--ap-->
                  <div class="col-lg-12">
                    <div class="col-lg-4">
                      <label>Seleccione el tipo de usuario</label>
                    </div>
                    <div class="col-lg-8">';
                        $opciones = array(
                                      '1' => 'Administrador',
                                      '2' => 'Profesor',
                                      '3' => 'Invitado'
                                  );
                        $extra = array('id'=>'guiest_id16' ,'class'=>'form-control border-color-4', 'required'=>'required');
                        switch ($row->rol) {
                          case 1:
                            echo form_dropdown('rol',$opciones,'1',$extra);
                            break;
                          case 2:
                            echo form_dropdown('rol',$opciones,'2',$extra);
                            break;
                          case 3:
                            echo form_dropdown('rol',$opciones,'3',$extra);
                            break;
                        }

                        echo '
                        </div>
                      </div><br><br>
                    </div>
                    <div class="form-group"><!--nombre-->
                      <i class="fa fa-use"></i>
                      <div class="col-lg-12">
                        <div class="col-lg-2">
                          <label>Tutor</label>
                        </div>
                        <div class="col-lg-10">';
                        $opciones = array(
                                      '-1' => 'No',
                                      '1' => 'Si'
                                  );
                        $extra = array('id'=>'guiest_id16' ,'class'=>'form-control border-color-4', 'required'=>'required');
                        if($row->tutor==-1){
                          echo form_dropdown('tutoria',$opciones,'-1',$extra);
                        }else{
                          echo form_dropdown('tutoria',$opciones,'1',$extra);
                        }
                        echo '</div>
                      </div><br><br>
                    </div>
                <div class="form-group"><!--correo-->
                  <i class="fa fa-use"></i>
                  <div class="col-lg-12"><br>
                    <div class="col-lg-2">
                      <label>Correo</label>
                    </div>
                    <div class="col-lg-10">';
                      echo form_input(array('type' => 'email' ,'class' => 'form-control border-color-4', 'id' => 'correoe', 'placeholder' => 'usuario@siid.com', 'name' => 'correo' ,'value'=>$row->email));
                    echo '
                    </div>
                  </div><br><br>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="col-lg-12"><!--opc-->
                    ';
                    if($especialidades!=null){
                      if(count($especialidades)!=count($tabla_especialidad)){
                        $i=0;
                        $new_especialidades= new SplFixedArray(count($tabla_especialidad));
                        foreach ($tabla_especialidad as $tabla_esp) {
                          foreach ($especialidades as $esp) {
                            if($tabla_esp->id_especialidad==$esp->ide){
                              $new_especialidades[$i]=1;
                              break;
                            }else{
                              $new_especialidades[$i]=0;
                            }
                          }
                          $i++;
                        }
                        $i=0;
                        echo '<label>Agregue más especialidades si así lo desea :</label>
                        <br><br>
                        <p>';
                        foreach ($tabla_especialidad as $tabla_esp) {
                          if($new_especialidades[$i]==0){
                            echo form_checkbox('especialidad[]',$tabla_esp->id_especialidad).'<label>'.$tabla_esp->especialidad.'</label><br />';
                          }
                          $i++;
                        }
                          /*for($j=0;$j<count($tabla_especialidad);$j++){
                            echo $new_especialidades[$j];
                          }*/
                      }else{
                        echo '<label>No hay especialidades disponibles</label>
                        <br><br>
                        <p>';
                      }
                    }else{
                        echo '<label>Agregue más especialidades si así lo desea :</label>
                        <br><br>
                        <p>';
                        foreach ($tabla_especialidad as $tabla_esp) {
                            echo form_checkbox('especialidad[]',$tabla_esp->id_especialidad).'<label>'.$tabla_esp->especialidad.'</label><br />';
                        }
                        /*$opcion1=array('name' => 'especialidad[]','value' => '1');
                        $opcion2=array('name' => 'especialidad[]','value' => '2');
                        $opcion3=array('name' => 'especialidad[]','value' => '3');
                        $opcion4=array('name' => 'especialidad[]','value' => '4');
                        $opcion5=array('name' => 'especialidad[]','value' => '5');
                        $opcion6=array('name' => 'especialidad[]','value' => '6');
                        $opcion7=array('name' => 'especialidad[]','value' => '7');
                        $opcion8=array('name' => 'especialidad[]','value' => '8');
                        $opcion9=array('name' => 'especialidad[]','value' => '9');
                        $opcion10=array('name' => 'especialidad[]','value' => '10');
                        $opcion11=array('name' => 'especialidad[]','value' => '11');
                        $opcion12=array('name' => 'especialidad[]','value' => '12');
                        $opcion13=array('name' => 'especialidad[]','value' => '13');
                        $opcion14=array('name' => 'especialidad[]','value' => '14');
                        $opcion15=array('name' => 'especialidad[]','value' => '15');
                        echo form_checkbox($opcion1).'<label>Aplicación de las TI</label><br />';
                        echo form_checkbox($opcion2).'<label>Base de Datos</label><br />';
                        echo form_checkbox($opcion3).'<label>Ciencias Básicas</label><br />';
                        echo form_checkbox($opcion4).'<label>Desarrollo Humano</label><br />';
                        echo form_checkbox($opcion5).'<label>Emprendimiento y Empleabilidad</label><br />';
                        echo form_checkbox($opcion6).'<label>Fundamentos de TI</label><br />';
                        echo form_checkbox($opcion7).'<label>Inglés</label><br />';
                        echo form_checkbox($opcion8).'<label>Ingeniería de Software</label><br />';
                        echo form_checkbox($opcion9).'<label>Inteligencia de Negocios</label><br />';
                        echo form_checkbox($opcion10).'<label>Programación Estructurada</label><br />';
                        echo form_checkbox($opcion11).'<label>Programación Orientada a Objetos</label><br />';
                        echo form_checkbox($opcion12).'<label>Programación Web</label><br />';
                        echo form_checkbox($opcion13).'<label>Procesos Administrativos en TI</label><br />';
                        echo form_checkbox($opcion14).'<label>Redes</label><br />';
                        echo form_checkbox($opcion15).'<label>Seguridad Informática</label><br />';*/
                    }
                    echo '
                    </p>
                  </div><br>
                </div>
              </div>
            </div>
          <div class="col-sm-12 col-xs-12" style="text-align:right;">
            <div class="container">
              <div id="buttons">
               <p class="space-bottom">';
                echo form_submit('Enviar', 'Guardar', array('class'=>'btn btn-primary'));
               echo '
               </p>
                <div class="space-50">&nbsp;</div>
              </div>
            </div>
          </div>';
              echo form_close();
               echo '</div>
             </div>

             <!-- Separador -->
             <div class="col-sm-12 col-xs-12" style="text-align:right;">
               <div class="container">
                 <div id="buttons">
                  <p class="space-bottom">';
                  echo '
                  </p>
                   <div class="space-50">&nbsp;</div>
                 </div>
               </div>
             </div>
             <!-- Separador -->

       <div class="col-lg-12 col-xs-12"style="-webkit-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);-moz-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);">
        <div class="homeContactContent">
               <br>';
               $componentes=array('enctype' =>  "multipart/form-data");
               echo form_open("panel/docente_editar/editar_password",$componentes);
              echo '<h4>Cambiar contraseña</h4>
           <div class="col-lg-12">
             <div class="col-lg-6">
               <div class="form-group"><!--contraseña-->
                 <div class="col-lg-12"><br>
                   <div class="col-lg-4">
                     <label>Contraseña</label>
                   </div>
                   <div class="col-lg-8">';
                     echo form_input(array('type' => 'password' ,'class' => 'form-control border-color-4', 'id' => 'contrasenia', 'placeholder' => 'Contraseña', 'name' => 'contrasenia'));
                   echo '
                   </div>
                 </div><br><br>
               </div>
             </div>
             <div class="col-lg-6">
               <div class="form-group"><!--confirmar contraseña-->
                 <div class="col-lg-12"><br>
                   <div class="col-lg-4">
                     <label>Confirmar contraseña</label>
                   </div>
                   <div class="col-lg-8">';
                     echo form_input(array('type' => 'password' ,'class' => 'form-control border-color-4', 'id' => 'contraseniac', 'placeholder' => 'Contraseña', 'name' => 'contraseniaC'));
                   echo '</div>
                 </div><br><br>
               </div>
             </div>
           </div>
         <div class="col-sm-12 col-xs-12" style="text-align:right;">
           <div class="container"><br>
             <div id="buttons">
              <p class="space-bottom">';
               echo form_submit('Enviar', 'Guardar', array('class'=>'btn btn-primary'));
              echo '
              </p>
               <div class="space-50">&nbsp;</div>
             </div>
           </div>
         </div>';
             echo form_close();
              echo '
        </div>
      </div>

      <div class="col-sm-12 col-xs-12" style="text-align:right;">
        <div class="container">
          <div id="buttons">
           <p class="space-bottom">';
           echo '
           </p>
            <div class="space-50">&nbsp;</div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 col-xs-12" style="-webkit-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);-moz-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);">
       <div class="homeContactContent">
              <br>';
                echo form_open_multipart("panel/docente_editar/actualizar_horario");
          echo '<h4>Subir horario</h4>
          <div class="col-lg-12">
            <div class="col-lg-6">
                <div class="form-group"><!--nombre-->
                  <i class="fa fa-use"></i>
                  <div class="col-lg-12">
                    <div class="col-lg-2">
                      <label>Horario</label>
                    </div>
                    <div class="col-lg-10">';
                      $horario = array('name' => 'horario','type' => 'file','class'=>'form-control border-color-4', 'required'=>'required' );
                      echo form_input($horario);
                    echo '</div>
                  </div><br><br>
                </div>
              </div>
            </div>
            <div class="col-lg-6">

            </div>
          </div>
        <div class="col-sm-12 col-xs-12" style="text-align:right;">
          <div class="container">
            <div id="buttons">
             <p class="space-bottom">';
              echo form_submit('Enviar', 'Guardar', array('class'=>'btn btn-primary'));
             echo '
             </p>
              <div class="space-50">&nbsp;</div>
            </div>
          </div>
        </div>';
            echo form_close();
             echo '
       </div>
     </div>

    </div>
            ';
        }else{
          echo'
            <h3>'.$row->nombre.' '.$row->paterno.' '.$row->materno.'</h3><br>';
            switch ($row->rol) {
              case 1:
                  echo '<h4>Tipo de usuario : Administrador ';
                  if($row->tutor==1){
                    echo '(Tutor)</h4>';
                  }else{
                    echo '';
                  }
                break;
              case 2:
                  echo '<h4>Tipo de usuario : Docente ';
                  if($row->tutor==1){
                    echo '(Tutor)</h4>';
                  }else{
                    echo '';
                  }
                break;
              case 3:
                  echo '<h4>Tipo de usuario : Invitado ';
                  if($row->tutor==1){
                    echo '(Tutor)</h4>';
                  }else{
                    echo '';
                  }
                break;
              default:
                // code...
                break;
            }
            echo '<h4>Correo : '.$row->email.'</h4>';
            if($especialidades!=null){
              echo '<h4>Especialidades: </h4>';
              foreach ($especialidades as $esp) {
                echo '<a class="btn btn-xl btn-outline-primary" style="margin: 5px;" onclick="mostrarAlertaEliminarDocumento('.$esp->ide.','.$row->id_usuario.')">'.$esp->nombre_esp.'&nbsp <i class="fa fa-times" ></i></a>';
              }
            }
            echo '<br><br>
            <div class="row">
              <div class="col-lg-12 col-xs-12" style="-webkit-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);-moz-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);">
                <div class="homeContactContent">
                <br>';
                  $componentes=array('enctype' =>  "multipart/form-data"); echo  form_open("panel/docente_editar/editar_informacion_personal",$componentes);
            echo '<h4>Actualizar información de usuario</h4>
            <div class="col-lg-12">
              <div class="col-lg-6">
                <div class="form-group"><!--nombre-->
                  <i class="fa fa-use"></i>
                  <div class="col-lg-12">
                    <div class="col-lg-2">
                      <label>Nombre</label>
                    </div>
                    <div class="col-lg-10">';
                      echo form_input(array('class' => 'form-control border-color-4', 'id' => 'nombre', 'placeholder' => 'Nombre', 'name' => 'nombre' ,'value' => $row->nombre));
                    echo '</div>
                  </div><br><br>
                </div>
                <div class="form-group"><!--ap-->
                  <div class="col-lg-12">
                    <div class="col-lg-4">
                      <label>Apellido paterno</label>
                    </div>
                    <div class="col-lg-8">';
                      echo form_input(array('class' => 'form-control border-color-4', 'id' => 'paterno', 'placeholder' => 'Apellido paterno', 'name' => 'paterno' ,'value' => $row->paterno));
                    echo '
                    </div>
                  </div><br><br>
                </div>
                <div class="form-group"><!--am-->
                  <div class="col-lg-12">
                    <div class="col-lg-4">
                      <label>Apellido materno</label>
                    </div>
                    <div class="col-lg-8">';
                      echo form_input(array('class' => 'form-control border-color-4', 'id' => 'meterno', 'placeholder' => 'Apellido materno', 'name' => 'materno','value' => $row->materno));
                    echo '
                    </div>
                  </div><br><br>
                </div>
                <div class="form-group"><!--ap-->
                  <div class="col-lg-12">
                    <div class="col-lg-4">
                      <label>Seleccione el tipo de usuario</label>
                    </div>
                    <div class="col-lg-8">';
                        $opciones = array(
                                      '1' => 'Administrador',
                                      '2' => 'Profesor',
                                      '3' => 'Invitado'
                                  );
                        $extra = array('id'=>'guiest_id16' ,'class'=>'form-control border-color-4', 'required'=>'required');
                        switch ($row->rol) {
                          case 1:
                            echo form_dropdown('rol',$opciones,'1',$extra);
                            break;
                          case 2:
                            echo form_dropdown('rol',$opciones,'2',$extra);
                            break;
                          case 3:
                            echo form_dropdown('rol',$opciones,'3',$extra);
                            break;
                        }

                        echo '
                        </div>
                      </div><br><br>
                    </div>
                    <div class="form-group"><!--nombre-->
                      <i class="fa fa-use"></i>
                      <div class="col-lg-12">
                        <div class="col-lg-2">
                          <label>Tutor</label>
                        </div>
                        <div class="col-lg-10">';
                        $opciones = array(
                                      '-1' => 'No',
                                      '1' => 'Si'
                                  );
                        $extra = array('id'=>'guiest_id16' ,'class'=>'form-control border-color-4', 'required'=>'required');
                        if($row->tutor==-1){
                          echo form_dropdown('tutoria',$opciones,'-1',$extra);
                        }else{
                          echo form_dropdown('tutoria',$opciones,'1',$extra);
                        }
                        echo '</div>
                      </div><br><br>
                    </div>
                <div class="form-group"><!--correo-->
                  <i class="fa fa-use"></i>
                  <div class="col-lg-12"><br>
                    <div class="col-lg-2">
                      <label>Correo</label>
                    </div>
                    <div class="col-lg-10">';
                      echo form_input(array('type' => 'email' ,'class' => 'form-control border-color-4', 'id' => 'correoe', 'placeholder' => 'usuario@siid.com', 'name' => 'correo' ,'value'=>$row->email));
                    echo '
                    </div>
                  </div><br><br>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <div class="col-lg-12"><!--opc-->
                    ';
                    if($especialidades!=null){
                      if(count($especialidades)!=count($tabla_especialidad)){
                        $i=0;
                        $new_especialidades= new SplFixedArray(count($tabla_especialidad));
                        foreach ($tabla_especialidad as $tabla_esp) {
                          foreach ($especialidades as $esp) {
                            if($tabla_esp->id_especialidad==$esp->ide){
                              $new_especialidades[$i]=1;
                              break;
                            }else{
                              $new_especialidades[$i]=0;
                            }
                          }
                          $i++;
                        }
                        $i=0;
                        echo '<label>Agregue más especialidades si así lo desea :</label>
                        <br><br>
                        <p>';
                        foreach ($tabla_especialidad as $tabla_esp) {
                          if($new_especialidades[$i]==0){
                            echo form_checkbox('especialidad[]',$tabla_esp->id_especialidad).'<label>'.$tabla_esp->especialidad.'</label><br />';
                          }
                          $i++;
                        }
                          /*for($j=0;$j<count($tabla_especialidad);$j++){
                            echo $new_especialidades[$j];
                          }*/
                      }else{
                        echo '<label>No hay especialidades disponibles</label>
                        <br><br>
                        <p>';
                      }
                    }else{
                        echo '<label>Agregue más especialidades si así lo desea :</label>
                        <br><br>
                        <p>';
                        foreach ($tabla_especialidad as $tabla_esp) {
                            echo form_checkbox('especialidad[]',$tabla_esp->id_especialidad).'<label>'.$tabla_esp->especialidad.'</label><br />';
                        }
                        /*$opcion1=array('name' => 'especialidad[]','value' => '1');
                        $opcion2=array('name' => 'especialidad[]','value' => '2');
                        $opcion3=array('name' => 'especialidad[]','value' => '3');
                        $opcion4=array('name' => 'especialidad[]','value' => '4');
                        $opcion5=array('name' => 'especialidad[]','value' => '5');
                        $opcion6=array('name' => 'especialidad[]','value' => '6');
                        $opcion7=array('name' => 'especialidad[]','value' => '7');
                        $opcion8=array('name' => 'especialidad[]','value' => '8');
                        $opcion9=array('name' => 'especialidad[]','value' => '9');
                        $opcion10=array('name' => 'especialidad[]','value' => '10');
                        $opcion11=array('name' => 'especialidad[]','value' => '11');
                        $opcion12=array('name' => 'especialidad[]','value' => '12');
                        $opcion13=array('name' => 'especialidad[]','value' => '13');
                        $opcion14=array('name' => 'especialidad[]','value' => '14');
                        $opcion15=array('name' => 'especialidad[]','value' => '15');
                        echo form_checkbox($opcion1).'<label>Aplicación de las TI</label><br />';
                        echo form_checkbox($opcion2).'<label>Base de Datos</label><br />';
                        echo form_checkbox($opcion3).'<label>Ciencias Básicas</label><br />';
                        echo form_checkbox($opcion4).'<label>Desarrollo Humano</label><br />';
                        echo form_checkbox($opcion5).'<label>Emprendimiento y Empleabilidad</label><br />';
                        echo form_checkbox($opcion6).'<label>Fundamentos de TI</label><br />';
                        echo form_checkbox($opcion7).'<label>Inglés</label><br />';
                        echo form_checkbox($opcion8).'<label>Ingeniería de Software</label><br />';
                        echo form_checkbox($opcion9).'<label>Inteligencia de Negocios</label><br />';
                        echo form_checkbox($opcion10).'<label>Programación Estructurada</label><br />';
                        echo form_checkbox($opcion11).'<label>Programación Orientada a Objetos</label><br />';
                        echo form_checkbox($opcion12).'<label>Programación Web</label><br />';
                        echo form_checkbox($opcion13).'<label>Procesos Administrativos en TI</label><br />';
                        echo form_checkbox($opcion14).'<label>Redes</label><br />';
                        echo form_checkbox($opcion15).'<label>Seguridad Informática</label><br />';*/
                    }
                    echo '
                    </p>
                  </div><br>
                </div>
              </div>
            </div>
          <div class="col-sm-12 col-xs-12" style="text-align:right;">
            <div class="container">
              <div id="buttons">
               <p class="space-bottom">';
                echo form_submit('Enviar', 'Guardar', array('class'=>'btn btn-primary'));
               echo '
               </p>
                <div class="space-50">&nbsp;</div>
              </div>
            </div>
          </div>';
              echo form_close();
               echo '</div>
             </div>

             <!-- Separador -->
             <div class="col-sm-12 col-xs-12" style="text-align:right;">
               <div class="container">
                 <div id="buttons">
                  <p class="space-bottom">';
                  echo '
                  </p>
                   <div class="space-50">&nbsp;</div>
                 </div>
               </div>
             </div>
             <!-- Separador -->

       <div class="col-lg-12 col-xs-12"style="-webkit-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);-moz-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);">
        <div class="homeContactContent">
               <br>';
               $componentes=array('enctype' =>  "multipart/form-data");
               echo form_open("panel/docente_editar/editar_password",$componentes);
              echo '<h4>Cambiar contraseña</h4>
           <div class="col-lg-12">
             <div class="col-lg-6">
               <div class="form-group"><!--contraseña-->
                 <div class="col-lg-12"><br>
                   <div class="col-lg-4">
                     <label>Contraseña</label>
                   </div>
                   <div class="col-lg-8">';
                     echo form_input(array('type' => 'password' ,'class' => 'form-control border-color-4', 'id' => 'contrasenia', 'placeholder' => 'Contraseña', 'name' => 'contrasenia'));
                   echo '
                   </div>
                 </div><br><br>
               </div>
             </div>
             <div class="col-lg-6">
               <div class="form-group"><!--confirmar contraseña-->
                 <div class="col-lg-12"><br>
                   <div class="col-lg-4">
                     <label>Confirmar contraseña</label>
                   </div>
                   <div class="col-lg-8">';
                     echo form_input(array('type' => 'password' ,'class' => 'form-control border-color-4', 'id' => 'contraseniac', 'placeholder' => 'Contraseña', 'name' => 'contraseniaC'));
                   echo '</div>
                 </div><br><br>
               </div>
             </div>
           </div>
         <div class="col-sm-12 col-xs-12" style="text-align:right;">
           <div class="container"><br>
             <div id="buttons">
              <p class="space-bottom">';
               echo form_submit('Enviar', 'Guardar', array('class'=>'btn btn-primary'));
              echo '
              </p>
               <div class="space-50">&nbsp;</div>
             </div>
           </div>
         </div>';
             echo form_close();
              echo '
        </div>
      </div>

      <div class="col-sm-12 col-xs-12" style="text-align:right;">
        <div class="container">
          <div id="buttons">
           <p class="space-bottom">';
           echo '
           </p>
            <div class="space-50">&nbsp;</div>
          </div>
        </div>
      </div>
    </div>
            ';
        }
      }
    }else{
      echo '
      <h5>Llene el siguiente formulario con los datos del usuario que desea agregar</h5><br>
      <div class="row">
        <div class="col-lg-12 col-xs-12" style="-webkit-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);-moz-box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);box-shadow: 8px 8px 29px 2px rgba(0,0,0,0.75);">
          <div class="homeContactContent">
          <br><br><br>';
            $componentes=array('enctype' =>  "multipart/form-data"); echo  form_open("panel/docentes/usuario_nuevo",$componentes);
      echo '<div class="col-lg-12">
        <div class="col-lg-6">
          <div class="form-group"><!--nombre-->
            <i class="fa fa-use"></i>
            <div class="col-lg-12">
              <div class="col-lg-2">
                <label>Nombre</label>
              </div>
              <div class="col-lg-10">';
                echo form_input(array('class' => 'form-control border-color-4', 'id' => 'nombre', 'placeholder' => 'Nombre', 'name' => 'nombre'));
              echo '</div>
            </div><br><br>
          </div>
          <div class="form-group"><!--ap-->
            <div class="col-lg-12">
              <div class="col-lg-4">
                <label>Apellido paterno</label>
              </div>
              <div class="col-lg-8">';
                echo form_input(array('class' => 'form-control border-color-4', 'id' => 'paterno', 'placeholder' => 'Apellido paterno', 'name' => 'paterno'));
              echo '
              </div>
            </div><br><br>
          </div>
          <div class="form-group"><!--am-->
            <div class="col-lg-12">
              <div class="col-lg-4">
                <label>Apellido materno</label>
              </div>
              <div class="col-lg-8">';
                echo form_input(array('class' => 'form-control border-color-4', 'id' => 'meterno', 'placeholder' => 'Apellido materno', 'name' => 'materno'));
              echo '
              </div>
            </div><br><br>
          </div>
          <div class="form-group"><!--am-->
            <div class="col-lg-12">
              <div class="col-lg-4">
                <label>Seleccione el tipo de usuario</label>
              </div>
              <div class="col-lg-8">';
                  $opciones = array(
                                '1' => 'Administrador',
                                '2' => 'Profesor',
                                '3' => 'Invitado'
                            );
                  $extra = array('id'=>'guiest_id16' ,'class'=>'form-control border-color-4', 'required'=>'required');
                  echo form_dropdown('rol',$opciones,'1',$extra);
                  echo '
                  </div>
                </div><br><br>
              </div>
              <div class="form-group"><!--nombre-->
                <i class="fa fa-use"></i>
                <div class="col-lg-12">
                  <div class="col-lg-2">
                    <label>Tutor</label>
                  </div>
                  <div class="col-lg-10">';
                  $opciones = array(
                                '-1' => 'No',
                                '1' => 'Si'
                            );
                  $extra = array('id'=>'guiest_id16' ,'class'=>'form-control border-color-4', 'required'=>'required');
                  echo form_dropdown('tutoria',$opciones,'-1',$extra);
                  echo '</div>
                </div><br><br>
              </div>
          <div class="form-group"><!--correo-->
            <i class="fa fa-use"></i>
            <div class="col-lg-12"><br>
              <div class="col-lg-2">
                <label>Correo</label>
              </div>
              <div class="col-lg-10">';
                echo form_input(array('type' => 'email' ,'class' => 'form-control border-color-4', 'id' => 'correoe', 'placeholder' => 'usuario@siid.com', 'name' => 'correo'));
              echo '
              </div>
            </div><br><br>
          </div>
          <div class="form-group"><!--contraseña-->
            <div class="col-lg-12"><br>
              <div class="col-lg-4">
                <label>Contraseña</label>
              </div>
              <div class="col-lg-8">';
                echo form_input(array('type' => 'password' ,'class' => 'form-control border-color-4', 'id' => 'contrasenia', 'placeholder' => 'Contraseña', 'name' => 'contrasenia'));
              echo '
              </div>
            </div><br><br>
          </div>
          <div class="form-group"><!--confirmar contraseña-->
            <div class="col-lg-12"><br>
              <div class="col-lg-4">
                <label>Confirmar contraseña</label>
              </div>
              <div class="col-lg-8">';
                echo form_input(array('type' => 'password' ,'class' => 'form-control border-color-4', 'id' => 'contraseniac', 'placeholder' => 'Contraseña', 'name' => 'contraseniaC'));
              echo '</div>
            </div><br><br>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <div class="col-lg-12"><!--opc-->
              <label>Seleccione las opciones en las que se especializa :</label>
              <br><br>
              <p>';
                foreach ($tabla_especialidad as $tabla_esp) {
                    echo form_checkbox('especialidad[]',$tabla_esp->id_especialidad).'<label>'.$tabla_esp->especialidad.'</label><br />';
                }
                /*$opcion1=array('name' => 'especialidad[]','value' => '1');
                $opcion2=array('name' => 'especialidad[]','value' => '2');
                $opcion3=array('name' => 'especialidad[]','value' => '3');
                $opcion4=array('name' => 'especialidad[]','value' => '4');
                $opcion5=array('name' => 'especialidad[]','value' => '5');
                $opcion6=array('name' => 'especialidad[]','value' => '6');
                $opcion7=array('name' => 'especialidad[]','value' => '7');
                $opcion8=array('name' => 'especialidad[]','value' => '8');
                $opcion9=array('name' => 'especialidad[]','value' => '9');
                $opcion10=array('name' => 'especialidad[]','value' => '10');
                $opcion11=array('name' => 'especialidad[]','value' => '11');
                $opcion12=array('name' => 'especialidad[]','value' => '12');
                $opcion13=array('name' => 'especialidad[]','value' => '13');
                $opcion14=array('name' => 'especialidad[]','value' => '14');
                $opcion15=array('name' => 'especialidad[]','value' => '15');
                echo form_checkbox($opcion1).'<label>Aplicación de las TI</label><br />';
                echo form_checkbox($opcion2).'<label>Base de Datos</label><br />';
                echo form_checkbox($opcion3).'<label>Ciencias Básicas</label><br />';
                echo form_checkbox($opcion4).'<label>Desarrollo Humano</label><br />';
                echo form_checkbox($opcion5).'<label>Emprendimiento y Empleabilidad</label><br />';
                echo form_checkbox($opcion6).'<label>Fundamentos de TI</label><br />';
                echo form_checkbox($opcion7).'<label>Inglés</label><br />';
                echo form_checkbox($opcion8).'<label>Ingeniería de Software</label><br />';
                echo form_checkbox($opcion9).'<label>Inteligencia de Negocios</label><br />';
                echo form_checkbox($opcion10).'<label>Programación Estructurada</label><br />';
                echo form_checkbox($opcion11).'<label>Programación Orientada a Objetos</label><br />';
                echo form_checkbox($opcion12).'<label>Programación Web</label><br />';
                echo form_checkbox($opcion13).'<label>Procesos Administrativos en TI</label><br />';
                echo form_checkbox($opcion14).'<label>Redes</label><br />';
                echo form_checkbox($opcion15).'<label>Seguridad Informática</label><br />';*/
              echo '
              </p>
            </div><br>
          </div>
        </div>
      </div>
    <div class="col-sm-12 col-xs-12" style="text-align:right;">
      <div class="container">
        <div id="buttons">
         <p class="space-bottom">';
          echo form_submit('Enviar', 'Guardar', array('class'=>'btn btn-primary'));
          echo form_reset('Cancelar', 'Cancelar', array('class'=>'btn btn-primary'));
         echo '
         </p>
          <div class="space-50">&nbsp;</div>
        </div>
      </div>
    </div>';
        echo form_close();
         echo '</div>
       </div>


   </div>
      ';
    }
?>

<!-- ====================================
——— Docente_editar script
===================================== -->

<script>
function mostrarAlertaEliminarDocumento(identificador_esp_usu,id_us_esp){
    console.log(identificador_esp_usu);
    swal({
        title: '¿Esta seguro de eliminar está especialidad?',
        text: "Esta acción es permanente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'No, cancelar',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-primary',
        // buttonsStyling: false
    }).then(function () {
        window.location = "<?php echo site_url('panel/docente_editar/eliminar_especialidad/');?>"+identificador_esp_usu+'/'+id_us_esp;
    }, function (dismiss) {
        // dismiss can be 'cancel', 'overlay',
        // 'close', and 'timer'
        if (dismiss === 'cancel') {
            swal({
                title: 'Cancelado',
                text: "La especialidad sigue en su información",
                type: 'error',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }
            )
        }
    });
}//end of function mostrarAlertaEliminarDocumento
</script>
