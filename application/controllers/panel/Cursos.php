<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cursos extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol)){
            redirect("principal");
            return;
        }
        // debug(is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol));
    }//end function

    public function index(){
        $this->crear_vista('panel/cursos', $this->cargar_datos());
    }//end function index

    public function cargar_datos(){
        $this->load->model('Tabla_cursos');
        $this->load->model('Mensaje_inicio');
        $this->load->model('Tabla_eventos');
        $this->load->model('Notas_inicio');
        $datos = array();
        $datos['titulo_tarea'] = 'Cursos';

        $datos['cursos_activos'] = $this->Tabla_cursos->select_cursos_docente($this->session->id_usuario);
        $datos['nombre_mensaje'] = $this->Mensaje_inicio->select_nombre($this->session->usuario_emisor);
        $datos['evento_inicio'] = $this->Tabla_eventos->select_evento($this->session->id_usuario);
        $datos['nota_inicio'] = $this->Notas_inicio->select_nota($this->session->id_usuario);
        $datos['numero_mensaje'] = $this->Mensaje_inicio->regresar_numero($this->session->id_usuario);
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

    public function curso_nuevo(){
        $this->load->model('Tabla_cursos');
        if($this->input->post('curso') != ''){
            $data = array(
                'curso' => $this->input->post('curso'),
                'descripcion' => $this->input->post('descripcion') == NULL ? "":$this->input->post('descripcion')
            );
            if($this->Tabla_cursos->insert($data)){
                $idCurso = $this->db->insert_id();
                $data = array(
                    'id_usuario' => $this->session->id_usuario,
                    'id_curso' =>  $idCurso
                );
                if($this->Tabla_cursos->insert_usuario_curso($data)){
                    mensaje('Curso creado exitosamente');
                    redirect('principal/'.$this->siid->TAREA_CURSOS);
                }
            }//end if insertado correctamente
            else{
                mensaje('Error al crear el curso',2);
                redirect('principal/'.$this->siid->TAREA_CURSOS);
            }//end if else no insertado correctamente
        }//end if nombre de curso no es vacio
        else{
            mensaje('Debe escribir un nombre para el curso',3);
            redirect('principal/'.$this->siid->TAREA_CURSOS);
        }//end if else nombre de curso vacio
    }//end function curso_nuevo

}//end class Cursos
?>
