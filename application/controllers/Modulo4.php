<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modulo4 extends CI_Controller {

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
		$object['controller'] = $this;
		$this->session->set_userdata('objeto',$object);
	}
	
	public function index(){
		
		$seg['seg4']=$this->session->userdata('idAct');

		if(isset($this->id)){
			$this->profesormoduloModel->changeEstado(4,1);
			$submit=$this->input->post('submit');

			if($seg['seg4'] && isset($submit)){
				$idAct=$seg['seg4'];
				
				if($idAct=='m3u5'){
					$this->profesormoduloModel->changeEstado(3,2);
					$p1 = $this->input->post('pre1');
					$p2 = $this->input->post('pre2');
					
					$nota= round(($p1+$p2)/2,2);
					
					$this->insertUpdateE($idAct,$nota);
				}
				
			}
			$data['profesormodulo']=$this->profesormoduloModel->getOne();
			$this->load->view('modulos/modulo4/index',$data);

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
				$this->load->view('modulos/modulo4/unidad1/inicio',$data);
			}
			else if($seg['seg4'] && isset($submit)){
				
				$idAct=$seg['seg4'];
				switch ($idAct) {
					case 'm4u1a2':
						$nota="No Aplica";
						
						$p1 = $this->input->post('preg1');
						$p2 = $this->input->post('preg2');
						$p3 = $this->input->post('preg3');
						$p4 = $this->input->post('preg4');
						$p5 = $this->input->post('preg5');
						$p6 = $this->input->post('preg6');
						$p7 = $this->input->post('preg7');

						$f1 = $this->input->post('f1');
						$f2 = $this->input->post('f2');
						$f3 = $this->input->post('f3');

						$points=$this->input->post('pointsGood');
						
						$answer='{"Actividad 1":{"Pregunta 1": "'.$p1.'",
												"Pregunta 2": "'.$p2.'",
												"Pregunta 3": "'.$p3.'",
												"Pregunta 4": "'.$p4.'",
												"Pregunta 5": "'.$p5.'",
												"Pregunta 6": "'.$p6.'",
												"Pregunta 7": "'.$p7.'"
												   },
								"Actividad 2":{"Pregunta 1": "'.$f1.'",
												"Pregunta 2": "'.$f2.'",
												"Pregunta 3": "'.$f3.'"
												},
								"Actividad 3":{"Pregunta 1": "'.$points.' correctos de 8"
												}
			 					}';
						
						$this->insertUpdate($idAct,$nota, $answer);

					break;

					case 'm4u1a5':
						$nota="No Aplica";
						
						$p1 = $this->input->post('preg1');
						$p2 = $this->input->post('preg2');
				
						$points=$this->input->post('pointsGood');
						
						$answer='{"Actividad 1":{"Pregunta 1": "'.$points.' correctos de 10"
											},
								
								"Actividad 2":{"Pregunta 1": "'.$p1.'",
												"Pregunta 2": "'.$p2.'"
									}
								}';
						
						$this->insertUpdate($idAct,$nota, $answer);

					break;

					case 'm4u1a7':
						$nota="No Aplica";
						
						$p1 = $this->input->post('preg1');
						$p2 = $this->input->post('preg2');
				
						$answer='{"Actividad 1":{"Pregunta 1": "'.$p1.'",
												"Pregunta 2": "'.$p2.'"
									}
								}';
						
						$this->insertUpdate($idAct,$nota, $answer);

					break;
				}
			}
			if($seg['seg3']){
				$this->session->unset_userdata('idAct');
				$data['profesormodulo']=$this->profesormoduloModel->getOne();
				$this->load->view("modulos/modulo4/unidad1/".$seg['seg3'],$data);
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
				$this->load->view('modulos/modulo4/unidad2/inicio',$data);
			}
			else if($seg['seg4'] && isset($submit)){
				
				$idAct=$seg['seg4'];
				switch ($idAct) {
					case 'm4u1a8':
					
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
					case 'm4u2a2':
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

					case 'm4u2a3':
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
				}
			}

			if($seg['seg3']){
				$seg['seg3']=(isset($seg['seg3']))?$seg['seg3']:'inicio';
				
				$this->session->unset_userdata('idAct');
				$data['profesormodulo']=$this->profesormoduloModel->getOne();
				$this->load->view("modulos/modulo4/unidad2/".$seg['seg3'],$data);
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
				$this->load->view('modulos/modulo4/unidad3/inicio',$data);
			}
			else if($seg['seg4'] && isset($submit)){
				
				$idAct=$seg['seg4'];
				switch ($idAct) {
					case 'm4u2':

						$p1 = $this->input->post('pre1');
						$nota= round($p1,2);
						
						$this->insertUpdateE($idAct,$nota);
					break;
					case 'm4u3a4':
						$nota="No Aplica";
						
						$p1 = $this->input->post('preg1');
						$p2 = $this->input->post('preg2');
						$p3 = $this->input->post('preg3');
						$p4 = $this->input->post('preg4');
						$p5 = $this->input->post('preg5');
						$p6 = $this->input->post('preg6');

						$answer='{"Actividad 1":{"Pregunta 1": "'.$p1.'",
												"Pregunta 2": "'.$p2.'",
												"Pregunta 3": "'.$p3.'",
												"Pregunta 4": "'.$p4.'",
												"Pregunta 5": "'.$p5.'",
												"Pregunta 6": "'.$p6.'"
												}
			 					}';
						
						$this->insertUpdate($idAct,$nota, $answer);

					break;
				}
			}

			if($seg['seg3']){
				$seg['seg3']=(isset($seg['seg3']))?$seg['seg3']:'inicio';
				
				$this->session->unset_userdata('idAct');
				$data['profesormodulo']=$this->profesormoduloModel->getOne();
				$this->load->view("modulos/modulo4/unidad3/".$seg['seg3'],$data);
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
				$this->load->view('modulos/modulo4/unidad4/inicio',$data);
			}
			else if($seg['seg4'] && isset($submit)){
				
				$idAct=$seg['seg4'];
				switch ($idAct) {
					case 'm4u3a5':
					
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
					case 'm4u4a1':
						$nota="No Aplica";
						
						$p1 = $this->input->post('preg1');
						$p2 = $this->input->post('preg2');
						$p3 = $this->input->post('preg3');
						$p4 = $this->input->post('preg4');
						$p5 = $this->input->post('preg5');
						$p6 = $this->input->post('preg6');
						$p7 = $this->input->post('preg7');
						$p8 = $this->input->post('preg8');

						$answer='{"Actividad 1":{"Pregunta 1": "'.$p1.'",
												"Pregunta 2": "'.$p2.'",
												"Pregunta 3": "'.$p3.'",
												"Pregunta 4": "'.$p4.'",
												"Pregunta 5": "'.$p5.'",
												"Pregunta 6": "'.$p6.'",
												"Pregunta 7": "'.$p7.'",
												"Pregunta 8": "'.$p8.'"
												}
			 					}';
						
						$this->insertUpdate($idAct,$nota, $answer);

					break;
				}
			}

			if($seg['seg3']){
				$seg['seg3']=(isset($seg['seg3']))?$seg['seg3']:'inicio';
				
				$this->session->unset_userdata('idAct');
				$data['profesormodulo']=$this->profesormoduloModel->getOne();
				$this->load->view("modulos/modulo4/unidad4/".$seg['seg3'],$data);
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

	public function consulta(){
		$info = $this->profesorunidadModel->valida($this->id, $this->session->userdata('idAct'));
		if(isset($info[0]['notaevaluacion']) and isset($info[0]['notaevaluacion2'])){
			return true;
		} 
		else return false;
	}
}
