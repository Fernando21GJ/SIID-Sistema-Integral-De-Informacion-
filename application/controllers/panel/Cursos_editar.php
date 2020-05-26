<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cursos_editar extends CI_Controller{

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
        $this->load->model('Tabla_cursos');
        $this->load->model("Tabla_subcategoria");
        $this->load->model('Mensaje_inicio');
        $this->load->model('Tabla_eventos');
        $this->load->model('Notas_inicio');
        $datos = array();
        $datos['titulo_tarea'] = 'Editar cursos';

        $cursos = $this->Tabla_cursos->select_cursos_docente($this->session->id_usuario);
        $datos['nombre_mensaje'] = $this->Mensaje_inicio->select_nombre($this->session->usuario_emisor);
        $datos['evento_inicio'] = $this->Tabla_eventos->select_evento($this->session->id_usuario);
        $datos['nota_inicio'] = $this->Notas_inicio->select_nota($this->session->id_usuario);
        $datos['numero_mensaje'] = $this->Mensaje_inicio->regresar_numero($this->session->id_usuario);
        $curso = array();
        foreach ($cursos as $row) {
            $curso['id_curso'] = $row->id_curso;
            $curso['curso'] = $row->curso;
            $curso['descripcion'] = $row->descripcion;
            $curso['subcategorias'] = $this->Tabla_subcategoria->select(array('id_curso' => $row->id_curso));
            $datos['cursos_activos'][] = $curso;
        }//end foreach cursos
        // debug($datos);
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

    public function curso_editar(){
        $this->load->model('Tabla_cursos');
        if($this->input->post('curso') != ''){
            $data = array(
                'curso' => $this->input->post('curso'),
                'descripcion' => $this->input->post('descripcion') == NULL ? "":$this->input->post('descripcion')
            );
            if($this->Tabla_cursos->update($data, $this->input->post('id-curso'))){
                mensaje('Curso editado exitosamente');
                redirect('principal/'.$this->siid->TAREA_CURSOS_EDITAR);
            }//end if insertado correctamente
            else{
                mensaje('Error al editar el curso',2);
                redirect('principal/'.$this->siid->TAREA_CURSOS_EDITAR);
            }//end if else no insertado correctamente
        }//end if nombre de curso no es vacio
        else{
            mensaje('Debe escribir un nombre para el curso',3);
            redirect('principal/'.$this->siid->TAREA_CURSOS_EDITAR);
        }//end if else nombre de curso vacio
    }//end function curso_nuevo

    public function eliminar_curso($id){
        $this->cargar_datos();
        $subcategorias = $this->Tabla_subcategoria->select(array('id_curso' => $id));
        if(count($subcategorias) > 0){
            mensaje('No puede eliminar curso con subcategorias',2);
            redirect('principal/'.$this->siid->TAREA_CURSOS_EDITAR);
        }//end if con subcategorias
        else{
            if($this->Tabla_cursos->delete($id)){
                mensaje('Curso eliminado correctamente');
                redirect('principal/'.$this->siid->TAREA_CURSOS_EDITAR);
            }
            else{
                mensaje('Error al eliminar el curso',2);
                redirect('principal/'.$this->siid->TAREA_CURSOS_EDITAR);
            }
        }//end if else sin subcategorias
    }//end function eliminar_curso

    public function subcategoria_editar(){
        $this->cargar_datos();
        if($this->input->post('subcategoria') != ''){
            $data = array(
                'categoria' => $this->input->post('subcategoria')
            );
            if($this->Tabla_subcategoria->update($data, $this->input->post('id-subcategoria'))){
                mensaje('Subcategoría editada exitosamente');
                redirect('principal/'.$this->siid->TAREA_CURSOS_EDITAR);
            }//end if insertado correctamente
            else{
                mensaje('Error al editar la Subcategoría',2);
                redirect('principal/'.$this->siid->TAREA_CURSOS_EDITAR);
            }//end if else no insertado correctamente
        }//end if nombre de categoria no es vacio
        else{
            mensaje('Debe escribir un nombre para la categoria',3);
            redirect('principal/'.$this->siid->TAREA_CURSOS_EDITAR);
        }//end if else nombre de la categoria
    }//end function subcategoria_editar

    public function eliminar_subcategoria($id){
        $this->cargar_datos();
        if($this->Tabla_subcategoria->select_subcateria_documentos($id)){
            if($this->Tabla_subcategoria->delete($id)){
                mensaje('Subcategoría eliminada');
                redirect('principal/'.$this->siid->TAREA_CURSOS_EDITAR);
            }
            else{
                mensaje('Error al eliminar subcategoría',2);
                redirect('principal/'.$this->siid->TAREA_CURSOS_EDITAR);
            }
        }//end if no existen documentos
        else{
            mensaje('No puede eliminar subcategoría, contiene documentos',2);
            redirect('principal/'.$this->siid->TAREA_CURSOS_EDITAR);
        }//end if else existen documentos

    }//end function eliminar_subcategoria

}//end class Cursos
?>
