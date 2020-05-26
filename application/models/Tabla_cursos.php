<?php

class Tabla_cursos extends CI_Model {
    private $table = "cursos";

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
        $this->db->where("id_curso", $id);
        $result = $this->db->update($this->table, $data);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end update

    public function delete($id){
        $this->db->where('id_curso', $id);
        $result = $this->db->delete($this->table);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end delete

    public function select_cursos_docente($id){
        $this->db->select("cursos.*");
        $this->db->from($this->table);
        $this->db->join("usuario_curso","usuario_curso.id_curso = cursos.id_curso");
        $this->db->where("usuario_curso.id_usuario", $id);
        $cursos = $this->db->get()->result();
        return $cursos;
    }//end function  select_cursos_docente

    public function insert_usuario_curso($data){
        $result = $this->db->insert('usuario_curso', $data);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end function insert_usuario_curso

}//end class Tabla_cursos
