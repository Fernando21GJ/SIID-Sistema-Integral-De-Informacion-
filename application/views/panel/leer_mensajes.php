<?php
foreach ($mensajes as $row) {
?>
  <div class="col-lg-4">
    <div class="col-sm-12 col-xs-12 block">
      <div class="thumbnail thumbnailContent wow fadeInUp">
        <div class="caption border-color-4">
        <h3><a  class="color-4">Destinatario:</a></h3>
        <p><h5><a class="color-4"><?php echo $row['receptor'] ?></a></h5></p>
        <h3><a  class="color-4">Remitente:</a></h3>
        <p><h5><a class="color-4"><?php echo $row['emisor'] ?></a></h5></p>
        <p  textalign="right" class="col-lg-8"><h5><a href="<?php echo base_url('principal/'.$this->siid->TAREA_MENSAJE_NUEVO); ?>" class="color-4"><span class="fa fa-reply"> Responder</span></a></h5></p>
        <h3><a  class="color-4">Asunto:</a></h3>
        <p><h5><a class="color-4"><?php echo $row['asunto'] ?></a></h5></p>
        </div>
      </div>
    </div>
   <!--<div class="space-50">&nbsp;</div>-->
  </div>
  <div class="col-lg-8">
    <div class="col-sm-12 col-xs-12 block">
      <div class="thumbnail thumbnailContent wow fadeInUp">
        <div class="caption border-color-4">
          <h3><a  class="color-4">Mensaje</a></h3>
          <p><?php echo $row['mensaje'] ?></p>
        </div>
      </div>
    </div>
   <!--<div class="space-50">&nbsp;</div>-->
  </div>
<?php
}
?>

<div class="col-lg-12">
  <div class="col-xs-12">
    <a href="<?php echo base_url('principal/'.$this->siid->TAREA_MENSAJES) ?>" class="btn btn-outline-info col-xs-12"> <span class="fa fa-arrow-left"></span><strong> Ir a la Bandeja</strong></a>
  </div>
  <div class="space-20">&nbsp;</div>
</div>
