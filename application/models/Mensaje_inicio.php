<?php
class Mensaje_inicio extends CI_Model 
{
    private $table = "mensaje";

    public function __construct(){
        parent::__construct();
    }//end constructor

    public function select_all(){
        $query = $this->db->get($this->table);
        return $query->result();
    }//end select_all

    public function select($constraints){
        $query = $this->db->get_where($this->table, $constraints);
        return $query->result();
    }//end select

   

    public function select_nombre($id){
        $this->db->select("usuario.nombre, mensaje.asunto, id_mesaje");
        $this->db->from($this->table);
        $this->db->join("usuario","mensaje.usuario_emisor = usuario.id_usuario");
        $this->db->where("estatus","-1");
        $this->db->where("mensaje.usuario_receptor", $id);
        $this->db->limit("5");
        $consulta = $this->db->get()->result();
        return $consulta;
      }//end select_nombre

    public function regresar_numero($id){
        $this->db->select("count(*) as numero");
        $this->db->from($this->table);
        $this->db->join("usuario","mensaje.usuario_emisor = usuario.id_usuario");
        $this->db->where("estatus",-1);
        $this->db->where("mensaje.usuario_receptor", $id);
        $consulta = $this->db->get()->result();
        return $consulta;
    }//end regresar_numero

    public function update($data, $id){
        $this->db->set($data);
        $this->db->where($id);
        $result = $this->db->update($this->table, $data);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end update
    
}//End class Mensaje_inicio