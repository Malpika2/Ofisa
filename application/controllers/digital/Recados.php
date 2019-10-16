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

		return $this->load->view('recados/tabla_recados',$data,true);
	}
}