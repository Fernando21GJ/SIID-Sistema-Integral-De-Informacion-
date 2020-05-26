<?php

class Tabla_Nuevo_Mensaje extends CI_Model {
    private $table = "mensaje";
	
	
    public function __construct(){
        parent::__construct();
    }//end constructor

   
    public function insert($data){
        $result = $this->db->insert($this->table, $data);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end insert

  

}//end class Tabla_subcategoria
