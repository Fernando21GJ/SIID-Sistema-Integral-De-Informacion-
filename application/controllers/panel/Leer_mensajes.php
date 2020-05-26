<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Leer_mensajes extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!is_rol_permitido($this->siid->TAREA_LEER_MENSAJES, $this->session->rol)){
            redirect("principal");
            return;
        }
        // debug(is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol));
    }//end function

    public function index(){
        if(!$this->session->idElemento){
          redirect('principal/'.$this->siid->TAREA_MENSAJES);
        }
        $this->crear_vista('panel/leer_mensajes', $this->cargar_datos());
    }//end function index

    public function cargar_datos(){

        // NO BORRAR
        //Actualiza notificaciones de mensajes
        $this->load->model('Mensaje_inicio');
        $datos['nombre_mensaje'] = $this->Mensaje_inicio->select_nombre($this->session->id_usuario);
        $this->session->nombre_mensaje = $datos['nombre_mensaje'];

        $this->load->model('Tabla_mensajes');
        $this->load->model('Tabla_usuarios');


        $datos['titulo_tarea'] = 'Leer Mensaje';
        $datos['usuario'] = $this->session->id_usuario;

        $datos['mensajes'] = array();
        $mensajes = $this->Tabla_mensajes->select(array('id_mesaje' => $this->session->idElemento));
        foreach ($mensajes as $msj) {
          $mensaje['id_mensaje'] = $msj->id_mesaje;
          $receptor = $this->Tabla_usuarios->select(array('id_usuario' => $msj->usuario_receptor))[0];
          $mensaje['receptor'] = $receptor->nombre.' '.$receptor->paterno.' '.$receptor->materno;
          $mensaje['mensaje'] = $msj->mensaje;
          $mensaje['asunto'] = $msj->asunto;
          $emisor = $this->Tabla_usuarios->select(array('id_usuario' => $msj->usuario_emisor))[0];
          $mensaje['emisor'] = $emisor->nombre.' '.$emisor->paterno.' '.$emisor->materno;
          $datos['mensajes'][] = $mensaje;
        }
        //debug($datos);
        $this->load->model('Mensaje_inicio');
         $this->Mensaje_inicio->update(array('estatus' => 1), array('id_mesaje'=>$this->session->idElemento, 'usuario_receptor'=>$this->session->id_usuario));
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

}//end class Dashboard

?>
