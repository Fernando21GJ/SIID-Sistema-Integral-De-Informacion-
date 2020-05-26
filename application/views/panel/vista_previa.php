<div class="col-sm-12 col-xs-12 block">
    <div class="media eventContent bg-color-1 wow fadeInUp">
      <?php
        foreach ($this->Vista_previa_d->vista(15) as $fila) {
        $nombre = $fila->nombre;
        $si= $fila->url;
        $tamaño = $fila->tamano;
        //$si = '/'.$fila->nombre.$fila->tipo;
        $tipo = $fila->tipo;
      }?>
          <iframe class="media-left" src = <?php echo base_url("./ViewerJS/#.$si")?> width='400' height='300' allowfullscreen webkitallowfullscreen></iframe>
        <div class="media-body">
            <h3 class="media-heading"><a href="#"><?php echo 'Nombre del documento: '.$nombre ?></a></h3>
            <ul class="list-unstyled">
                <li><i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo 'Tamaño: '.$tamaño ?> </li>
                <br>
                <li><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo 'Tipo: '.$tipo ?></li>
            </ul>
            <ul class="list-inline btn-yellow">
              <br>
              <br>
                <li><a  href="<?php echo base_url('principal/'.$this->siid->TAREA_CURSOS) ?>" class="btn btn-primary">Regresar a documentos</a></li>

            </ul>
        </div>
    </div>
</div>
