<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modulo11 extends CI_Controller {

	public $time,$id;

	public function __construct(){
		parent::__construct();
		$this->load->model('institucionModel');
		// $this->load->model('usuarioModel');
		$this->load->model('profesormoduloModel');
		$this->load->model('profesoractividadModel');
		$this->load->model('profesorunidadModel');
		$this->load->helper('form');

		date_default_timezone_set('America/Bogota');
		$this->time = date("d-m-Y",time());
		$this->id = $this->session->userdata('id');
	}
	
	public function index(){
		
		$seg['seg4']=$this->session->userdata('idAct');

		if(isset($this->id)){
			$this->profesormoduloModel->changeEstado(11,1);
			$submit=$this->input->post('submit');

			$data['profesormodulo']=$this->profesormoduloModel->getOne();
			if($seg['seg4'] && isset($submit)){
				$idAct=$seg['seg4'];
				if($idAct=='m10u1a3'){
					$this->profesormoduloModel->changeEstado(10,2);
					$nota= $this->input->post('pointsNota');
						
					$points=$this->input->post('pointsGood');
					$answer='{"Actividad 1":{"Pregunta 1": "'.$points.' correctos de 6"}}';
					
					$this->insertUpdate($idAct,$nota, $answer);
				}
				
			}
			$this->load->view('modulos/modulo11/index',$data);

		}else{
			$this->logout();
		}
	}

	public function unidad1(){

		$seg['seg3']=$this->uri->segment(3);
		$seg['seg4']=$this->session->userdata('idAct');
		
		if(isset($this->id)){
			$data['profesormodulo']=$this->profesormoduloModel->getOne();

			$submit=$this->input->post('submit');
			if(!$seg['seg3']){
				$this->load->view('modulos/modulo11/unidad1/inicio',$data);
			}
			else if($seg['seg4'] && isset($submit)){
				
				$idAct=$seg['seg4'];
				switch ($idAct) {
					case "m11u1a2":
						echo "NADA";
						
					break;
					
					default:
						echo "Url invalida (Esto pasa alguna vez????)";
					break;
				}
			}
			if($seg['seg3']){
				$this->session->unset_userdata('idAct');
				$data['profesormodulo']=$this->profesormoduloModel->getOne();
				$this->load->view("modulos/modulo11/unidad1/".$seg['seg3'],$data);
			}
			
		}else{
			$this->logout();
		}
	}

	public function unidad2(){

		$seg['seg3']=$this->uri->segment(3);
		$seg['seg4']=$this->session->userdata('idAct');
		
		if(isset($this->id)){
			$data['profesormodulo']=$this->profesormoduloModel->getOne();

			$submit=$this->input->post('submit');
			if(!$seg['seg3'] && !isset($submit)){
				$this->load->view('modulos/modulo11/unidad2/inicio',$data);
			}
			else if($seg['seg4'] && isset($submit)){
				
				$idAct=$seg['seg4'];
				switch ($idAct) {
					case "m11u1a2":
						$nota= $this->input->post('pointsNota');
						
						$points=$this->input->post('pointsGood');
						$answer='{"Actividad 1":{"Pregunta 1": "'.$points.' correctos de 42"}}';
						
						$this->insertUpdate($idAct,$nota, $answer);
						
					break;
					
					default:
						echo "Url invalida (Esto pasa alguna vez????)";
					break;
				}
			}

			if($seg['seg3']){
				$seg['seg3']=(isset($seg['seg3']))?$seg['seg3']:'inicio';
				
				$this->session->unset_userdata('idAct');
				$data['profesormodulo']=$this->profesormoduloModel->getOne();
				$this->load->view("modulos/modulo11/unidad2/".$seg['seg3'],$data);
			}
			
		}else{
			$this->logout();
		}
	}

	public function unidad3(){

		$seg['seg3']=$this->uri->segment(3);
		$seg['seg4']=$this->session->userdata('idAct');
		
		if(isset($this->id)){
			$data['profesormodulo']=$this->profesormoduloModel->getOne();

			$submit=$this->input->post('submit');
			if(!$seg['seg3'] && !isset($submit)){
				$this->load->view('modulos/modulo11/unidad3/inicio',$data);
			}
			else if($seg['seg4'] && isset($submit)){
				
				$idAct=$seg['seg4'];
				switch ($idAct) {
					case "m11u2a2":
						$nota= $this->input->post('pointsNota');
						
						$points=$this->input->post('pointsGood');
						$answer='{"Actividad 1":{"Pregunta 1": "'.$points.' correctos de 7"}}';
						
						$this->insertUpdate($idAct,$nota, $answer);
						
					break;
					
					default:
						echo "Url invalida (Esto pasa alguna vez????)";
					break;
				}
			}

			if($seg['seg3']){
				$seg['seg3']=(isset($seg['seg3']))?$seg['seg3']:'inicio';
				
				$this->session->unset_userdata('idAct');
				$data['profesormodulo']=$this->profesormoduloModel->getOne();
				$this->load->view("modulos/modulo11/unidad3/".$seg['seg3'],$data);
			}
			
		}else{
			$this->logout();
		}
	}

	public function unidad4(){

		$seg['seg3']=$this->uri->segment(3);
		$seg['seg4']=$this->session->userdata('idAct');
		
		if(isset($this->id)){
			$data['profesormodulo']=$this->profesormoduloModel->getOne();

			$submit=$this->input->post('submit');
			if(!$seg['seg3'] && !isset($submit)){
				$this->load->view('modulos/modulo11/unidad4/inicio',$data);
			}
			else if($seg['seg4'] && isset($submit)){
				
				$idAct=$seg['seg4'];
				switch ($idAct) {
					case "m11u3a2":
						$nota= $this->input->post('pointsNota');
						
						$points=$this->input->post('pointsGood');
						$answer='{"Actividad 1":{"Pregunta 1": "'.$points.' correctos de 11"}}';
						
						$this->insertUpdate($idAct,$nota, $answer);
						
					break;
					
					default:
						echo "Url invalida (Esto pasa alguna vez????)";
					break;
				}
			}

			if($seg['seg3']){
				$seg['seg3']=(isset($seg['seg3']))?$seg['seg3']:'inicio';
				
				$this->session->unset_userdata('idAct');
				$data['profesormodulo']=$this->profesormoduloModel->getOne();
				$this->load->view("modulos/modulo11/unidad4/".$seg['seg3'],$data);
			}
			
		}else{
			$this->logout();
		}
	}

	public function insertUpdate($idAct,$nota, $answer){
		
		if($nota!="No Aplica" && $nota<=0){$nota=1;}
		$data= array(
			'id_actividad' 	   => $idAct,
			'id_profesor' 	   => $this->id,
			'respuesta' 	   => $answer,
			'fecharealizacion' => $this->time,
			'nota' 			   => $nota
		);	

		$this->profesoractividadModel->consult($data);
	}

	public function insertUpdateE($idEval,$nota){

		if($nota!="No Aplica" && $nota<=0){$nota=1;}
		$des= $this->calculoDes($nota);

		$data= array(
			'id_unidad' 	   => $idEval,
			'id_profesor' 	   => $this->id,
			'notaevaluacion'   => $nota,
			'desempeñounidad'  => $des,
			'fecharealizacion' => $this->time
			
		);	

		$this->profesorunidadModel->consult($data);
	}

	public function calculoDes($nota){
		if($nota!="No Aplica"){
			if($nota<3){
				return 'Malo';
			}else if ($nota<=4){
				return 'Regular';
			}
			return 'Bueno';
		}else
			return $nota;
	}

	public function logout(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$data['instituciones']= $this->institucionModel->getAll();
		$this->load->view('login',$data);
	}
	
}
