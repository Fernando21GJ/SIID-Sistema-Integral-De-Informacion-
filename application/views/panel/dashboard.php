<div class="col-md-12">
    <div class="col-md-6">
        <div class="col-sm-12 col-xs-12 block">
            <div class="media eventContent bg-color-5 wow fadeInUp">
                <a class="media-left" href="single-event-left-sidebar.html">
                    <center><img class="media-object" style="width:245px;" src="<?php echo base_url('recursos-panel/assets/img/nota.png') ?>" alt="Image"></center>
                </a>
                <div class="media-body">
                    <h3 class="media-heading"><a href="single-event-left-sidebar.html">Notas</a></h3>
                        <?php
                            foreach ($this->session->nota_inicio as $row) {
                                echo'
                                    <ul class="list-unstyled">
                                         <li>
                                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                                    '.$row->fecha.'
                                        </li>
                                        <li>
                                            <i class="fa fa-file" aria-hidden="true"></i>
                                            '.$row->nombre.'
                                        </li>
                                    </ul>
                                    <p>'.$row->nota.'</p>
                                ';
                            }
                            echo'
                                <ul class="list-inline btn-yellow">
                                    <li><a href=" '.base_url("principal/".$this->siid->TAREA_NOTAS).'" class="btn btn-primary">Ver notas</a></li>
                                </ul>
                            ';
                        ?>
                </div>
            </div>
        </div><!-- Enc div cuadro notas -->
        <?php if($this->session->rol != $this->siid->ROL_INVITADO['clave']){ ?>
        <div class="col-sm-12 col-xs-12 block">
            <div class="media eventContent bg-color-4 wow fadeInUp">
                <a class="media-left" href="single-event-left-sidebar.html">
                    <img class="media-object" src="<?php echo base_url('recursos-panel') ?>/assets/img/Icono-Eventos.png" alt="Image">
                </a>
                <div class="media-body">
                    <h3 class="media-heading"><a href="single-event-left-sidebar.html">Eventos próximos</a></h3>
                    <?php
                            foreach ($this->session->evento_inicio as $row) {
                                echo'
                                    <ul class="list-unstyled">
                                         <li>
                                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                                    '.$row->fecha.'
                                        </li>
                                        <li>
                                            <i class="fa fa-file" aria-hidden="true"></i>
                                            '.$row->nombre.'
                                        </li>
                                    </ul>
                                ';
                            }
                            echo'
                                <ul class="list-inline btn-yellow">
                                    <li><a href=" '.base_url("principal/".$this->siid->TAREA_EVENTOS).'" class="btn btn-primary">Ver eventos</a></li>
                                </ul>
                            ';
                        ?>
                </div>
            </div>
        </div><!-- End div cuadro eventos -->
        <?php }//end if rol != invitado ?>
    </div><!-- End div col-6 -->
    <div class="col-md-6">
        <?php
            if($usuario->horario != ''){
                echo '<iframe src="'.base_url('horarios/'.$usuario->horario).'" height="550" width="100%" ></iframe>';
            }
            else{
                echo '<center><h3>No tiene ningun horario cargado</h3></center>';
            }
        ?>
    </div><!-- End div col-6 -->
</div> <!-- End div col-12 -->
