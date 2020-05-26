<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Docentes extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol)){
            redirect("principal");
            return;
        }
        // debug(is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol));
    }//end function

    public function index(){
        $this->crear_vista('panel/docentes', $this->cargar_datos());
    }//end function index

    public function cargar_datos(){
        $this->load->model('Tabla_usuarios');
        $this->load->model('Mensaje_inicio');
        $this->load->model('Tabla_eventos');
        $datos = array();
        $datos['titulo_tarea'] = 'Usuarios';

        $datos['usuarios_activos'] = $this->Tabla_usuarios->select_all();
        $datos['nombre_mensaje'] = $this->Mensaje_inicio->select_nombre($this->session->usuario_emisor);
        $datos['evento_inicio'] = $this->Tabla_eventos->select_evento($this->session->id_usuario);
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

    public function usuario_nuevo(){
        $this->load->model('Tabla_usuarios');
        if($this->input->post('nombre') != '' || $this->input->post('paterno') != '' || $this->input->post('materno') != '' || $this->input->post('especialidad') != '' || $this->input->post('correo') != ''){
          if($this->input->post('contrasenia')!=$this->input->post('contraseniaC')){
            mensaje('Las contraseñas no coinciden',2);
            redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR);
          }else{
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'paterno' => $this->input->post('paterno'),
                'materno' => $this->input->post('materno'),
                'rol' => $this->input->post('rol'),
                'email' => $this->input->post('correo'),
                'password' => hash('sha256', $this->input->post('contrasenia')),
                'tutor' => $this->input->post('tutoria')
            );
            if($this->Tabla_usuarios->insert($data)){
                if($this->input->post('especialidad')!=null){
                    $id_usuario_insertado = $this->Tabla_usuarios->select_id_usuario($this->input->post('correo'));
                    foreach ($this->input->post('especialidad') as $value) {
                      $data2= array();
                      foreach ($id_usuario_insertado as $valor) {
                        $data2= array(
                          'id_usuario'=>$valor->id_usuario,
                          'id_especialidad'=>$value
                        );
                      }
                      $this->Tabla_usuarios->insert_especialidad($data2);
                    }
                    mensaje('Usuario creado exitosamente');
                    redirect('principal/'.$this->siid->TAREA_DOCENTES);
                }else{
                  mensaje('Usuario creado exitosamente');
                  redirect('principal/'.$this->siid->TAREA_DOCENTES);
                }
            }//end if insertado correctamente
            else{
                mensaje('Error al agregar el usuario',2);
                redirect('principal/'.$this->siid->TAREA_DOCENTES);
            }//end if else no insertado correctamente
          }
        }//end if nombre de curso no es vacio
        else{
            mensaje('Debe escribir un nombre para el curso',3);
            redirect('principal/'.$this->siid->TAREA_DOCENTES);
        }//end if else nombre de curso vacio
    }//end function curso_nuevo

}//end class Cursos
?>
