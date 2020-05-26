<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Subcategoria_editar extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!is_rol_permitido($this->siid->TAREA_CURSOS_EDITAR, $this->session->rol)){
            redirect("principal");
            return;
        }
        // debug(is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol));
    }//end function

    public function index(){
        $this->crear_vista('panel/cursos_editar', $this->cargar_datos());
    }//end function index

    public function cargar_datos(){
        $this->load->model("Tabla_subcategoria");
        $this->load->model("Tabla_documentos");
        $datos = array();
        $datos['titulo_tarea'] = 'Editar cursos';

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



    public function eliminar_documento($id_documento,$id_subcategoria){
        $this->cargar_datos();
        if($this->Tabla_subcategoria->delete_subcategoria_documento($id_documento,$id_subcategoria)){
            if($this->Tabla_documentos->delete($id_documento)){
                mensaje('Documento eliminado correctamente');
                redirect('principal/'.$this->siid->TAREA_SUBCATEGORIAS.'/'.$id_subcategoria);
            }//end if borrar documento
            else{
                mensaje('No se pudo eliminar el documento',2);
                redirect('principal/'.$this->siid->TAREA_SUBCATEGORIAS.'/'.$id_subcategoria);
            }//end if else no borro documento
        }//end if borrar de subcategoria_documento
        else{
            mensaje('No se pudo eliminar el documento',2);
            redirect('principal/'.$this->siid->TAREA_SUBCATEGORIAS.'/'.$id_subcategoria);
        }//end if else no borro subcategoria_documento
    }//end function eliminar_documento

}//end class Cursos
?>
