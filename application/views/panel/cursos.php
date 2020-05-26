<div id="buttons">
    <a href='#loginModal' data-toggle="modal" ><button type="button" class="btn btn-outline-info"><i class="fa fa-plus"></i><span>Nuevo</span></button></a>
</div>
<br>
<?php
    foreach ($cursos_activos as $row) {
        echo'
            <div class="col-sm-6 col-xs-12">
                <a href="'.base_url('principal/'.$this->siid->TAREA_SUBCATEGORIAS.'/'.$row->id_curso).'">
                    <div class="media servicesStyle" aria-hidden="true">
                        <span class="media-left bg-color-1">
                          <i class="fa fa-briefcase  bg-color-1" aria-hidden="true"></i>
                        </span>
                        <div class="media-body">
                          <h3 class="media-heading color-1">'.$row->curso.'</h3>
                          <p>'.$row->descripcion.'</p>
                        </div>
                    </div>
                </a>
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

        <div class="panel-heading bg-color-1 border-color-1">
          <h3 class="panel-title">Curso nuevo</h3>
        </div>
        <div class="panel-body">
            <div class="homeContactContent">
              <?php echo form_open("panel/cursos/curso_nuevo") ?>
                <div class="form-group">
                  <!-- <i class="fa fa-user"></i> -->
                  <!-- <input type="text" class="form-control border-color-1" id="first-name-1" placeholder="First name"> -->
                  <?php
                      $curso = array('name'=>'curso', 'placeholder'=>'Nombre curso', 'class'=>'form-control border-color-1', 'required'=>'required' );
                      echo form_input($curso);
                  ?>
                </div>
                <br>
                <div class="form-group">
                  <!-- <i class="fa fa-comments" aria-hidden="true"></i> -->
                  <!-- <textarea class="form-control border-color-4" placeholder="Write message"></textarea> -->
                  <?php
                      $descripcion = array('name'=>'descripcion', 'placeholder'=>'Descripción', 'class'=>'form-control border-color-4');
                      echo form_textarea($descripcion);
                  ?>
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
