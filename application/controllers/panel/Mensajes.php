<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mensajes extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!is_rol_permitido($this->siid->TAREA_MENSAJES, $this->session->rol)){
            redirect("principal");
            return;
        }
        // debug(is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol));
    }//end function

    public function index(){
        $this->crear_vista('panel/mensajes', $this->cargar_datos());
    }//end function index

    public function cargar_datos(){

        $this->load->model('Tabla_mensajes');
        $this->load->model('Tabla_usuarios');


        $datos['titulo_tarea'] = 'Mensajes';
        $datos['usuario'] = $this->session->id_usuario;
        $datos['num_of_message'] = $this->Tabla_mensajes->count_message($this->session->id_usuario);

        $datos['mensajes_entrada'] = array();
        $mensajes_e = $this->Tabla_mensajes->select(array('usuario_receptor' => $this->session->id_usuario));
        foreach ($mensajes_e as $msj) {
          $recibido['id_mensaje_e'] = $msj->id_mesaje;
          $recibido['estatus_e'] = $msj->estatus;
          $recibido['asunto_e'] = $msj->asunto;
          $recibido['mensaje_e'] = $msj->mensaje;
          $recibido['id_usuario_receptor'] = $msj->usuario_receptor;
          $receptor_e = $this->Tabla_usuarios->select(array('id_usuario' => $msj->usuario_receptor))[0];
          $recibido['receptor_e'] = $receptor_e->nombre.' '.$receptor_e->paterno;
          $recibido['id_usuario_emisor'] = $msj->usuario_emisor;
          $emisor_e = $this->Tabla_usuarios->select(array('id_usuario' => $msj->usuario_emisor))[0];
          $recibido['emisor_e'] = $emisor_e->nombre.' '.$emisor_e->paterno;
          $recibido['fecha_e'] = $msj->fecha;
          $datos['mensajes_entrada'][] = $recibido;
        }

        $datos['mensajes_salida'] = array();
        $mensajes_s = $this->Tabla_mensajes->select(array('usuario_emisor' => $this->session->id_usuario));
        foreach ($mensajes_s as $msj_s) {
          $enviado['id_mensaje_s'] = $msj_s->id_mesaje;
          $enviado['estatus_s'] = $msj_s->estatus;
          $enviado['asunto_s'] = $msj_s->asunto;
          $enviado['mensaje_s'] = $msj_s->mensaje;
          $enviado['id_usuario_receptor_s'] = $msj_s->usuario_receptor;
          $receptor_s = $this->Tabla_usuarios->select(array('id_usuario' => $msj_s->usuario_receptor))[0];
          $enviado['receptor_s'] = $receptor_s->nombre.' '.$receptor_s->paterno;
          $enviado['id_usuario_emisor_s'] = $msj_s->usuario_emisor;
          $emisor_s = $this->Tabla_usuarios->select(array('id_usuario' => $msj_s->usuario_emisor))[0];
          $enviado['emisor_s'] = $emisor_s->nombre.' '.$emisor_s->paterno;
          $enviado['fecha_s'] = $msj_s->fecha;
          $datos['mensajes_salida'][] = $enviado;
        }

        $datos['numero_mensaje'] = $this->Tabla_mensajes->regresar_numero($this->session->id_usuario);

        // $datos['mensajes_mios'] = $this->Tabla_mensajes->select(array('usuario_receptor' => $this->session->id_usuario));
        // $datos['mensajes_enviados'] = $this->Tabla_mensajes->select(array('usuario_emisor' => $this->session->id_usuario));
        // debug($datos);

        return $datos;

    }//end function cargar_datos

    public function eliminar_mensajes($id_mensaje){
        $this->load->model('Tabla_mensajes');
        $this->Tabla_mensajes->delete($id_mensaje);
        mensaje('Mensaje eliminado exitosamente');
        redirect('principal/'.$this->siid->TAREA_MENSAJES);
    }


    public function reglas_formulario($regla_formulario=NULL){

    }//end function reglas_formulario

    public function crear_vista($nombreVista=NULL, $datos=NULL){
        $data['contenido'] = $this->load->view($nombreVista, $datos, TRUE);
        $data['menuLateral'] = crear_menu_lateral($this->session->tarea_actual, $this->session->rol);
        $data['titulo_tarea'] = $datos['titulo_tarea'];

        $this->load->view('plantilla', $data);
    }//end function crear_vista

}//end class Dashboard

?>
