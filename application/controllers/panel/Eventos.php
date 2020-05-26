<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   class Eventos extends CI_Controller{

       public function __construct(){
           parent::__construct();

           if(!is_rol_permitido($this->siid->TAREA_EVENTOS, $this->session->rol)){
               redirect("principal");
               return;
           }
           $this->load->helper('form');
           $this->load->helper('url');
           $this->load->library('form_validation');
           $this->load->model("Tabla_eventos");
       }//end function

       public function index() {

         $this->crear_vista('panel/eventos', $this->cargar_datos());


       }//end function index

       public function crear_vista($nombreVista=NULL, $datos=NULL){
           $data['contenido'] = $this->load->view($nombreVista, $datos, TRUE);
           $data['menuLateral'] = crear_menu_lateral($this->session->tarea_actual, $this->session->rol);
           $data['titulo_tarea'] = $datos['titulo_tarea'];

           $this->load->view('plantilla', $data);
       }//end function crear_vista
       public function cargar_datos(){
         $this->load->model('Tabla_eventos');
         $this->load->model('Tabla_usuarios');
         $this->load->model('Mensaje_inicio');
         $this->load->model('Notas_inicio');

         $datos["ver"]=$this->Tabla_eventos->ver();
         $datos['usuario'] = array ();


          $usuario=$this->Tabla_eventos->ver1();
            foreach ($usuario as $usu) {

              $data['id_usuario'] = $usu->id_usuario;
              $data['nombre'] = $usu->nombre;
              $data['paterno'] = $usu->paterno;
              $data['materno'] = $usu->materno;
              $datos['usuario'][]= $data;

    }
            $datos['evento'] = array ();
           //$datos['evento']=$this->Tabla_eventos->select_all();
            $evento=$this->Tabla_eventos->ver();
            foreach ($evento as $even) {
             $data['id_evento'] = $even->id_evento;
             $data['nombre'] = $even->nombre;
             $datos['evento'][]= $data;
           }


           $datos['titulo_tarea'] = 'Subir Evento';
           $datos['cargar'] = $this->session->idElemento;
           $datos['nombre_mensaje'] = $this->Mensaje_inicio->select_nombre($this->session->usuario_emisor);
           $datos['evento_inicio'] = $this->Tabla_eventos->select_evento($this->session->id_usuario);
          // $datos['nota_inicio'] = $this->Notas_inicio->select_nota($this->session->id_usuario);
           $datos['numero_mensaje'] = $this->Mensaje_inicio->regresar_numero($this->session->id_usuario);
           return $datos;

       }//end function cargar_datos

       public function reglas_formulario($regla_formulario=NULL){

       }//end function reglas_formulario
       public function agregarEvento_ver() {

            $this->load->view('panel/eventos',$data);
         }
       public function agregarEvento () {
          $this->load->model('Tabla_eventos');
            $data = array(

               'id_evento' => $this->input->post('id_evento'),
               'nombre' => $this->input->post('nombre'),
               'fecha' => $this->input->post('fecha'),
               'lugar' => $this->input->post('lugar'),
               'notas' => $this->input->post('notas'),
            );

              $this->Tabla_eventos->insert($data);
             $query = $this->db->get("evento");
             $data['records'] = $query->result();
             $this->load->view('panel/eventos',$data);
             //NO ELIMINAR
             //Eventos automaticos
             $this->session->evento_inicio=$this->Tabla_eventos->select_evento($this->session->id_usuario);
             redirect('principal/'.$this->siid->TAREA_EVENTOS);

         }


         public function add(){
           //compruebo si se a enviado submit
       if($this->input->post("submit")){

       //llamo al metodo add

       $add=$this->Tabla_eventos->add(

               $this->input->post("id_usuario"),
               $this->input->post("id_evento")
               );
       }
       if($add==true){
         mensaje(' El usuario ha sido invitado a tu evento ',1);
       }else{
         mensaje('Este Usuario Ya Fue invitado a este Evento', 2);

       }
       $this->load->view('panel/eventos',$data);
       redirect('principal/'.$this->siid->TAREA_EVENTOS);
   }
         public function mod($id_evento){
        if(is_numeric($id_evento)){
          $this->load->model('Tabla_eventos');
          $datos["mod"]=$this->Tabla_eventos->mod($id_evento);
          $this->load->view("panel/editarEvento",$datos);

          if($this->input->post("submit")){
                $mod=$this->Tabla_eventos->mod(
                        $id_evento,
                        $this->input->post("submit"),
                        $this->input->post("nombre"),
                        $this->input->post("fecha"),
                        $this->input->post("lugar"),
                        $this->input->post("notas")
                        );
                if($mod==true){
                  $this->load->view('panel/eventos',$data);
                  redirect('principal/'.$this->siid->TAREA_EVENTOS);
                }else{
                  $this->load->view('panel/eventos',$data);
                  redirect('principal/'.$this->siid->TAREA_EVENTOS);
                }
                $this->load->view('panel/eventos',$data);
                redirect('principal/'.$this->siid->TAREA_EVENTOS);
            }
        }else{
          $this->load->view('panel/eventos',$data);
          redirect('principal/'.$this->siid->TAREA_EVENTOS);
        }
    }
         /*public function eliminarEvento () {
           $this->load->model('Tabla_eventos');
           $id_evento = $this->input->post('id_evento');
           $this->Tabla_eventos->eliminar($id_evento);
            $this->load->view('panel/eventos',$data);
            redirect('principal/'.$this->siid->TAREA_EVENTOS);
         }*/
         public function eliminar($id_evento){
        if(is_numeric($id_evento)){
          $this->load->model('Tabla_eventos');
          $eliminar=$this->Tabla_eventos->eliminar($id_evento);
          if($eliminar==true){
            $this->load->view('panel/eventos',$data);
            redirect('principal/'.$this->siid->TAREA_EVENTOS);
          }else{
            $this->load->view('panel/eventos',$data);
            redirect('principal/'.$this->siid->TAREA_EVENTOS);
          }
          $this->load->view('panel/eventos',$data);
          redirect('principal/'.$this->siid->TAREA_EVENTOS);
        }else{
          $this->load->view('panel/eventos',$data);
          redirect('principal/'.$this->siid->TAREA_EVENTOS);
        }
    }

            //redirect('principal/'.$this->siid->TAREA_EVENTOS);

         public function recibirFormulario(){

                //Validaciones
                                                  //name del campo, titulo, restricciones
                $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|alpha|trim');
                $this->form_validation->set_rules('fecha', 'Fecha', 'required|min_length[3]|alpha|trim');
                $this->form_validation->set_rules('lugar', 'Lugar', 'required|min_length[3]|alpha|trim');
                $this->form_validation->set_rules('notas', 'Notas', 'required|min_length[3]|alpha|trim');
                //$this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[3]');
                //Mensajes
                // %s es el nombre del campo que ha fallado
                $this->form_validation->set_message('required','El campo %s es obligatorio');
                $this->form_validation->set_message('alpha','El campo %s debe estar compuesto solo por letras');
                //$this->form_validation->set_message('min_length[3]','El campo %s debe tener mas de 3 caracteres');
                //$this->form_validation->set_message('valid_email','El campo %s debe ser un email correcto');

                if ($this->form_validation->run() == FALSE) {
                  $this->load->view('panel/eventos', $this->cargar_datos());
               } else {
              echo "Datos cargador correctamente";
          }
           }







   }

   ?>
