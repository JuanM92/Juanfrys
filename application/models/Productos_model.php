<?php
class Productos_model extends CI_Model {


    public function getProduct(){
        $this->db->where("estado","1");
        $resultados = $this->db->get("productos");
        return $resultados->result();
    }


}
