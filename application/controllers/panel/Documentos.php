<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Documentos extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!is_rol_permitido($this->siid->TAREA_DOCUMENTOS, $this->session->rol)){
            redirect("principal");
            return;
        }
        // debug(is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol));
    }//end function

    public function index(){
        $this->crear_vista('panel/documentos', $this->cargar_datos());
    }//end function index

    public function cargar_datos(){

      $this->load->model('Tabla_cursos');
      $this->load->model('Mensaje_inicio');
      $this->load->model('Tabla_eventos');
      $this->load->model('Tabla_documentos');

      $datos = array();
      $datos['titulo_tarea'] = 'Recursos';
      $datos['subtitulo1'] = 'Selecciona el tipo de archivo';
      $datos['idElement'] = $this->session->idElemento;

      $datos['cursos_activos'] = $this->Tabla_cursos->select_cursos_docente($this->session->id_usuario);
      $datos['nombre_mensaje'] = $this->Mensaje_inicio->select_nombre($this->session->usuario_emisor);
      $datos['evento_inicio'] = $this->Tabla_eventos->select_evento($this->session->id_usuario);

      $datos['documentos'] = $this->Tabla_documentos->select_all();

      return $datos;
    }//end function cargar_datos

    public function actualizar_documento(){
      $this->load->model('Tabla_documentos');

      $data = array('nombre' => $this->input->post('nombre'));
      $id_doc = $this->input->post('id_doc');

      $this->Tabla_documentos->update($data,$id_doc);

      $this->crear_vista('panel/documentos', $this->cargar_datos());
    }

    public function do_upload_pptx(){
      $config['upload_path'] = './documentos/pptx/';
      $config['allowed_types'] = 'pptx';
      $config['max_size'] = '50048';

      $this->load->library('upload',$config);

      if(!$this->upload->do_upload('archivo')){
        $error = array('error' => $this->upload->display_errors());
        $this->crear_vista('panel/documentos', $this->cargar_datos(),$error);
      } else{
        $this->load->model('Tabla_documentos');

        $data = array('upload_data' => $this->upload->data());

        $filename = $this->upload->data('file_name');
        $fileurl = $this->upload->data('file_path');
        $filetipo = $this->upload->data('file_ext');
        $filetamano = $this->upload->data('file_size');

        $doc_data = array('nombre' => $filename, 'url' => $fileurl, 'tipo' => $filetipo, 'tamano' => $filetamano );
        $res = $this->Tabla_documentos->insert($doc_data);

        $this->crear_vista('panel/documentos', $this->cargar_datos(),$data);

        return $res;
      }
    }//end function do_upload_pptx

    public function do_upload_img(){
      $config['upload_path'] = './documentos/images/';
      $config['allowed_types'] = 'png|jpg';
      $config['max_size'] = '50048';

      $this->load->library('upload',$config);

      if(!$this->upload->do_upload('archivo')){
        $error = array('error' => $this->upload->display_errors());
        $this->crear_vista('panel/documentos', $this->cargar_datos(),$error);
      } else{
        $this->load->model('Tabla_documentos');

        $data = array('upload_data' => $this->upload->data());
        //debug($data);
        $filename = $this->upload->data('file_name');
        $fileurl = $this->upload->data('file_path');
        $filetipo = $this->upload->data('file_ext');
        $filetamano = $this->upload->data('file_size');

        $doc_data = array('nombre' => $filename, 'url' => $fileurl, 'tipo' => $filetipo, 'tamano' => $filetamano );
        $res = $this->Tabla_documentos->insert($doc_data);

        $this->crear_vista('panel/documentos', $this->cargar_datos(),$data);

        return $res;
      }
    }//end function do_upload_img

    public function do_upload_docx(){
      $config['upload_path'] = './documentos/docx/';
      $config['allowed_types'] = 'docx';
      $config['max_size'] = '50048';

      $this->load->library('upload',$config);

      if(!$this->upload->do_upload('archivo')){
        $error = array('error' => $this->upload->display_errors());
        $this->crear_vista('panel/documentos', $this->cargar_datos(),$error);
      } else{
        $this->load->model('Tabla_documentos');

        $data = array('upload_data' => $this->upload->data());

        $filename = $this->upload->data('file_name');
        $fileurl = $this->upload->data('file_path');
        $filetipo = $this->upload->data('file_ext');
        $filetamano = $this->upload->data('file_size');

        $doc_data = array('nombre' => $filename, 'url' => $fileurl, 'tipo' => $filetipo, 'tamano' => $filetamano );
        $res = $this->Tabla_documentos->insert($doc_data);

        $this->crear_vista('panel/documentos', $this->cargar_datos(),$data);

        return $res;
      }
    }//end function do_upload_docx

    public function do_upload_video(){
      $config['upload_path'] = './documentos/video/';
      $config['allowed_types'] = 'mp4|wmv|mkv';
      $config['max_size'] = '1700406988';

      $this->load->library('upload',$config);

      if(!$this->upload->do_upload('archivo')){
        $error = array('error' => $this->upload->display_errors());
        $this->crear_vista('panel/documentos', $this->cargar_datos(),$error);
      } else{
        $this->load->model('Tabla_documentos');

        $data = array('upload_data' => $this->upload->data());

        $filename = $this->upload->data('file_name');
        $fileurl = $this->upload->data('file_path');
        $filetipo = $this->upload->data('file_ext');
        $filetamano = ($this->upload->data('file_size')/1024);

        $doc_data = array('nombre' => $filename, 'url' => $fileurl, 'tipo' => $filetipo, 'tamano' => $filetamano );

        $res = $this->Tabla_documentos->insert($doc_data);

        $this->crear_vista('panel/documentos', $this->cargar_datos(),$data);

        return $res;
      }
    }//end function do_upload_video

    public function do_upload_audio(){
      $config['upload_path'] = './documentos/audio/';
      $config['allowed_types'] = 'mp3';
      $config['max_size'] = '500048';

      $this->load->library('upload',$config);

      if(!$this->upload->do_upload('archivo')){
        $error = array('error' => $this->upload->display_errors());
        $this->crear_vista('panel/documentos', $this->cargar_datos(),$error);
      } else{
        $this->load->model('Tabla_documentos');

        $data = array('upload_data' => $this->upload->data());

        $filename = $this->upload->data('file_name');
        $fileurl = $this->upload->data('file_path');
        $filetipo = $this->upload->data('file_ext');
        $filetamano = $this->upload->data('file_size');

        $doc_data = array('nombre' => $filename, 'url' => $fileurl, 'tipo' => $filetipo, 'tamano' => $filetamano);
        $res = $this->Tabla_documentos->insert($doc_data);

        $this->crear_vista('panel/documentos', $this->cargar_datos(),$data);

        return $res;
      }
    }//end function do_upload_audio

    public function do_upload_other(){
      $config['upload_path'] = './documentos/other/';
      $config['allowed_types'] = 'pdf|xlsx|txt';
      $config['max_size'] = '50048';

      $this->load->library('upload',$config);

      if(!$this->upload->do_upload('archivo')){
        $error = array('error' => $this->upload->display_errors());
        $this->crear_vista('panel/documentos', $this->cargar_datos(),$error);
      } else{
        $this->load->model('Tabla_documentos');

        $data = array('upload_data' => $this->upload->data());
        //debug($data);

        $filename = $this->upload->data('file_name');
        $fileurl = $this->upload->data('file_path');
        $filetipo = $this->upload->data('file_ext');
        $filetamano = $this->upload->data('file_size');

        $doc_data = array('nombre' => $filename, 'url' => $fileurl, 'tipo' => $filetipo, 'tamano' => $filetamano);
        $res = $this->Tabla_documentos->insert($doc_data);

        $this->crear_vista('panel/documentos', $this->cargar_datos(),$data);

        return $res;
      }
    }//end function do_upload_other

    public function reglas_formulario($regla_formulario=NULL){

    }//end function reglas_formulario

    public function crear_vista($nombreVista=NULL, $datos=NULL){
        $data['contenido'] = $this->load->view($nombreVista, $datos, TRUE);
        $data['menuLateral'] = crear_menu_lateral($this->session->tarea_actual, $this->session->rol);
        $data['titulo_tarea'] = $datos['titulo_tarea'];

        $this->load->view('plantilla', $data);
    }//end function crear_vista

}//end class Documentos

?>
