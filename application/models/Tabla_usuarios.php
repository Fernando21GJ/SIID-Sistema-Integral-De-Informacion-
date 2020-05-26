<?php

class Tabla_usuarios extends CI_Model {
    private $table = "usuario";

    public function __construct(){
        parent::__construct();
    }//end constructor

    public function select_all(){
        $query = $this->db->get($this->table);
        return $query->result();
    }//end select_all

    public function select_all_especialidad(){
        $query = $this->db->get('especialidad');
        return $query->result();
    }//end select_all_especialidades

    public function select($constraints){
        $query = $this->db->get_where($this->table, $constraints);
        return $query->result();
    }//end select

    public function select_informacion_docente($id){
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->where("id_usuario", $id);
        $query = $this->db->get()->result();
        return $query;
    }//end function  select_cursos_docente

    public function select_id_usuario($id){
        $this->db->select("id_usuario");
        $this->db->from($this->table);
        $this->db->where("email", $id);
        $query = $this->db->get()->result();
        return $query;
    }//end function  select_id_user

    public function select_especialidades_usuario($id){
        $this->db->select("usuario_especialidad.id_especialidad as ide,especialidad.especialidad as nombre_esp");
        $this->db->from("usuario_especialidad");
        $this->db->join("especialidad","usuario_especialidad.id_especialidad=especialidad.id_especialidad");
        $this->db->where("id_usuario",$id);
        $query = $this->db->get()->result();
        return $query;
    }//end function select_especialidades_usuario

    public function insert($data){
        $result = $this->db->insert($this->table, $data);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end insert

    public function insert_especialidad($data){
        $result = $this->db->insert('usuario_especialidad', $data);
        if($result){
            return true;
        }//end if insert ok
        else{
            return false;
        }//end else
    }//end insert

    public function update($data, $id){
        $this->db->set($data);
        $this->db->where("id_usuario", $id);
        $result = $this->db->update($this->table, $data);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end update

    public function delete($id){
        $this->db->where('id_usuario', $id);
        $result = $this->db->delete($this->table);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end delete

    public function login($usuario, $password){
        $this->db->select("usuario.*");
        $this->db->from($this->table);
        $this->db->where("email",$usuario);
        $this->db->where("password",$password);
        $resultado = $this->db->get()->result();
        if(sizeof($resultado) > 0){
            return $resultado[0];
        }
        else{
            return NULL;
        }
    }//end login

    public function delete_especialidades_usuario($id){
        $this->db->join("especialidad","usuario_especialidad.id_especialidad=especialidad.id_especialidad");
        $this->db->where("id_usuario",$id);
        $result = $this->db->delete('usuario_especialidad');
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end function select_especialidades_usuario

    public function eliminar_especialidad($identificador_esp_usu,$id_us_esp){
      $this->db->join("especialidad","usuario_especialidad.id_especialidad=especialidad.id_especialidad");
      $this->db->join("usuario","usuario_especialidad.id_usuario=usuario.id_usuario");
      $this->db->where("usuario_especialidad.id_especialidad",$identificador_esp_usu);
      $this->db->where("usuario_especialidad.id_usuario",$id_us_esp);
      $result = $this->db->delete('usuario_especialidad');
      if($result){
          return true;
      }
      else{
          return $result;
      }
    }

    // public function desactivar_usuario($id_usuario){
    //     $resultado = $this->update(array("estatus"=>-1),$id_usuario);
    //     return $resultado;
    // }//end of function desactivar_usuario
    //
    // public function activar_usuario($id_usuario){
    //     $resultado = $this->update(array("estatus"=>1),$id_usuario);
    //     return $resultado;
    // }//end of function desactivar_usuario

}//end class Tabla_usuarios
