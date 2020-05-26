<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol)){
            redirect("principal");
            return;
        }
        // debug(is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol));
    }//end function

    public function index(){
        $this->crear_vista('panel/notas', $this->cargar_datos());
    }//end function index

    public function cargar_datos(){
        $datos = array();

        //NO BORRAR
        //Cargar notas automaticas
        $this->load->model("Notas_inicio");
        $datos['nota_inicio'] = $this->Notas_inicio->select_nota($this->session->id_usuario);
        $this->session->nota_inicio= $datos['nota_inicio'];

        $this->load->model('Tabla_notas');
        $datos['titulo_tarea'] = 'Notas';
        $datos['notas_activas'] = $this->Tabla_notas->select_notas_docente($this->session->id_usuario);
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

    public function nota_nueva(){
        $this->load->model('Tabla_notas');
        if($this->input->post('nombre') != ''){
            $data = array(

                //'id_nota' =>  $idNota,
                'nombre' => $this->input->post('nombre'),
                'nota' => $this->input->post('nota') == NULL ? "":$this->input->post('nota'),
                'fecha' => $this->input->post('date_out'),
                'id_usuario' => $this->session->id_usuario
            );
            if($this->Tabla_notas->insert($data)){
                $idNota = $this->db->insert_id();
                $data = array(
                    'id_usuario' => $this->session->id_usuario,
                    'id_nota' =>  $idNota
                );
                //if($this->Tabla_notas->insert_usuario_nota($data)){
                mensaje('Nota creada exitosamente');
                redirect('principal/'.$this->siid->TAREA_NOTAS);
                //}
            }//end if insertado correctamente
            else{
                mensaje('Error al crear nota',2);
                redirect('principal/'.$this->siid->TAREA_NOTAS);
            }//end if else no insertado correctamente
        }//end if nombre de nota no es vacio
        else{
            mensaje('Debe escribir un nombre para la nota',13);
            redirect('principal/'.$this->siid->TAREA_NOTAS);
        }//end if else nombre de nota vacio
    }//end function nota_nueva
    public function eliminar_nota($id_nota){
        $this->load->model('Tabla_notas');
        $this->Tabla_notas->delete($id_nota);
        mensaje('Nota eliminada exitosamente');
        redirect('principal/'.$this->siid->TAREA_NOTAS);
    }
    ///////////////////////////////////////////////////


    /////////////////////////////////////////////////////7

      //////////////////////////////////////////////////////////7

}//end class Notas
?>
