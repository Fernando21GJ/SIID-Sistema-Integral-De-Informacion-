<?php

class Tabla_subcategoria extends CI_Model {
    private $table = "categoria";

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

    public function insert($data){
        $result = $this->db->insert($this->table, $data);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end insert

    public function update($data, $id){
        $this->db->set($data);
        $this->db->where("id_categoria", $id);
        $result = $this->db->update($this->table, $data);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end update

    public function delete($id){
        $this->db->where('id_categoria', $id);
        $result = $this->db->delete($this->table);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end delete

    public function select_subcateria_documentos($id){
        $query = $this->db->get_where("categoria_documentos", array('id_categoria' => $id));
        $subcategoria = $query->result();
        if(count($subcategoria) > 0){
            return false;
        }
        else{
            return true;
        }
    }//end function select_subcateria_documentos

    public function delete_subcategoria_documento($id_documento, $id_subcategoria){
        $this->db->where('id_categoria', $id_subcategoria);
        $this->db->where('id_documento', $id_documento);
        $result = $this->db->delete("categoria_documentos");
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end delete_subcategoria_documento

}//end class Tabla_subcategoria
