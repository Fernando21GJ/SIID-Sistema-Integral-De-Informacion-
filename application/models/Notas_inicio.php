<?php
class Notas_inicio extends CI_Model
{
    private $table = "notas";

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



    public function select_nota($id){
        $this->db->order_by("id_nota", "DESC");
        $this->db->select("notas.id_nota, notas.nombre, notas.fecha, notas.nota");
        $this->db->from($this->table);
        $this->db->join("usuario","notas.id_usuario = usuario.id_usuario");
        $this->db->where("usuario.id_usuario", $id);
        $this->db->limit("5");
        $consulta = $this->db->get()->result();
        return $consulta;
      }//end select_nombre


}//End class Mensaje_inicio
