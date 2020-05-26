<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Editarnota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol)) {
            redirect("principal");
            return;
        }
        // debug(is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol));
    } //end function

    public function index()
    {
        $this->crear_vista('panel/editarnota', $this->cargar_datos());


    } //end function index

    public function cargar_datos()
    {
        $this->load->model('Tabla_notas');
        $this->load->model('Mensaje_inicio');
        $this->load->model('Tabla_eventos');
        $datos                 = array();
        $datos['titulo_tarea'] = 'Notas';

        $datos['notas_activas']  = $this->Tabla_notas->select_notas_docente($this->session->id_usuario);
        $datos['nombre_mensaje'] = $this->Mensaje_inicio->select_nombre($this->session->usuario_emisor);
        $datos['evento_inicio']  = $this->Tabla_eventos->select_evento($this->session->id_usuario);
        return $datos;
    } //end function cargar_datos

    public function reglas_formulario($regla_formulario = NULL)
    {

    } //end function reglas_formulario

    public function crear_vista($nombreVista = NULL, $datos = NULL)
    {
        $data['contenido']    = $this->load->view($nombreVista, $datos, TRUE);
        $data['menuLateral']  = crear_menu_lateral($this->session->tarea_actual, $this->session->rol);
        $data['titulo_tarea'] = $datos['titulo_tarea'];

        $this->load->view('plantilla', $data);
    } //end function crear_vista


    ///////////////////////////////////////////////////


    /////////////////////////////////////////////////////7
    public function edit($id_nota)
    {
        $this->load->model('Tabla_notas'); # <- add this

        $data = array(
            "nota" => $this->Tabla_notas->getNota($id_nota)
        );
        $this->load->view("panel/editarnota", $data);
    }
    //////////////////////////////////////////////////////////7
    public function update()
    {

        $this->load->model('Tabla_notas');
        $id_nota=$this->input->post("id_nota");
        $nombre = $this->input->post("nombre");
        $nota   = $this->input->post("nota");
        $fecha=$this->input->post("date_out");
        $data   = array(
            'nombre' => $nombre,
            'nota' => $nota,
            'fecha' => $fecha
        );
        if ($this->Tabla_notas->update($id_nota,$data)) {
            mensaje('Nota editada exitosamente');
            redirect(base_url() . "panel/notas");
        } else {
            //$this->session->set_flashdata("error");
            //redirect(base_url()."panel/editarnota/edit".$id_nota);
        }
    }
}
