<?php
class  Propiedad extends CI_Model
{

    function __construct()
    {
        parent::__construct(); //invocando a la clase padre
    }
    //funcion par aconsultar los datos de la tabla 
    function obtenerTodos(){
        $this->db->order_by("id_loc","asc");
        // ordenar de forma ascednete con el id
        $propiedades=$this->db->get("localizacion");
        if($propiedades->num_rows()>0){ //(select * from clientes)cuando si hay clientes
            return $propiedades;
        }else{
            return false; //cuando no existen  
        }

    }

    public function insertar($datos){
        return $this->db->insert("localizacion",$datos);
    }

}