<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}//end function __construct

	public function index($idTarea=NULL, $idElemento=NULL,$idElementoDos=''){

		// VARIABLES IMPORTANTES NO MOVER
		$sesion_iniciada = isset($this->session->sesion_iniciada) ? $this->session->sesion_iniciada : FALSE;
		$this->session->tarea_actual = $idTarea==NULL ? $this->siid->TAREA_DASHBOARD : $idTarea;

		if(!$sesion_iniciada){
			if($this->session->login_failure){
				redirect('portal/inicio');
			}//end if error en el login
			else{
				switch($this->session->tarea_actual){
					case $this->siid->PAGINA_INICIO:
						redirect('portal/inicio');
						break;
					default:
						redirect('portal/inicio');
						break;

				}//end if switch portal
			}//end if else navegacion normal
			return;
		}//end if sesion no iniciada

		switch ($this->session->tarea_actual) {
			case  $this->siid->TAREA_NONE:
				redirect('panel/dashboard');
				break;
			case  $this->siid->TAREA_DASHBOARD:
				redirect('panel/dashboard');
				break;
			case  $this->siid->TAREA_DOCUMENTOS:
				$this->session->idElemento = $idElemento;
				redirect('panel/documentos');
				break;
			case $this->siid->TAREA_VISUALIZAR_DOCUMENTO:
				$this->session->idElemento = $idElemento;
				redirect('panel/vista_previa');
				break;
			case  $this->siid->TAREA_EVENTOS:
			 	$this->session->idElemento = $idElemento;
				redirect('panel/eventos');
				break;
			case  $this->siid->TAREA_EVENTO_EDITAR:
				$this->session->idElemento = $idElemento;
				redirect('panel/editarEvento');
				break;
			case $this->siid->TAREA_CURSOS:
				redirect('panel/cursos');
				break;
			case $this->siid->TAREA_SUBCATEGORIAS:
				$this->session->idElemento = $idElemento;
				redirect('panel/subcategorias');
				break;
			case $this->siid->TAREA_DOCENTES:
 				redirect('panel/docentes');
 				break;
		  	case $this->siid->TAREA_DOCENTE_EDITAR:
				$this->session->idElemento = $idElemento;
				redirect('panel/docente_editar');
				break;
			case $this->siid->TAREA_MENSAJES:
				$this->session->idElemento = $idElemento;
				redirect('panel/mensajes');
				break;
			case $this->siid->TAREA_LEER_MENSAJES:
				$this->session->idElemento = $idElemento;
				redirect('panel/leer_mensajes');
				break;
			case $this->siid->TAREA_NOTAS:
 				redirect('panel/notas');
 				break;
			case $this->siid->TAREA_NOTA_EDITAR:
  				redirect('panel/editarnota');
  				break;
		 	case $this->siid->TAREA_ELIMINAR_DOCENTE:
		 		$this->session->idElemento = $idElemento;
 				redirect('panel/eliminar_docente');
 				break;
			case $this->siid->TAREA_CURSOS_EDITAR:
		 		$this->session->idElemento = $idElemento;
 				redirect('panel/cursos_editar');
 				break;
			case $this->siid->TAREA_MENSAJE_NUEVO:
		 		$this->session->idElemento = $idElemento;
 				redirect('panel/nuevo_mensaje');
 				break;
			case $this->siid->TAREA_EVENTO_EDITAR:
		 		$this->session->idElemento = $idElemento;
 				redirect('panel/editarEvento');
 				break;
			case $this->siid->TAREA_ENCENDER_PROYECTOR:
				redirect('panel/encender_proyector');
				break;
			default:
				redirect('panel/dashboard');
				break;
		}//end switch
	}//end function index
}//end class Principal
