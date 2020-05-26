<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nuevo_mensaje extends CI_Controller{

    public function __construct(){
        parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');

        if(!is_rol_permitido($this->siid->TAREA_MENSAJE_NUEVO, $this->session->rol)){
            redirect("principal");
            return;
        }
        // debug(is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol));
    }//end function

    public function index(){
        $this->crear_vista('panel/nuevo_mensaje', $this->cargar_datos());
    }//end function index

    public function cargar_datos(){
        $this->load->model('Tabla_usuarios');
        $datos['titulo_tarea'] = 'Enviar Mensaje';
        $usuario = $this->Tabla_usuarios->select_all();
        $datos['usuario'] = array();
       foreach ($usuario as $usu) {
            $data['id_usuario'] = $usu->id_usuario;
            $data['nombre'] = $usu->nombre;
            $data['paterno'] = $usu->paterno;
			$data['materno'] = $usu->materno;
			$data['email'] = $usu->email;
            $datos['usuario'][] = $data;
        }
        // debug($datos);
        return $datos;

    }	//end function cargar_datos

    public function reglas_formulario($regla_formulario=NULL){

    }//end function reglas_formulario

	public function enviar_mensaje(){
			$archivo=$_FILES['arch'];
		    $this->load->model('Tabla_Nuevo_Mensaje');

            $data = array(
			   'asunto' => $this->input->post('asu'),
               'mensaje' => $this->input->post('mesa'),
			   'usuario_receptor' => $this->input->post('usu'),
			   'usuario_emisor' => $this->session->id_usuario,
               'fecha' => date('Y-m-d')
               );
             $this->Tabla_Nuevo_Mensaje->insert($data);
			 $query = $this->db->get("mensaje");
             $data['records'] = $query->result();

             $this->load->library('smtp');
			 $this->load->library('phpmailer');
			 $asunto = $this->input->post('asu');
             $mensaje = $this->input->post('mesa');
             $para = $this->input->post('usu');
			 $de = $this->session->nombre_completo_usuario;
			 $this->load->model('Tabla_usuarios');
			 $usuario = $this->Tabla_usuarios->select_informacion_docente($para);
		   foreach ($usuario as $usu) {
				$pa= $usu->email;
				$n= $usu->nombre;
				$p= $usu->paterno;
				$m= $usu->materno;
				// $de=$n." ".$p." ".$m;

			}
			$hea='	<center>
					<h1 length="auto-size" ><img style="color: #000000; font-size: 14px;" src="https://scontent.fpbc2-2.fna.fbcdn.net/v/t1.0-9/39196820_2051538538231042_1329832298450780160_n.jpg?_nc_cat=0&oh=da5ee4dc9a60f0f56d9edb2015efffde&oe=5BF610F0" alt=""  />&nbsp; &nbsp; &nbsp; &nbsp;<img style="color: #000000; font-size: 14px;" src="http://universidadesdemexico.mx/logos/original/logo-universidad-politecnica-de-tlaxcala.png" alt="" width="180" height="94" /><strong><span style="color: #0000ff;"><p style="text-align: right;"><span style="background-color: #99ccff;"><span style="background-color: #33cccc; "text-align: right;">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></p></span></strong></h1>
					</center>
					<h2 style="color: #2e6c80;">Has recibido un nuevo mensaje de '.$de.' :</h2>
					<h2 style="color: #2e6c80;">&nbsp;</h2>
					<p>&nbsp;</p>
					';
			$c='<h3 style="text-align: justify;"><strong>'.$mensaje.'</strong></h3>';
			$foo='<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p><strong><span style="color: #000000;">Todos los derechos reservados.&copy; Universidad Politecnica de Tlaxcala</span></strong></p>';
			$mensaje=$hea.$c.$foo ;
			//Este bloque es importante
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "ssl";
			$mail->Host = "smtp.gmail.com";
			$mail->Port = 465;

			//Nuestra cuenta
			$mail->Username ='siid.uptx@gmail.com';
			$mail->Password = 'Sistemaintegraldeinformaciondocente1';

			//Agregar destinatario
			$mail->AddAddress($pa);
			$mail->Subject = $asunto;
			$mail->Body = $mensaje;
			//Para adjuntar archivo
			$mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
			$mail->MsgHTML($mensaje);

			//Avisar si fue enviado o no y dirigir al index
			if($mail->Send())
			{

					 $this->load->view('panel/nuevo_mensaje',$data);
					 redirect('principal/'.$this->siid->TAREA_MENSAJES);
			}
			else{

					$this->load->view('panel/dashboard');
					redirect('principal/'.$this->siid->TAREA_DASHBOARD);
			}


	}



    public function crear_vista($nombreVista=NULL, $datos=NULL){
        $data['contenido'] = $this->load->view($nombreVista, $datos, TRUE);
        $data['menuLateral'] = crear_menu_lateral($this->session->tarea_actual, $this->session->rol);
        $data['titulo_tarea'] = $datos['titulo_tarea'];

        $this->load->view('plantilla', $data);
    }//end function crear_vista

}//end class Dashboard

?>
