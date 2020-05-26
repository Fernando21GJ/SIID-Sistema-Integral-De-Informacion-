<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index(){
    	//iniciar sesion
    	$this->session->sess_destroy();

    	//mensaje
    	// setMensage(1, "Sesión finalizada");

		redirect('principal');
    }//end index

}//end class Login
?>
