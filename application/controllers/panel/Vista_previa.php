<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vista_previa extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!is_rol_permitido($this->siid->TAREA_VISUALIZAR_DOCUMENTO, $this->session->rol)){
            redirect("principal");
            return;
        }
        // debug(is_rol_permitido($this->siid->TAREA_VISUALIZAR_DOCUMENTO, $this->session->rol));
    }//end function

    public function index(){
        $this->crear_vista('panel/vista_previa',$this->cargar_datos());
    }//end function index

    public function cargar_datos(){
        $this->load->model('Mensaje_inicio');
        $this->load->model('Vista_previa_d');
        $datos['titulo_tarea'] = 'Bienvenido '.$this->session->nombre_completo_usuario;

        return $datos;
    }//end function cargar_datos

    public function reglas_formulario($regla_formulario=NULL){

    }//end function reglas_formulario

    public function crear_vista($nombreVista=NULL, $datos=NULL){
        $data['contenido'] = $this->load->view($nombreVista, $datos, TRUE);
        $data['menuLateral'] = crear_menu_lateral($this->session->tarea_actual, $this->session->rol);
        $data['titulo_tarea'] = $datos['titulo_tarea'];
        $this->load->view('plantilla', $data);
    }//end function crear_vista

}//end class Dashboard

?>
