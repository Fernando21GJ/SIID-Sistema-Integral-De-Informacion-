<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sesion extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper("form");
        $this->load->library("form_validation");
    }//end function

    private function reglas_formulario(){
        return array(
            array(
                'field' => 'usuario',
				'label' => 'Email',
				'rules' => 'required|valid_email',
				'errors' => array(
					'required' => '%s requerido.',
					'valid_email' => 'Email mal formado.'
					)
            ),
            array(
                'field' => 'password',
				'label' => 'Contraseña',
				'rules' => 'required|min_length[5]|max_length[16]',
				'errors' => array(
					'required' => '%s requerida.',
					'min_length' => 'Longitud mínima 5: %s.',
					'max_length' => 'Longitud máxima 16: %s.'
				)
            )
        );
    }//end function reglas_formulario

    public function index(){
        //VARIABLE IMPORTANTE NO MOVER
        $sesion_iniciada = isset($this->session->sesion_iniciada) ? $this->session->sesion_iniciada : False;

        if($sesion_iniciada){
            redirect('principal');
            return;
        }//end if session iniciada

        $this->form_validation->set_rules($this->reglas_formulario());
        if($this->form_validation->run() == FALSE){
            redirect('principal/'.$this->siid->PAGINA_INICIO);
        }//end if error en la reglas de formulario
        else{
            $this->verificar();
        }//end if validacion de formulario
    }//end function index

    public function verificar(){
        $this->load->model('Tabla_usuarios');
		$respuesta = $this->Tabla_usuarios->login($this->input->post('usuario'), hash('sha256',$this->input->post('password')));
		if($respuesta != NULL){
			$this->session->sesion_iniciada = True;
			$this->session->id_usuario = $respuesta->id_usuario;
			$this->session->nombre_usuario = $respuesta->nombre;
			$this->session->nombre_completo_usuario = $respuesta->nombre.' '.$respuesta->paterno.' '.$respuesta->materno;
			$this->session->rol = $respuesta->rol;
			$this->session->email_usuario = $respuesta->email;
			$this->session->tarea_actual = $this->siid->TAREA_DASHBOARD;
			$this->session->login_failure = FALSE;
		}//end if si existe
		else{
			$this->session->login_failure = TRUE;
			mensaje('Usuario y/o contraseña incorrecto(s)', 2);
		}

		redirect('/principal/'.$this->session->tarea_actual);
    }//end function verificar

}//end class Dashboard

?>
