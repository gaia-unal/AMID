<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public $id;

	public function __construct(){
		parent::__construct();
		$this->load->model('institucionModel');
		$this->load->model('usuarioModel');
		$this->load->model('profesormoduloModel');
		$this->load->helper('form');

		$this->id = $this->session->userdata('id');
    }
	
	public function index(){
		// $data['instituciones']= $this->institucionModel->getAll();
		// $this->load->view('login',$data);
		$this->logout();
	}

	public function main(){
		
		if(isset($this->id)){
			$data['profesormodulo']=$this->profesormoduloModel->getOne();
			$this->load->view('inicio',$data);
		}else{
			$this->logout();

		}
	}

	public function perfil(){

		if(isset($this->id)){
			// echo "Perfil";
			$id=$this->id;
			$user=$this->usuarioModel->getUser($id);

			$data['usuario']=$user;
			$data['institucion']=$this->institucionModel->getOne((int)$user->result()[0]->fkid_institucion);

			// echo $data['institucion']->result()[0]->nombre;
			$this->load->view('perfil',$data);
		}else{
			$this->logout();
		}
	}

	public function reportes(){

		if(isset($this->id)){
			// echo "Reporte";
			$this->load->view('inicio');
		}else{
			$this->logout();

		}
	}

	public function login(){

		$data= array(
			'email' => $this->input->post('email'),
			'pass' => $this->input->post('pass')
		);

		if(isset($data['email'])){
			$user=$this->usuarioModel->getOne($data['email'],$data['pass']);

			if($user){
				$this->load->library('session');

				$userLogin= array(
					'id'  		=> $user->id_usuario,
					'name'  	=> $user->nombre,
					'lastname'  => $user->apellido,
					'email'     => $user->correo,
					'rol'       => $user->rol,
					'login' 	=> TRUE
				);

				$this->session->set_userdata($userLogin);
				$data['profesormodulo']=$this->profesormoduloModel->getOne();

				
				$this->load->view('inicio',$data);
				// echo $this->session->userdata('name');
			}else{
				$data['instituciones']= $this->institucionModel->getAll();
				$data['badUserPass']="Usuario y/o contraseña incorrecta";
				$this->load->view('login',$data);
			}
		}
		else{
			$name=$this->session->userdata('name');
        	if(isset($name)){
				$data['profesormodulo']=$this->profesormoduloModel->getOne();
				$this->load->view('inicio',$data);
			}else{
				$data['instituciones']= $this->institucionModel->getAll();
				$this->load->view('login',$data);	
			}
			
		}
	}

	public function logout(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('lastname');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('rol');
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('idAct');
		

		$data['instituciones']= $this->institucionModel->getAll();
		$this->load->view('login',$data);
		
	}

	public function restorePass(){

		$passHash = password_hash($this->input->post('pass1_r'),PASSWORD_DEFAULT);
		$data= array(
			'name'     => $this->input->post('name_r'),
			'lastname' => $this->input->post('lastname_r'),
			'email'    => $this->input->post('email_r'),
			'question' => $this->input->post('question_r'),
			'answer'   => $this->input->post('answer_r'),
			'pass'     => $passHash
		);

		$data['instituciones']= $this->institucionModel->getAll();

		if(isset($data['email'])){
			$user=$this->usuarioModel->update($data);

			if($user){
				$data['credenciales']=TRUE;
			}else{
				$data['credenciales']=FALSE;
			}

		}
		$this->load->view('login',$data);
	
	}

	public function create(){

		date_default_timezone_set('America/Bogota');
		$time = date("d-m-Y",time());
		$passHash = password_hash($this->input->post('pass1'),PASSWORD_DEFAULT);
		
		$rol=$this->input->post('rol');
		
		if(!isset($rol))
			$rol='Profesor';
		
		$data= array(
			'nombre' 		   => $this->input->post('name'),
			'apellido'    	   => $this->input->post('lastname'),
			'fechanmto'        => $this->input->post('datebirth'),
			'fkid_institucion' => $this->input->post('institucion'),
			'correo'           => $this->input->post('email'),
			'question'	 	   => $this->input->post('question'),
			'answer' 		   => $this->input->post('answer'),
			'pass' 		 	   => $passHash,
			'rol' 		 	   => $rol,
			'fecharegistro'	   => $time
		);

		
		if(isset($data['fechanmto'])){
			$user=$this->usuarioModel->insert($data);

			if($user){
				$data['registro']=TRUE;
			}else{
				$data['registro']=FALSE;
			}

		}
		$data['instituciones']= $this->institucionModel->getAll();

		$this->load->view('login',$data);
	
	}
}