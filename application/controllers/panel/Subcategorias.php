<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Subcategorias extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!is_rol_permitido($this->siid->TAREA_SUBCATEGORIAS, $this->session->rol)){
            redirect("principal");
            return;
        }
    }//end function

    public function index(){
        $this->crear_vista('panel/subcategorias', $this->cargar_datos());
    }//end function index

    public function cargar_datos(){
        $datos = array();
        $datos['titulo_tarea'] = 'Categorías y documentos';

        $this->load->model('Tabla_subcategoria');
        $this->load->model('Tabla_documentos');
        $subcategorias = $this->Tabla_subcategoria->select(array('id_curso'=>$this->session->idElemento));
        $datos['subcategorias'] = array();
        foreach ($subcategorias as $row) {
            $data['id_subcategoria'] = $row->id_categoria;
            $data['subcategoria'] = $row->categoria;
            $data['documentos'] = $this->Tabla_documentos->select_documentos_subcategoria($row->id_categoria);
            $datos['subcategorias'][] = $data;
        }
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

    public function subcategoria_nueva(){
        $this->load->model('Tabla_subcategoria');
        if($this->input->post('categoria') != ''){
            $data = array(
                'categoria' => $this->input->post('categoria'),
                'id_curso' => $this->session->idElemento
            );
            if($this->Tabla_subcategoria->insert($data)){
                mensaje('Categoria creada exitosamente');
                redirect('principal/'.$this->siid->TAREA_SUBCATEGORIAS.'/'.$this->session->idElemento);
            }//end if insertado correctamente
            else{
                mensaje('Error al crear la categoria',2);
                redirect('principal/'.$this->siid->TAREA_SUBCATEGORIAS.'/'.$this->session->idElemento);
            }//end if else no insertado correctamente
        }//end if nombre de categoria no es vacio
        else{
            mensaje('Debe escribir un nombre para la categoria',3);
            redirect('principal/'.$this->siid->TAREA_SUBCATEGORIAS.'/'.$this->session->idElemento);
        }//end if else nombre de la categoria
    }//end function subcategoria_nueva

    public function documento_nuevo(){
        $this->load->model("Tabla_documentos");
        if ($this->input->post("nombre-documento") == '') {
            mensaje("Error, nombre es requerido",2);
            redirect("principal/".$this->siid->TAREA_SUBCATEGORIAS.'/'.$this->session->idElemento);
        }// if tipo d fotografia
        else {
            $config['upload_path']          = './documentos/';
            $config['allowed_types']        = "*";
            // $config['max_size']             = 20000;
            $this->load->library('upload', $config);

            if ($_FILES['documento']['name'] != NULL) {

                if($_FILES['documento']['name'] == 'application/x-msdownload'){
                    mensaje("Error, formato incorrecto",2);
                    redirect("principal/".$this->siid->TAREA_SUBCATEGORIAS.'/'.$this->session->idElemento);
                }//end if no permite formato exe

                // $extensionArchivo = substr($_FILES['documento']['name'],-4);
                // $tiempo = time();
                // $sha = hash("sha256",$tiempo);
                // $_FILES['documento']['name'] = $sha.$extensionArchivo;

                if (!$this->upload->do_upload('documento')){
                    $error = array('error' => $this->upload->display_errors());
                    mensaje("Error, formato incorrecto",2);
                    redirect("principal/".$this->siid->TAREA_SUBCATEGORIAS.'/'.$this->session->idElemento);
                }//end if do_upload
                else{
                    $tipo = '';
                    switch ($_FILES['documento']['type']) {
                        case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
                            $tipo = 'xlsx';
                            break;
                        case 'application/pdf':
                            $tipo = 'pdf';
                            break;
                        case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
                            $tipo = 'pptx';
                            break;
                        case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                            $tipo = 'docx';
                            break;
                        case 'application/vnd.ms-excel':
                            $tipo = 'csv';
                            break;
                        case 'text/plain':
                            $tipo = 'txt';
                            break;
                        case 'image/jpeg':
                            $tipo = 'jpeg';
                            break;
                        case 'image/gif':
                            $tipo = 'gif';
                            break;
                        case 'image/jpg':
                            $tipo = 'jpg';
                            break;
                        case 'image/png':
                            $tipo = 'png';
                            break;
                        case 'application/msaccess':
                            $tipo = 'accdb';
                            break;
                        default:
                            $tipo = 'otro';
                            break;
                    }//end switch

                    $data = array(
                        'nombre' => $this->input->post('nombre-documento'),
                        'url' => './documentos/'.$_FILES['documento']['name'],
                        'tipo' => $tipo,
                        'tamano' => $_FILES['documento']['size']
                    );

                    if($this->Tabla_documentos->insert($data)){
                        $idDocumento = $this->db->insert_id();
                        $data = array(
                            'id_categoria' => $this->input->post("categoria"),
                            'id_documento' => $idDocumento
                        );
                        if($this->Tabla_documentos->insert_subcategoria_documento($data)){
                            mensaje("Documento agregado exitosamente");
                            redirect("principal/".$this->siid->TAREA_SUBCATEGORIAS.'/'.$this->session->idElemento);
                        }//end if insert subcategorias documentos
                        else{
                            mensaje("Error, al vinvular el documento",2);
                            redirect("principal/".$this->siid->TAREA_SUBCATEGORIAS.'/'.$this->session->idElemento);
                        }//end if else no insert subcategorias documentos
                    }//end if insert documento
                    else{
                        mensaje("Error, no se puedo agregar el documento",2);
                        redirect("principal/".$this->siid->TAREA_SUBCATEGORIAS.'/'.$this->session->idElemento);
                    }//end if else no insert documento
                }//end else error en do_upload
            }// en if  $_FILES null.
            else{
                mensaje("Error, no selecciono un documento",2);
                redirect("principal/".$this->siid->TAREA_SUBCATEGORIAS.'/'.$this->session->idElemento);
            }// en if  else $_FILES null.
        }// end else  tipo  forografia
    }//end function documento_nuevo

}//end class Dashboard

?>
