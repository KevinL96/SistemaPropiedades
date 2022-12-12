<?php

class  Propiedades extends CI_Controller
{

    function __construct()
    {
        parent::__construct(); //invocando a la clase padre
        $this->load->model('propiedad');
    }
    public function index(){
        $data["listadoPropiedades"]=$this->propiedad->obtenerTodos(); //se hace la consulta
        //print_r($listadoClientes->result()); //se presentan los datos 
        $this ->load->view("propiedades/index",$data);
    }
    
    public function nuevo(){
        $this->load->view('propiedades/nuevo.php');
    }

    public function guardarPropiedad(){

        $datosNuevaPropiedad= array(
            "nombre_loc"=>$this->input->post('nombre_loc'),
            "apellido_loc"=>$this->input->post('apellido_loc'),
            "cedula_loc"=>$this->input->post('cedula_loc'),
            "telefono_loc"=>$this->input->post('telefono_loc'),
            "latitud1_loc"=>$this->input->post('latitud1_loc'),
            "longitud1_loc"=>$this->input->post('longitud1_loc'),
            "latitud2_loc"=>$this->input->post('latitud2_loc'),
            "longitud2_loc"=>$this->input->post('longitud2_loc'),
            "latitud3_loc"=>$this->input->post('latitud3_loc'),
            "longitud3_loc"=>$this->input->post('longitud3_loc'),
            "latitud4_loc"=>$this->input->post('latitud4_loc'),
            "longitud4_loc"=>$this->input->post('longitud4_loc')
        );
        print_r($datosNuevaPropiedad);
		if($this->propiedad->insertar($datosNuevaPropiedad)){
			
			redirect('propiedades/index'); 
		}else{
			echo "<h1>Error</h1>";
		}
    }
   

}