<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Config extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->dbforge();
        $this->load->dbutil();
    }//end function

    public function clear(){
        echo '<hr>';
        $this->importardb();
        echo '<hr>';
    }//end function clear

    public function seed(){
        $this->load->model('Operacionesdb');
        $this->Operacionesdb->seed_usuario();
        $this->Operacionesdb->seed_cursos();
        $this->Operacionesdb->seed_usuario_curso();
        $this->Operacionesdb->seed_categoria();
        $this->Operacionesdb->seed_documentos();
        $this->Operacionesdb->seed_subcategoria_documentos();
        $this->Operacionesdb->seed_especialidad();
    }//end function seed

    public function importardb(){
        $this->load->model('Operacionesdb');
        $this->Operacionesdb->importar();
    }//end function importardb

}//end class Dashboard
?>
