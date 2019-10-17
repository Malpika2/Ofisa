<?php
/**
 * 
 */
class Backend extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function get_autocomplete(){
		if (isset($_GET['term'])) {
            $result = $this->Crud_model->getlike('clientes','id_cliente','nombre',$_GET['term'],'10');
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] =  array('Nombre'=>$row->nombre,'ApellidoP'=>$row->apellidoP);
                echo json_encode($arr_result);
            }
        }
	}
}