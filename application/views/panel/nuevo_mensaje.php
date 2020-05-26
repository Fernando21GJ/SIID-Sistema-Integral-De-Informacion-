	   <div class="col-sm-5 col-xs-12">
	    <?php echo form_open(base_url('panel/Nuevo_mensaje/enviar_mensaje'),array('class' =>'form-group','role' => 'form' )); ?>
          <div class="homeContactContent">

              <div class="form-group">
                  <label for="">Profesores</label>
                  <div class="bookingDrop">
                    <select name="usu" id="guiest_id3" class="form-control border-color-4">
					<option value="0">Seleccione un profesor</option>
						<?php
						 foreach ($usuario as $usuarios) {
								echo "
									 <option value=".$usuarios['id_usuario'].">".$usuarios['nombre']." ".$usuarios['paterno']." ".$usuarios['materno']."</option>";

							}


						?>
					  </select>
                  </div>
              </div></br>
              <div class="form-group">
                <i class="" aria-hidden="true"></i>
                 <?php
                      $asunto = array('name'=>'asu', 'type'=>'text', 'placeholder'=>'Asunto', 'class'=>'form-control border-color-8', 'required'=>'required' );
                      echo form_input($asunto);
                  ?>
				</br>
				<!-- <input type="file" name="arch" class="btn-social btn-facebook-filled btn-rounded"  /> -->

			  </div>

          </div>
        </div>
        <div class="col-sm-5 col-xs-12">
          <div class="homeContactContent"></br>

              <div class="form-group">
                <i class="fa fa-comments" aria-hidden="true"></i>
				<?php
                      $mensaje = array('name'=>'mesa', 'class'=>'form-control border-color-4 ', 'placeholder'=>'Escribir mensaje' );
                      echo form_textarea($mensaje);
                  ?>

              </div>
              </br>
			  </br>
			   <div class="cart-button" aling="center">
				</br></br></br>
				<?php echo form_submit('Enviar', 'Enviar', array('class'=>'btn btn-outline-info')) ?>
				<?php echo form_close(); ?>
				</div>
			  </br></br></br>

          </div>
        </div>
