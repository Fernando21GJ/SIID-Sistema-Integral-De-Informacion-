<?php

class Vista_previa_d extends CI_Model {
    private  $table = "documentos";

    public function __construct(){
        parent::__construct();
    }//end constructor

    public function vista($val){
      //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM documentos where id_documento ='".$val."' ;");
        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }//end vista
}//end class Tabla_eventos
