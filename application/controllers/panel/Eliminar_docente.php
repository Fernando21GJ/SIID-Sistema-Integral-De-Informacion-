<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Eliminar_docente extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol)){
            redirect("principal");
            return;
        }
        // debug(is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol));
    }//end function

    public function index(){
          $this->eliminar_docente();
    }//end function index

    public function eliminar_docente(){
      $this->load->model('Tabla_usuarios');
      if($this->Tabla_usuarios->delete($this->session->idElemento)){
        if($this->Tabla_usuarios->delete_especialidades_usuario($this->session->idElemento)){
          mensaje('Usuario eliminado correctamente');
          redirect('principal/'.$this->siid->TAREA_DOCENTES);
        }else{
          mensaje('El usuario no fue eliminado',2);
          redirect('principal/'.$this->siid->TAREA_DOCENTES);
        }
      }else{
        mensaje('El usuario no fue eliminado',2);
        redirect('principal/'.$this->siid->TAREA_DOCENTES);
      }
    }

    public function eliminar_docente_id($id_docente){
      $this->load->model('Tabla_usuarios');
      if($this->Tabla_usuarios->delete($id_docente)){
        if($this->Tabla_usuarios->delete_especialidades_usuario($id_docente)){
          mensaje('Usuario eliminado correctamente');
          redirect('principal/'.$this->siid->TAREA_DOCENTES);
        }else{
          mensaje('El usuario no fue eliminado',2);
          redirect('principal/'.$this->siid->TAREA_DOCENTES);
        }
      }else{
        mensaje('El usuario no fue eliminado',2);
        redirect('principal/'.$this->siid->TAREA_DOCENTES);
      }
    }

}//end class Cursos
?>
