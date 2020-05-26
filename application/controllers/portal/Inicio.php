<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inicio extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper("form");
        $this->load->library("form_validation");
    }//end function

    public function index(){
        $this->load->model("Tabla_documentos");
        $datos['documentos'] = $this->Tabla_documentos->contar_documentos();
        $this->load->view('portal/inicio',$datos);
    }//end function index

}//end class Dashboard

?>
