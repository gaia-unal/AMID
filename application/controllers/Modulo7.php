<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modulo7 extends CI_Controller {

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
			$this->profesormoduloModel->changeEstado(7,1);
			$submit=$this->input->post('submit');

			$data['profesormodulo']=$this->profesormoduloModel->getOne();
			if($seg['seg4'] && isset($submit)){
				$idAct=$seg['seg4'];
				
				if($idAct=='m6u3'){
					$this->profesormoduloModel->changeEstado(6,2);
					$p1 = $this->input->post('pre1');
					$nota= round($p1,2);
					
					$this->insertUpdateE($idAct,$nota);
				}
				
			}
			$this->load->view('modulos/modulo7/index',$data);

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
				$this->load->view('modulos/modulo7/unidad1/inicio',$data);
			}
			else if($seg['seg4'] && isset($submit)){
				
				$idAct=$seg['seg4'];
				switch ($idAct) {
					case 'm7u11':

						$p1 = $this->input->post('preg1');
						$p2 = $this->input->post('preg2');
						$p3 = $this->input->post('preg3');
						$p4 = $this->input->post('preg4');
						$p5 = $this->input->post('preg5');
						$p6 = $this->input->post('preg6');
						
						$nota= round(($p1+$p2+$p3+$p4+$p5+$p6)/6,2);
						
						$this->insertUpdateE($idAct,$nota);
					break;
					case 'm7u1a2':
						$nota="No Aplica";
						
						$p1 = $this->input->post('preg5');
						
						
						$answer='{"Actividad 1":{"Pregunta 1": "'.$p1.'"
												}
			 					}';
						
						$this->insertUpdate($idAct,$nota, $answer);

					break;

					case 'm7u1a6':
						$nota="No Aplica";
						
						$p1 = $this->input->post('preg1');
						$p2 = $this->input->post('preg2');
						$p3 = $this->input->post('preg3');
						
						$answer='{"Actividad 1":{"Pregunta 1": "'.$p1.'",
												"Pregunta 2": "'.$p2.'",
												"Pregunta 3": "'.$p3.'"
												}
			 					}';
						
						$this->insertUpdate($idAct,$nota, $answer);

					break;

					case 'm7u1a8':
						$nota="No Aplica";
						
						$p1 = $this->input->post('preg2');
						
						
						$answer='{"Actividad 1":{"Pregunta 1": "'.$p1.'"
												}
			 					}';
						
						$this->insertUpdate($idAct,$nota, $answer);

					break;
					case "m7u1a10":
						$points=$this->input->post('pointsGood');
						$answer='{"Actividad 1":{"Pregunta 1": "'.$points.' correctos de 6"}}';
						
						$nota=$this->input->post('pointsNota');
						
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
				$this->load->view("modulos/modulo7/unidad1/".$seg['seg3'],$data);
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
				$this->load->view('modulos/modulo7/unidad2/inicio',$data);
			}
			else if($seg['seg4'] && isset($submit)){
				
				$idAct=$seg['seg4'];
				switch ($idAct) {
					case 'm7u12':

						$nota=0;
						$p1 = $this->input->post('preg1');
						$p2 = $this->input->post('preg2');
						$p3 = $this->input->post('preg3');
						$p4 = $this->input->post('preg4');
						$p5 = $this->input->post('preg5');
						$p6 = $this->input->post('preg6');

						if($p1=='d')
							$nota++;
						if($p2=='b')
							$nota++;
						if($p3=='c')
							$nota++;
						if($p4=='f')
							$nota++;
						if($p5=='a')
							$nota++;
						if($p6=='e')
							$nota++;
						
						$nota= round(($nota*5)/6,2);
						
						$this->insertUpdateE($idAct,$nota);
					break;
					case 'm7u21':

						$p1 = $this->input->post('preg1');
						$p2 = $this->input->post('preg2');
						$p3 = $this->input->post('preg3');
						$p4 = $this->input->post('preg4');
						$p5 = $this->input->post('preg5');
						$p6 = $this->input->post('preg6');
						
						$nota= round(($p1+$p2+$p3+$p4+$p5+$p6)/6,2);
						
						$this->insertUpdateE($idAct,$nota);
					break;
					case 'm7u2a3':
					
						$p1 = $this->input->post('preg1');
						$p2 = $this->input->post('preg2');
						$p3 = $this->input->post('preg3');
						$p4 = $this->input->post('preg4');

						$nota= round(($p1+$p2+$p3+$p4)*5/20,2);

						if($p1==1) $p1='Incorrecto';
						else $p1='Correcto';
						if($p2==1) $p2='Incorrecto';
						else $p2='Correcto';
						if($p3==1) $p3='Incorrecto';
						else $p3='Correcto';
						if($p4==1) $p4='Incorrecto';
						else $p4='Correcto';

						$answer='{"Actividad 1":{"Pregunta 1": "'.$p1.'",
												"Pregunta 2": "'.$p2.'",
												"Pregunta 3": "'.$p3.'",
												"Pregunta 4": "'.$p4.'"
												}
			 					}';
						
						$this->insertUpdate($idAct,$nota, $answer);

					break;
					case 'm7u2a5':
					
						$p1 = $this->input->post('preg1');
						$p2 = $this->input->post('preg2');
						$p3 = $this->input->post('preg3');
						$p4 = $this->input->post('preg4');

						$nota= round(($p1+$p2+$p3+$p4)*5/20,2);

						if($p1==1) $p1='Incorrecto';
						else $p1='Correcto';
						if($p2==1) $p2='Incorrecto';
						else $p2='Correcto';
						if($p3==1) $p3='Incorrecto';
						else $p3='Correcto';
						if($p4==1) $p4='Incorrecto';
						else $p4='Correcto';

						$answer='{"Actividad 1":{"Pregunta 1": "'.$p1.'",
												"Pregunta 2": "'.$p2.'",
												"Pregunta 3": "'.$p3.'",
												"Pregunta 4": "'.$p4.'"
												}
			 					}';
						
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
				$this->load->view("modulos/modulo7/unidad2/".$seg['seg3'],$data);
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
