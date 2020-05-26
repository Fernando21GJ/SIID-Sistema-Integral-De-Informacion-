<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Docente_editar extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol)){
            redirect("principal");
            return;
        }
        // debug(is_rol_permitido($this->siid->TAREA_DASHBOARD, $this->session->rol));
    }//end function

    public function index(){
            $this->crear_vista('panel/docente_editar', $this->cargar_datos());
    }//end function index

    public function cargar_datos(){
        $this->load->model('Tabla_usuarios');
        $this->load->model('Mensaje_inicio');
        $this->load->model('Tabla_eventos');
        $datos = array();
        if($this->session->idElemento!=null){
          $datos['titulo_tarea'] = 'Editar usuario';
        }else{
          $datos['titulo_tarea'] = 'Agregar usuario';
        }
        $datos['editar_usuario'] = $this->Tabla_usuarios->select_informacion_docente($this->session->idElemento);
        $datos['nombre_mensaje'] = $this->Mensaje_inicio->select_nombre($this->session->usuario_emisor);
        $datos['evento_inicio'] = $this->Tabla_eventos->select_evento($this->session->id_usuario);
        $datos['especialidades'] = $this->Tabla_usuarios->select_especialidades_usuario($this->session->idElemento);
        $datos['tabla_especialidad'] = $this->Tabla_usuarios->select_all_especialidad();
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

    public function usuario_nuevo(){
        $this->load->model('Tabla_usuarios');
        if($this->input->post('nombre') != '' || $this->input->post('paterno') != '' || $this->input->post('materno') != '' || $this->input->post('especialidad') != '' || $this->input->post('correo') != ''){
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'paterno' => $this->input->post('paterno'),
                'materno' => $this->input->post('materno'),
                'especialidad' => $this->input->post('especialidad'),
                'rol' => $this->input->post('rol_de_usuario'),
                'email' => $this->input->post('correo'),
                'password' => hash('sha256', $this->input->post('contrasenia'))
            );
            if($this->Tabla_usuarios->insert($data)){
                    mensaje('Usuario creado exitosamente');
                    redirect('principal/'.$this->siid->TAREA_DOCENTES);
            }//end if insertado correctamente
            else{
                mensaje('Error al agregar el usuario',2);
                redirect('principal/'.$this->siid->TAREA_DOCENTES);
            }//end if else no insertado correctamente
        }//end if atributos no estan vacios
        else{
            mensaje('Debe escribir los datos',3);
            redirect('principal/'.$this->siid->TAREA_DOCENTES);
        }//end if aelse atributos no estan vacios
    }//end function usuario_nuevo

    public function editar_informacion_personal(){
        $this->load->model('Tabla_usuarios');
        if($this->input->post('nombre') != '' || $this->input->post('paterno') != '' || $this->input->post('materno') != '' || $this->input->post('especialidad') != '' || $this->input->post('correo') != ''){
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'paterno' => $this->input->post('paterno'),
                'materno' => $this->input->post('materno'),
                'rol' => $this->input->post('rol'),
                'email' => $this->input->post('correo'),
                'tutor' => $this->input->post('tutoria')
            );
            if($this->Tabla_usuarios->update($data,$this->session->idElemento)){
                    if($this->input->post('especialidad')!=null){
                          $id_usuario_insertado = $this->Tabla_usuarios->select_id_usuario($this->input->post('correo'));
                          foreach ($this->input->post('especialidad') as $value) {
                            $data2= array();
                            foreach ($id_usuario_insertado as $valor) {
                              $data2= array(
                                'id_usuario'=>$valor->id_usuario,
                                'id_especialidad'=>$value
                              );
                            }
                            $this->Tabla_usuarios->insert_especialidad($data2);
                          }
                          mensaje('Usuario actualizado exitosamente');
                          redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
                    }else{
                      mensaje('Usuario actualizado exitosamente');
                      redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
                    }
            }//end if insertado correctamente
            else{
                mensaje('Error al actualizar el usuario',2);
                redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
            }//end if else no insertado correctamente
        }//end if atributos no estan vacios
        else{
            mensaje('Debe escribir los datos',3);
            redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
        }//end if aelse atributos no estan vacios
    }//end function editar_informacion_personal

    public function editar_password(){
        $this->load->model('Tabla_usuarios');
        if($this->input->post('contrasenia') != '' ){
          if($this->input->post('contrasenia')!=$this->input->post('contraseniaC')){
            mensaje('Las contraseñas no coinciden',2);
            redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
          }else{
              $data = array(
                  'password' => hash('sha256', $this->input->post('contrasenia'))
              );
              if($this->Tabla_usuarios->update($data,$this->session->idElemento)){
                      mensaje('Contraseña actualizada exitosamente');
                      redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
              }//end if insertado correctamente
              else{
                  mensaje('Error al actualizar la contraseña',2);
                  redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
              }//end if else no insertado correctamente
          }
        }//end if atributos no estan vacios
        else{
            mensaje('Debe escribir su contraseña',3);
            redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
        }//end if aelse atributos no estan vacios
    }//end function editar_informacion_personal

    public function actualizar_horario(){
      $this->load->model('Tabla_usuarios');
      $config['upload_path'] = './horarios/';
      $config['allowed_types'] = 'doc|pdf';
      $config['max_size']    = '1000000';
      //$config['overwrite'] = TRUE;
      //$config['remove_spaces'] = TRUE;
      //$config['encrypt_name'] = TRUE;
      $this->load->library('upload', $config);
      $this->upload->do_upload('horario');
      $data_upload_files = $this->upload->data();

      //$image = $data_upload_files['full_path'];
      $image_path = $this->upload->data();
      $data = array(
          'horario'=>$image_path['file_name']
            );

         // if upload failed , display errors
         if($this->Tabla_usuarios->update($data,$this->session->idElemento)){
                 mensaje('Horario actualizado exitosamente');
                 redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
         }//end if insertado correctamente
         else{
             mensaje('Error al actualizar horario',2);
             redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
         }//end if else no insertado correctamente
    }

    public function bootear_contra(){
      $this->load->model('Tabla_usuarios');
      $data = array(
          'password' => hash('sha256', 'siiduptx')
      );
      if($this->Tabla_usuarios->update($data,$this->session->idElemento)){
              mensaje('Contraseña reestablecida a : siiduptx');
              redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
      }//end if insertado correctamente
      else{
          mensaje('Error al reestablecer la contraseña',2);
          redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
      }//end if else no insertado correctamente
    }

    public function eliminar_especialidad($identificador_esp_usu,$id_us_esp){
      $this->load->model('Tabla_usuarios');
      if($this->Tabla_usuarios->eliminar_especialidad($identificador_esp_usu,$id_us_esp)){
        mensaje('Especialidad eliminada correctamente');
        redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
      }else{
        mensaje('Error al eliminar la especialidad',2);
        redirect('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->idElemento);
      }
    }

}//end class Cursos
?>
