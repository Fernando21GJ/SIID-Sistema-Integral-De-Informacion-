<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EditarEvento extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!is_rol_permitido($this->siid->TAREA_EVENTO_EDITAR, $this->session->rol)){
            redirect("principal");
            return;
        }
        // debug(is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol));
    }//end function

    public function index(){
        $this->crear_vista('panel/editarEvento', $this->cargar_datos());
    }//end function index

    public function cargar_datos(){
        $datos['titulo_tarea'] = 'Bienvenido '.$this->session->nombre_completo_usuario;
        $this->load->model('Mensaje_inicio');
        $this->load->model('Tabla_mensajes');
        $this->load->model('Tabla_eventos');
        $this->load->model('Notas_inicio');
        $datos['nombre_mensaje'] = $this->Mensaje_inicio->select_nombre($this->session->id_usuario);
        $datos['evento_inicio'] = $this->Tabla_eventos->select_evento($this->session->id_usuario);
        $datos['nota_inicio'] = $this->Notas_inicio->select_nota($this->session->id_usuario);
        $datos['numero_mensaje'] = $this->Mensaje_inicio->regresar_numero($this->session->id_usuario);
        $datos['num_of_message'] = $this->Tabla_mensajes->count_message($this->session->id_usuario);
        $this->session->nombre_mensaje = $datos['nombre_mensaje'];
        $this->session->evento_inicio=$datos['evento_inicio'];
        $this->session->nota_inicio= $datos['nota_inicio'];
        $this->session->numero_mensaje=$datos['numero_mensaje'];
        $this->session->num_of_message=$datos['num_of_message'];
        return $datos;

    }//end function cargar_datos

    public function reglas_formulario($regla_formulario=NULL){

    }//end function reglas_formulario

    public function crear_vista($nombreVista=NULL, $datos=NULL){
        $data['contenido'] = $this->load->view($nombreVista, $datos, TRUE);
        $data['menuLateral'] = crear_menu_lateral($this->session->tarea_actual, $this->session->rol);
        $data['titulo_tarea'] = $datos['titulo_tarea'];

        $this->load->view('panel/editarEvento', $data);

    }//end function crear_vista

}//end class Dashboard

?>
