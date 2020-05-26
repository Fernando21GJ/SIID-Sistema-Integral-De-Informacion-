<?php

class Tabla_documentos extends CI_Model {
    private $table = "documentos";

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
        $this->db->where("id_documento", $id);
        $result = $this->db->update($this->table, $data);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end update

    public function delete($id){
        $this->db->where('id_documento', $id);
        $result = $this->db->delete($this->table);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end delete

    public function select_documentos_subcategoria($id){
        $this->db->select("documentos.*");
        $this->db->from($this->table);
        $this->db->join("categoria_documentos","categoria_documentos.id_documento = documentos.id_documento");
        $this->db->where("categoria_documentos.id_categoria", $id);
        $documentos = $this->db->get()->result();
        return $documentos;
    }//end function  select_cursos_docente

    public function insert_subcategoria_documento($data){
        $result = $this->db->insert('categoria_documentos', $data);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end insert

    public function contar_documentos(){
        $this->db->group_by('tipo');
        $query = $this->db->get($this->table);
        $documentos = $query->result();
        $row['docx'] = 0;
        $row['pdf'] = 0;
        $row['xlsx'] = 0;
        $row['otro'] = 0;
        foreach ($documentos as $val) {
            if($val->tipo != ''){
                $row[$val->tipo] = sizeof($this->select(array('tipo'=>$val->tipo)));
            }
        }
        return $row;
    }//end function contar_documentos

}//end class Tabla_documentos
