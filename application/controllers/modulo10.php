<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modulo10 extends CI_Controller {

	public $time,$id;

	function __construct(){
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
		
		$id=$this->session->userdata('id');

		if(isset($id)){
			$this->profesormoduloModel->changeEstado(10,1);

			$data['profesormodulo']=$this->profesormoduloModel->getOne();
			$this->load->view('modulos/modulo10/index',$data);

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
				$this->load->view('modulos/modulo10/unidad1/inicio',$data);
			}
			else if($seg['seg4'] && isset($submit)){
				
				$idAct=$seg['seg4'];
				switch ($idAct) {
					case 'm1u1a1':
						$points=$this->input->post('pointsGood');
						$answer='{"Actividad 1":{"Pregunta 1": "'.$points.' correctos de 16"}}';
						
						$nota=$this->input->post('pointsCanvas');
						
						$this->insertUpdate($idAct,$nota, $answer);

					break;
					
					default:
						echo "Url invalida (Esto pasa alguna vez????)";
					break;
				}
			}
			if($seg['seg3']){
				$this->session->unset_userdata('idAct');
				$data['profesormodulo']=$this->profesormoduloModel->getOne();
				$this->load->view("modulos/modulo10/unidad1/".$seg['seg3'],$data);
			}
			
		}else{
			$this->logout();
		}
	}

	public function insertUpdate($idAct,$nota, $answer){
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
		if($nota<3){
            return 'Malo';
        }else if ($nota<=4){
            return 'Regular';
        }
        return 'Bueno';
	}

	public function logout(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$data['instituciones']= $this->institucionModel->getAll();
		$this->load->view('login',$data);
	}

	
}
