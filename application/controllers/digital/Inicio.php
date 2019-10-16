<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}
	public function index(){
		if (isset($_SESSION['login'])) {//Si existe session, que cargue el contenido principal
			$data['title']='OFISA DIGITAL';

			$data['head'] = $this->load->view('basic_template/head',$data,true);
			$data['header'] = $this->load->view('basic_template/header',$data,true);
			$data['footer'] = $this->load->view('basic_template/footer',$data,true);
			$data['sidebar_nav'] = $this->load->view('basic_template/sidebar_nav',$data,true);
			$data['main_content'] = $this->load->view('basic_template/main_content',$data,true);
			$data['scripts'] = $this->load->view('basic_template/scripts',$data,true);
			$this->load->view('basic_template/main_view',$data);	
		}else{
			if ($_POST) {//Verifica si trae datos por POST para el login
				// Validar si el usuario existe
				$consulta = $this->Crud_model->getWhere('usuarios','*',array('username'=>$_POST['username'],'password'=>$_POST['password']),null);
				
				if ($consulta!=null) {
					$data = [];
					$this->session->set_userdata(array('login'=>true,'id_usuario'=>$consulta->id_usuario,'nombre'=>$consulta->nombre,'apellidoP'=>$consulta->apellidoP,'apellidoM'=>$consulta->apellidoM,'tipo_usuario'=>$consulta->tipo_usuario));

					$data['head'] = $this->load->view('basic_template/head',$data,true);
					$data['header'] = $this->load->view('basic_template/header',$data,true);
					$data['footer'] = $this->load->view('basic_template/footer',$data,true);
					$data['sidebar_nav'] = $this->load->view('basic_template/sidebar_nav',$data,true);
					$data['main_content'] = $this->load->view('basic_template/main_content',$data,true);
					$data['scripts'] = $this->load->view('basic_template/scripts',$data,true);
					$this->load->view('basic_template/main_view',$data);	
				}else{
					$data['mensaje'] = '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrecta.</div>';
					$this->session->set_flashdata('error_login', $data['mensaje']);
					$this->login();	
				}
			}else{ //Si no trae datos manda a la pantalla de login
				$this->login();	
			}
			
		}
		
	}
	public function login(){
		if (isset($_SESSION['login'])) {
			$this->session->sess_destroy();
		}
		$this->load->view('basic_template/login');
	}
}
