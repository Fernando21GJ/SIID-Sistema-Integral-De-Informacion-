<?php

class Tabla_eventos extends CI_Model {
    private  $table = "evento";
    private  $ta = "usuario_evento";

    public function __construct(){
        parent::__construct();
    }//end constructor

    public function ver1(){
      $idusu=$this->session->id_usuario;
      //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM usuario where id_usuario != $idusu;");

        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }//end select_all

    public function select($constraints){
        $query = $this->db->get_where($this->table, $constraints);
        return $query->result();
    }//end select
    public function add($id_usuario,$id_evento){
            $consulta=$this->db->query("SELECT id_usuario,id_evento FROM  usuario_evento where id_usuario = '$id_usuario' and id_evento = '$id_evento'");
            if($consulta->num_rows()==0){
              $consulta=$this->db->query("INSERT INTO usuario_evento VALUES('$id_usuario','$id_evento');");
            if($consulta==true){
              return true;
            }else{
                return false;
            }

            }else{
            return false;

            }



    }
    public function insert($data){
        $result = $this->db->insert($this->table, $data);
        if($result){
             $idusu=$this->session->id_usuario;
             $xd = $this->db->insert_id();
             $consulta=$this->db->query("INSERT INTO usuario_evento VALUES('$idusu','$xd');");
           if($consulta==true){
             return true;
           }else{
               return false;
           }
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end insert

    /*public function update($data, $old_id_evento){
        $this->db->set($data);
        $this->db->where("id_evento", $old_id_evento);
        $result = $this->db->update($this->table, $data);
        if($result){
            return true;
        }//end if insert ok
        else{
            return $result;
        }//end else
    }//end update*/
    public function ver(){
      $idusu=$this->session->id_usuario;
      //Hacemos una consulta
      //$consulta=$this->db->query("SELECT * FROM evento");
      $consulta=$this->db->query("SELECT t1.*,t2.*
                  from  evento as t1
                inner join usuario_evento as t2
               where t1.id_evento=t2.id_evento and
              t2.id_usuario =$idusu;
      ");

      //Devolvemos el resultado de la consulta
      return $consulta->result();
  }
    public function mod($id_evento,$Editar="NULL",$nombre="NULL",$fecha="NULL",$lugar="NULL",$notas="NULL"){
       if($Editar=="NULL"){
           $consulta=$this->db->query("SELECT * FROM evento WHERE id_evento=$id_evento");
           return $consulta->result();
       }else{
         $consulta=$this->db->query("
             UPDATE evento SET nombre='$nombre', fecha='$fecha',
             lugar='$lugar', notas='$notas' WHERE id_evento=$id_evento;
                 ");
         if($consulta==true){
             return true;
         }else{
             return false;
         }
       }
   }


  /*public function eliminar($id_evento){
        $this->db->where('id_evento', $id_evento);
        $result = $this->db->delete($this->table);
        if($result){

            return true;

        }//end if insert ok
        else{

            return $result;
        }//end else
    }//end delete*/
    public function eliminar($id_evento){
     $consulta=$this->db->query("DELETE FROM evento WHERE id_evento=$id_evento");
     if($consulta==true){
         return true;
     }else{
         return false;
     }
  }



  public function select_evento($id){
    $this->db->select("evento.nombre, evento.fecha");
      $this->db->from($this->table);
      $this->db->join("usuario_evento","evento.id_evento = usuario_evento.id_evento");
      $this->db->join("usuario","usuario.id_usuario = usuario_evento.id_usuario");
      $this->db->where("usuario.id_usuario", $id);
      $this->db->where("fecha>= curdate()");
      $this->db->order_by("fecha ASC");
      $this->db->limit("5");
      $consulta = $this->db->get()->result();
      return $consulta;
  }//end select_evento

}//end class Tabla_eventos
