<?php

class Tabla_notas extends CI_Model
{
    private $table = "notas";

    public function __construct()
    {
        parent::__construct();
    } //end constructor

    public function select_all()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    } //end select_all

    public function select($constraints)
    {
        $query = $this->db->get_where($this->table, $constraints);
        return $query->result();
    } //end select

    public function insert($data)
    {
        $result = $this->db->insert($this->table, $data);
        if ($result) {
            return true;
        } //end if insert ok
        else {
            return $result;
        } //end else
    } //end insert

    public function getNota($id_nota)
    {
        $this->db->where("id_nota", $id_nota);
        $resultado = $this->db->get("notas");
        return $resultado->row();
    }

    public function update($id_nota, $data)
    {
        $this->db->where("id_nota", $id_nota);
        return $this->db->update("notas", $data);
    }

    public function delete($id)
    {
        $this->db->where('id_nota', $id);
        $result = $this->db->delete($this->table);
        if ($result) {
            return true;
        } //end if
        else {
            return $result;
        } //end else
    } //end delete

    public function select_notas_docente($id)
    {
        //$this->db->order_by("id_nota", "DESC");
        $this->db->select("notas.*");
        $this->db->from($this->table);
        $this->db->order_by("fecha", "ASC");
        $this->db->join("usuario", "usuario.id_usuario = notas.id_usuario");
        $this->db->where("usuario.id_usuario", $id);
        $notas = $this->db->get()->result();
        return $notas;
    } //end function  select_cursos_docente



} //end class Tabla_cursos
