<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recados extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$data['title']= 'RECADOS';
		$data['head'] = $this->load->view('basic_template/head',$data,true);
		$data['header'] = $this->load->view('basic_template/header',$data,true);
		$data['footer'] = $this->load->view('basic_template/footer',$data,true);
		$data['sidebar_nav'] = $this->load->view('basic_template/sidebar_nav',$data,true);
		$data['tabla_recados'] = $this->getHistorialRecados($data);
		$data['main_content'] = $this->load->view('recados/recados',$data,true);
		$data['scripts'] = $this->load->view('basic_template/scripts',$data,true);
		$this->load->view('basic_template/main_view',$data);	
	}
	public function getHistorialRecados($data){
		$data['tecnicos'] = $this->Crud_model->getWhereJoin('tecnicos','*',array('tecnicos.estatus_tecnico'=>'ACTIVO'),'datos_generales','tecnicos.id_datos_generales = datos_generales.id_datos_generales','LEFT');
		$data['recados'] = $this->Crud_model->getAllJoin('recados','recados.*,tecnicos.nombre,tecnicos.apellidoP','tecnicos','recados.id_tecnico = tecnicos.id_tecnico','LEFT');
		return $this->load->view('recados/tabla_recados',$data,true);
	}
	public function guardar_recado(){
		$data = $_POST;
		$this->Crud_model->insert('recados',array('id_tecnico'=>$data['tecnico'],'id_cliente'=>$data['cliente'],'telefono_cliente'=>$data['tel_cliente'],'asunto'=>$data['asunto'],'fecha_registro'=>time(),'estatus_recado'=>'ENVIADO','notificacion_whatsapp'=>$data['notificacion_whatsapp'],'notificacion_correo'=>$data['notificacion_correo']));
		$vista = $this->getHistorialRecados($data);
		echo $vista;
	}
}