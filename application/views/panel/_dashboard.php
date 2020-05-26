<div class="col-sm-6 col-xs-12 block">
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
</div>
<!-- <div class="col-sm-6 col-xs-12 block">
    <div class="media eventContent bg-color-2 wow fadeInUp">
        <a class="media-left" href="single-event-left-sidebar.html">
            <img class="media-object" src="<?php echo base_url("recursos-panel") ?> assets/img/home/event/event-2.jpg" alt="Image">
            <span class="sticker-round">10 <br>July</span>
        </a>
        <div class="media-body">
            <h3 class="media-heading"><a href="single-event-left-sidebar.html">Aenean vel leo vitae sem.</a></h3>
            <ul class="list-unstyled">
                <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
                <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
            <ul class="list-inline btn-green">
                <li><a href="#" class="btn btn-primary">read more</a></li>
            </ul>
        </div>
    </div>
</div> -->
<!-- <div class="col-sm-6 col-xs-12 block">
    <div class="media eventContent bg-color-3 wow fadeInUp">
        <a class="media-left" href="single-event-left-sidebar.html">
            <img class="media-object" src="<?php echo base_url('recursos-panel') ?>/assets/img/home/event/event-3.jpg" alt="Image">
            <span class="sticker-round">10 <br>July</span>
        </a>
        <div class="media-body">
        <h3 class="media-heading"><a href="single-event-left-sidebar.html">Nunc suscipit sem et.</a></h3>
        <ul class="list-unstyled">
            <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
            <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
        <ul class="list-inline btn-red">
            <li><a href="#" class="btn btn-primary">read more</a></li>
        </ul>
        </div>
    </div>
</div> -->
<?php if($this->session->rol != $this->siid->ROL_INVITADO['clave']){ ?>
<div class="col-sm-6 col-xs-12 block">
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
</div>
<?php }//end if rol != invitado ?>
