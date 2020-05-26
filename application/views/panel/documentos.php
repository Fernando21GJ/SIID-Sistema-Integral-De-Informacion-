<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!--<div class="panel-heading">
                Collapsible Accordion Panel Group
            </div>-->
            <!-- .panel-heading -->
            <div class="panel-body">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
	                        <div class="bg-color-3 panel-heading">
	                            <h4 class="color-9 panel-title">
	                                <strong>Subir Documentos</strong>
	                            </h4>
	                        </div>
												</a>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
																<div class="row ">
																	<a href="#uploadaudio" data-toggle="modal">
																		<div class="col-sm-6 col-lg-4 col-xs-12">
																		  <div class="media featuresContent wow fadeInUp">
																		    <span class="media-left bg-color-1">
																		      <i class="fa fa-music" aria-hidden="true"></i>
																		    </span>
																		    <div class="media-body">
																		      <h3 class="media-heading color-1">Audio</h3>
																						<i class="fa fa-upload" aria-hidden="true"></i>
																		        <!--<img src="img/imgicono/1.png" alt="cart-Image">-->
																						<!--<img src="<?php //echo base_url('recursos-panel/assets/img/home/news/news-5.png') ?> alt="cart-Image"> -->
																		    </div>
																		  </div>
																		</div>
																	</a>
																	<a href="#uploadimg" data-toggle="modal">
																		<div class="col-sm-6 col-lg-4 col-xs-12">
																		  <div class="media featuresContent wow fadeInUp">
																		    <span class="media-left bg-color-2">
																		      <i class="fa fa-image" aria-hidden="true"></i>
																		    </span>
																		    <div class="media-body">
																		      <h3 class="media-heading color-2">Fotos</h3>
																					<i class="fa fa-upload" aria-hidden="true"></i>
																		      <!--<img src="img/imgicono/2.png" alt="cart-Image">-->
																		      <!--<img src="<?php //echo base_url('recursos-panel/assets/img/home/news/news-2.png')?>" alt="cart-Image"> -->
																		    </div>
																		  </div>
																		</div>
																	</a>
																	<a href="#uploadvideo" data-toggle="modal">
																		<div class="col-sm-6 col-lg-4 col-xs-12">
																		  <div class="media featuresContent wow fadeInUp">
																		    <span class="media-left bg-color-3">
																		      <i class="fa fa-film" aria-hidden="true"></i>
																		    </span>
																		    <div class="media-body">
																		      <h3 class="media-heading color-3">Videos</h3>
																					<i class="fa fa-upload" aria-hidden="true"></i>
																		      <!--<img src="img/imgicono/3.png" alt="cart-Image">-->
																		      <!--<img src="<?php //echo base_url('recursos-panel/assets/img/home/news/news-4.png')?>" alt="cart-Image"> -->
																		    </div>
																		  </div>
																		</div>
																	</a>
																	<a href="#uploadpptx" data-toggle="modal">
																		<div class="col-sm-6 col-lg-4 col-xs-12">
																		  <div class="media featuresContent wow fadeInUp">
																		    <span class="media-left bg-color-4">
																		      <i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>
																		    </span>
																		    <div class="media-body">
																		      <h3 class="media-heading color-4">Presentación</h3>
																					<i class="fa fa-upload" aria-hidden="true"></i>
																					<!--<img src="img/imgicono/4.png" alt="cart-Image">-->
																		      <!--<img src="<?php //echo base_url('recursos-panel/assets/img/home/news/news-1.png')?>" alt="cart-Image"> -->
																		    </div>
																		  </div>
																		</div>
																	</a>
																	<a href="#uploaddocx" data-toggle="modal">
																		<div class="col-sm-6 col-lg-4 col-xs-12">
																		  <div class="media featuresContent wow fadeInUp">
																		    <span class="media-left bg-color-5">
																		      <i class="fa fa-file-word-o" aria-hidden="true"></i>
																		    </span>
																		    <div class="media-body">
																		      <h3 class="media-heading color-5">Word</h3>
																					<i class="fa fa-upload" aria-hidden="true"></i>
																					<!--<img src="img/imgicono/6.png" alt="cart-Image">-->
																			    <!--<img src="<?php //echo base_url('recursos-panel/assets/img/home/news/news-3.png')?>" alt="cart-Image"> -->
																		    </div>
																		  </div>
																		</div>
																	</a>
																	<a href="#uploadother" data-toggle="modal">
																		<div class="col-sm-6 col-lg-4 col-xs-12">
																		  <div class="media featuresContent wow fadeInUp">
																		    <span class="media-left bg-color-6">
																		      <i class="fa fa-file" aria-hidden="true"></i>
																		    </span>
																		    <div class="media-body">
																		      <h3 class="media-heading color-6">Otros</h3>
																					<i class="fa fa-upload" aria-hidden="true"></i>
																					<!--<img src="img/imgicono/5.png" alt="cart-Image">-->
																			    <!--<img src="<?php //echo base_url('recursos-panel/assets/img/home/news/news-6.png') ?>" alt="cart-Image"> -->
																		    </div>
																		  </div>
																		</div>
																	</a>
																	<!--<center><button type="submit" class="btn-social btn-facebook-filled btn-rounded">Cancelar</button></center>-->
																</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
	                        <div class="bg-color-3 panel-heading">
	                            <h4 class="color-9 panel-title">
	                                <strong>Todos los documentos</strong>
	                            </h4>
	                        </div>
												</a>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
																<p>
																	Tus documentos <?php echo $this->session->nombre_completo_usuario; ?>
																</p>
																<p>
																	<table class='table table-striped'>
																		<thead class = "">
																			<th>ID</th>
																			<th>Nombre</th>
																			<th>Tipo</th>
																			<th>URL</th>
																			<th>Tamaño</th>
																			<th>Editar</th>
																			<th>Eliminar</th>

																		</thead>
																		<tbody>
																			<?php
																				foreach($documentos as $doc){
																					echo '<tr>';
																						echo '<td>'.$doc->id_documento.'</td>';
																						echo '<td>'.$doc->nombre.'</td>';
																						echo '<td>'.$doc->tipo.'</td>';
																						echo '<td>'.$doc->url.'</td>';
																						echo '<td>'.$doc->tamano.'</td>';
																						echo '<td><a href="#editar" data-toggle="modal" ><i class="fa fa-pencil" aria-hidden="true"></i></a></td>';
																						echo '<td><a href=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>';
																					echo '</tr>';
																				}
																			?>
																		</tbody>
																	</table>
																</p>
                            </div>
                        </div>
                    </div>
										<!--
										<div class="panel panel-default">
                        <div class="bg-color-3 panel-heading">
                            <h4 class="color-9 panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><strong>Collapsible Group Item #3</strong></a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
										-->
                </div>
            </div>
            <!-- .panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>



<!-- ================================
	MODALES
	     UpLoad Documentos Power Point
	==================================== -->
	<div class="modal fade customModal" id="uploadpptx" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="panel panel-default formPanel">
					<div class="panel-heading bg-color-1 border-color-1">
						<h3 class="panel-title">Elija su Presentación</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open_multipart('panel/documentos/do_upload_pptx');?>
						<div class="form-group formField">
							<?php
							$data = array('name' => 'archivo', 'title' => 'Elija su presentación', 'type' => 'file', 'class' => 'btn btn-primary btn-block bg-color-3 border-color-3', 'required'=>'required');
							echo form_input($data);
							?>
						</div>
						<!--<div class="form-group formField">
							<br>
						</div>-->
						<div class="form-group formField">
							<?php echo form_submit('guardar','Subir presentación', array('class'=>'btn btn-primary btn-block bg-color-3 border-color-3')); ?>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ================================
	     UpLoad IMAGES
	==================================== -->
	<div class="modal fade customModal" id="uploadimg" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="panel panel-default formPanel">
					<div class="panel-heading bg-color-1 border-color-1">
						<h3 class="panel-title">Elija su Imagen</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open_multipart('panel/documentos/do_upload_img');?>
						<div class="form-group formField">
							<?php
							$data = array('name' => 'archivo', 'title' => 'Elija su imagen', 'type' => 'file', 'class' => 'btn btn-primary btn-block bg-color-3 border-color-3', 'required'=>'required');
							echo form_input($data);
							?>
						</div>
						<!--<div class="form-group formField">
							<br>
						</div>-->
						<div class="form-group formField">
							<?php echo form_submit('guardar','Subir imagen', array('class'=>'btn btn-primary btn-block bg-color-3 border-color-3')); ?>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ================================
	     UpLoad Documentos DOCX
	==================================== -->
	<div class="modal fade customModal" id="uploaddocx" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="panel panel-default formPanel">
					<div class="panel-heading bg-color-1 border-color-1">
						<h3 class="panel-title">Elija su Documento</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open_multipart('panel/documentos/do_upload_docx');?>
						<div class="form-group formField">
							<?php
							$data = array('name' => 'archivo', 'title' => 'Elija su documento', 'type' => 'file', 'class' => 'btn btn-primary btn-block bg-color-3 border-color-3', 'required'=>'required');
							echo form_input($data);
							?>
						</div>
						<!--<div class="form-group formField">
							<br>
						</div>-->
						<div class="form-group formField">
							<?php echo form_submit('guardar','Subir documento', array('class'=>'btn btn-primary btn-block bg-color-3 border-color-3')); ?>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ================================
	     UpLoad VIDEO
	==================================== -->
	<div class="modal fade customModal" id="uploadvideo" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="panel panel-default formPanel">
					<div class="panel-heading bg-color-1 border-color-1">
						<h3 class="panel-title">Elija su video</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open_multipart('panel/documentos/do_upload_video');?>
						<div class="form-group formField">
							<?php
							$data = array('name' => 'archivo', 'title' => 'Elija su video', 'type' => 'file', 'class' => 'btn btn-primary btn-block bg-color-3 border-color-3', 'required'=>'required');
							echo form_input($data);
							?>
						</div>
						<!--<div class="form-group formField">
							<br>
						</div>-->
						<div class="form-group formField">
							<?php echo form_submit('guardar','Subir video', array('class'=>'btn btn-primary btn-block bg-color-3 border-color-3')); ?>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ================================
	     UpLoad AUDIO
	==================================== -->
	<div class="modal fade customModal" id="uploadaudio" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="panel panel-default formPanel">
					<div class="panel-heading bg-color-1 border-color-1">
						<h3 class="panel-title">Elija su Audio</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open_multipart('panel/documentos/do_upload_audio');?>
						<div class="form-group formField">
							<?php
							$data = array('name' => 'archivo', 'title' => 'Elija su audio', 'type' => 'file', 'class' => 'btn btn-primary btn-block bg-color-3 border-color-3', 'required'=>'required');
							echo form_input($data);
							?>
						</div>
						<!--<div class="form-group formField">
							<br>
						</div>-->
						<div class="form-group formField">
							<?php echo form_submit('guardar','Subir audio', array('class'=>'btn btn-primary btn-block bg-color-3 border-color-3')); ?>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ================================
	     UpLoad OTHER
	==================================== -->
	<div class="modal fade customModal" id="uploadother" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="panel panel-default formPanel">
					<div class="panel-heading bg-color-1 border-color-1">
						<h3 class="panel-title">Elija su Archivo</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open_multipart('panel/documentos/do_upload_other');?>
						<div class="form-group formField">
							<?php
							$data = array('name' => 'archivo', 'title' => 'Elija su archivo', 'type' => 'file', 'class' => 'btn btn-primary btn-block bg-color-3 border-color-3', 'required'=>'required');
							echo form_input($data);
							?>
						</div>
						<!--<div class="form-group formField">
							<br>
						</div>-->
						<div class="form-group formField">
							<?php echo form_submit('guardar','Subir archivo', array('class'=>'btn btn-primary btn-block bg-color-3 border-color-3')); ?>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ================================
	     Editar documentos
	==================================== -->
	<div class="modal fade customModal" id="editar" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="panel panel-default formPanel">
					<div class="panel-heading bg-color-1 border-color-1">
						<h3 class="panel-title">Editar</h3>
					</div>
					<div class="panel-body">

						<?php echo form_open_multipart('panel/documentos/actualizar_documento');?>
						<?php //echo form_hidden('id_doc',$id); ?>
						<div class="form-group formField">
							<?php
							$data = array('name' => 'nombre', 'type' => 'text', 'value' => $doc->nombre, 'class' => 'form-control');
							echo form_input($data);
							?>
						</div>
						<!--<div class="form-group formField">
							<br>
						</div>-->
						<div class="form-group formField">
							<?php echo form_submit('guardar','Actualizar', array('class'=>'btn btn-primary btn-block bg-color-3 border-color-3')); ?>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
