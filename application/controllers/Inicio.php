<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'C:\xampp\htdocs\AMID\vendor\autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

$token_code = 'aqui codigo';

class Inicio extends CI_Controller
{
	public $time, $id;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('institucionModel');
		$this->load->model('usuarioModel');
		$this->load->model('ubicacionModel');
		$this->load->model('profesormoduloModel');
		$this->load->model('profesoractividadModel');
		$this->load->model('profesorunidadModel');
		$this->load->helper('form');

		date_default_timezone_set('America/Bogota');
		$this->time = date("d-m-Y", time());
		$this->id = $this->session->userdata('id');
	}

	public function index()
	{
		// $data['instituciones']= $this->institucionModel->getAll();
		// $this->load->view('login',$data);
		$this->logout();
	}

	public function main()
	{

		$seg['seg4'] = $this->session->userdata('idAct');

		if (isset($this->id)) {
			$submit = $this->input->post('submit');
			if ($seg['seg4'] && isset($submit)) {
				$idAct = $seg['seg4'];

				if ($idAct == 'm12u1a2') {
					$this->profesormoduloModel->changeEstado(12, 2);
					$nota = $this->input->post('pointsNota');

					$points = $this->input->post('pointsGood');
					$answer = '{"Actividad 1":{"Pregunta 1": "' . $points . ' correctos de 6"}}';

					$this->insertUpdate($idAct, $nota, $answer);
				}
			}
			$data['profesormodulo'] = $this->profesormoduloModel->getOne();
			$this->load->view('inicio', $data);
		} else {
			$this->logout();
		}
	}

	public function insertUpdate($idAct, $nota, $answer)
	{

		if ($nota != "No Aplica" && $nota <= 0) {
			$nota = 1;
		}
		$data = array(
			'id_actividad' 	   => $idAct,
			'id_profesor' 	   => $this->id,
			'respuesta' 	   => $answer,
			'fecharealizacion' => $this->time,
			'nota' 			   => $nota
		);

		$this->profesoractividadModel->consult($data);
	}

	public function perfil()
	{

		if (isset($this->id)) {
			// echo "Perfil";
			$id = $this->id;
			$user = $this->usuarioModel->getUser($id);

			$data['usuario'] = $user;
			$data['institucion'] = $this->institucionModel->getOne((int)$user->result()[0]->fkid_institucion);

			// echo $data['institucion']->result()[0]->nombre;
			$this->load->view('perfil', $data);
		} else {
			$this->logout();
		}
	}

	public function reportes()
	{

		if (isset($this->id)) {
			$data['actividad'] = $this->profesoractividadModel->getAllWhere($this->id);
			$data['evaluacion'] = $this->profesorunidadModel->getAllWhere($this->id);
			$this->load->view('reportes', $data);
		} else {
			$this->logout();
		}
	}

	public function reportePDF()
	{
		if (isset($this->id)) {
			$data['evaluacion'] = $this->profesorunidadModel->getAllWhere($this->id);
			$data['nombre'] = $this->session->userdata('name');
			$data['apellido'] = $this->session->userdata('lastname');
			$this->load->view('initial/pdf', $data);
		} else {
			$this->logout();
		}
	}

	public function gestion()
	{
		if (isset($this->id)) {
			$data['usuarios'] = $this->usuarioModel->getAll();
			$data['ubicaciones'] = $this->ubicacionModel->getAll();
			$data['instituciones'] = $this->institucionModel->getAll();
			$this->load->view('gestion', $data);
		} else {
			$this->logout();
		}
	}

	public function principal()
	{
		$this->load->view('principal');
	}

	public function forgotPassword()
	{
		$this->load->view('forgotPassword');
	}

	public function reset()
	{
		//echo "Reset password \n";
		$data = array(
			'email' => $this->input->post('email'),
		);
		if (isset($data['email'])) {
			$user = $this->usuarioModel->getUserEmail($data['email']);
			if ($user != null) {

				//generat unique string
				$uniqidStr = md5(uniqid(mt_rand()));;
				//$Se alamacenan los tokens
				$conditions = array(
					'correo' => $_POST['email']
				);
				$data = array(
					'forgot_pass_identity' => $uniqidStr
				);
				$update = $this->usuarioModel->conditionsUpdate($data, $conditions);
				//echo 'Se guardó bien el código';
				//update data with forgot pass code

				if ($update) {
					try {
						$mail = new PHPMailer(true);
						$mail->SMTPOptions = array(
							'ssl' => array(
								'verify_peer' => false,
								'verify_peer_name' => false,
								'allow_self_signed' => true
							)
						);
						$mail->SMTPDebug = 0;
						$mail->isSMTP();
						$mail->Host = 'smtp.gmail.com';
						$mail->SMTPAuth = true;
						$mail->Username = 'correoGAIA@gmail.com';
						$mail->Password = 'contraseñaGAIA';
						$mail->SMTPSecure = 'tls';
						$mail->Port = 587;
						$mail->CharSet = 'UTF-8';
						$mail->setFrom('l.edilia75@gmail.com', 'Luz Edilia Castaño Arango');
						$mail->addAddress($_POST['email']);

						$resetPassLink = 'http://gaia.manizales.unal.edu.co/AMID/AMID/inicio/resetPassword?fp_code=' . $uniqidStr;
						//send reset password email
						$mail->isHTML(true);
						$mail->Subject = "Solicitud de Cambio de Contraseña";
						$mail->Body = 'Estimad@ usuari@, 
					<br/><br/>Recientemente se envió una solicitud para restablecer una contraseña para su cuenta en el software AMID. Si esto fue un error, simplemente ignore este correo electrónico.
					<br/>Para restablecer su contraseña, visite el siguiente enlace: <a href="' . $resetPassLink . '">' . $resetPassLink . '</a>
					<br/><br/>Saludos';;
						//send email
						$mail->send();
						echo '<script type="text/javascript">
				alert("Te hemos enviado un correo, revisalo para continuar");
				</script>';
						$this->load->view('principal');
					} catch (Exception $e) {
						echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
					}
				} else {
					echo '<script type="text/javascript">
				alert("Lo sentimos, hay un error inténtelo más tarde");
				</script>';
					$this->load->view('forgotPassword');
				}
			} else {
				echo '<script type="text/javascript">
				alert("Lo sentimos, no tenemos ese correo registrado");
				</script>';
				$this->load->view('forgotPassword');
			}
		} else {
			echo '<script type="text/javascript">
				alert("Ingrese su correo para continuar");
				</script>';
			$this->load->view('forgotPassword');
		}
		//store reset password status into the session
		//$_SESSION['sessData'] = $sessData;
		//redirect to the forgot pasword page
	}
	public function resetPassword()
	{
		if(!empty($_POST['fp_code'])){
			
		}
		else{
			$this->load->view('resetPassword');
			}
		

		if (isset($_POST['resetSubmit'])) {
			if (!empty($_POST['pass1_r']) && !empty($_POST['pass2_r']) && !empty($_POST['fp_code'])) {
				$fp_code = $_POST['fp_code'];
				$data = array(
					'pass1' => $this->input->post('pass1_r'),
					'pass2' => $this->input->post('pass2_r')
				);
				if ($data['pass1'] == $data['pass2']) {
					$passHash = password_hash($this->input->post('pass1_r'), PASSWORD_DEFAULT);
					$this->usuarioModel->updateUserToken($fp_code, $passHash);
					//Eliminación del token para que no se vuelva a usar para cambiar la contraseña
					//$this->usuarioModel->UpdateUserToken2($fp_code);
					$this->load->view('login');
								
					echo "<div class='modalDialog_two' id='quit'>
					<div class=' contentmodal'>
					  <a title='Close' class='close' href='login'>X</a>
					  <div class='modal-head'>
						<center>
						  <h2>Cambio exitoso</h2>
						</center>
					  </div>
					  <hr>
					  <div class='modal-body'>Su contraseña se ha cambiado correctamente, ya puede iniciar sesión</div>
					</div>
				  </div>";
					
					//$redirectURL='principal';
					//header("Location:".$redirectURL);
				} else {
					//$this->load->view('login');
					$redirectURL = 'resetPassword?fp_code=' . $fp_code;
					header("Location:" . $redirectURL);
				}
			} else {
				$this->load->view('login');
			}
		}
		
	}
	public function login()
	{

		$data = array(
			'email' => $this->input->post('email'),
			'pass' => $this->input->post('pass')
		);

		if (isset($data['email'])) {
			$user = $this->usuarioModel->getOne($data['email'], $data['pass']);

			if ($user) {
				$this->load->library('session');

				$userLogin = array(
					'id'  		=> $user->id_usuario,
					'name'  	=> $user->nombre,
					'lastname'  => $user->apellido,
					'email'     => $user->correo,
					'rol'       => $user->rol,
					'ruta'		=> $user->ruta,
					'login' 	=> TRUE
				);

				$this->session->set_userdata($userLogin);
				$data['profesormodulo'] = $this->profesormoduloModel->getOne();


				$this->load->view('inicio',$data);
				// echo $this->session->userdata('name');
			} else {
				$data['instituciones'] = $this->institucionModel->getAll();
				$data['badUserPass'] = "Usuario y/o contraseña incorrecta";
				$this->load->view('login', $data);
			}
		} else {
			$name = $this->session->userdata('name');
			if (isset($name)) {
				$data['profesormodulo'] = $this->profesormoduloModel->getOne();
				$this->load->view('inicio', $data);
			} else {
				$data['instituciones'] = $this->institucionModel->getAll();
				$this->load->view('login', $data);
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('lastname');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('rol');
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('idAct');


		$data['instituciones'] = $this->institucionModel->getAll();
		$this->load->view('principal');
	}

	public function restorePass()
	{

		$passHash = password_hash($this->input->post('pass1_r'), PASSWORD_DEFAULT);
		$data = array(
			'name'     => $this->input->post('name_r'),
			'lastname' => $this->input->post('lastname_r'),
			'email'    => $this->input->post('email_r'),
			'question' => $this->input->post('question_r'),
			'answer'   => $this->input->post('answer_r'),
			'pass'     => $passHash
		);

		$data['instituciones'] = $this->institucionModel->getAll();

		if (isset($data['email'])) {
			$user = $this->usuarioModel->update($data);

			if ($user) {
				$data['credenciales'] = TRUE;
			} else {
				$data['credenciales'] = FALSE;
			}
		}
		$this->load->view('login', $data);
	}

	public function resetPassword2()
	{
		print_r($GLOBALS['token_code']);
	}

	public function create()
	{
		date_default_timezone_set('America/Bogota');
		$time = date("d-m-Y", time());
		$passHash = password_hash($this->input->post('pass1'), PASSWORD_DEFAULT);

		$rol = $this->input->post('rol');

		if (!isset($rol))
			$rol = 'Profesor';

		$data = array(
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


		if (isset($data['fechanmto'])) {
			$user = $this->usuarioModel->insert($data);

			if ($user) {
				$data['registro'] = TRUE;
			} else {
				$data['registro'] = FALSE;
			}
		}
		$data['instituciones'] = $this->institucionModel->getAll();

		$this->load->view('login', $data);
	}
}
