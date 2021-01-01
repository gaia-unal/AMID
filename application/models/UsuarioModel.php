<?php
defined('BASEPATH') or exit('No direct script access allowed');

class usuarioModel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getAll()
	{

		$query = $this->db->order_by('id_usuario', 'ASD')
			->get('usuario');

		return ($query->num_rows() > 0) ? $query : false;
	}

	public function getOne($user, $pass)
	{

		$query = $this->db->select('*')
			->where('correo', $user)
			->get('usuario')
			->result();

		if (isset($query[0]))
			return (password_verify($pass, $query[0]->pass)) ? $query[0] : false;
		else
			return false;
	}

	public function getUser($id)
	{

		$query = $this->db->select('*')
			->where('id_usuario', $id)
			->get('usuario');

		return $query;
	}

	public function getUserEmail($email)
	{

		$query = $this->db->select('*')
			->where('correo', $email)
			->get('usuario');

		if ($query->num_rows() > 0) {
			// query returned results
			//print_r($query);
			return $query;
		} else {
			// query returned no results
			return null;
		}
	}

	public function update($data)
	{

		$this->db->set('pass', $data['pass'])
			->where('nombre', $data['name'])
			->where('apellido', $data['lastname'])
			->where('correo', $data['email'])
			->where('question', $data['question'])
			->where('answer', $data['answer'])
			->update('usuario');

		return ($this->db->affected_rows() > 0);
	}

	public function update2($data)
	{

		$passHash = password_hash($data['passNew'], PASSWORD_DEFAULT);

		$this->db->set('pass', $passHash)
			->set('nombre', $data['nombre'])
			->set('apellido', $data['apellido'])
			->set('fechanmto', $data['nacimiento'])
			->where('correo', $data['email'])
			->update('usuario');

		return ($this->db->affected_rows() > 0);
	}
	public function update3($data)
	{


		$this->db->set('nombre', $data['nombre'])
			->set('apellido', $data['apellido'])
			->set('fechanmto', $data['nacimiento'])
			->where('correo', $data['email'])
			->update('usuario');

		return ($this->db->affected_rows() > 0);
	}

	public function update4($data){
		$this->db->set('ruta', $data['ruta'])
				->where('id_usuario', $data['id'])
				->update('usuario');
		return ($this->db->affected_rows() > 0);
	}

	public function updateUserToken($fp_code, $passHashE)
	{
		$passHash = password_hash($passHashE, PASSWORD_DEFAULT);

		$this->db->set('pass', $passHash)
			->where('forgot_pass_identity', $fp_code)
			->update('usuario');

		return ($this->db->affected_rows() > 0);
	}
	public function updateUserToken2($fp_code)
	{

		$this->db->set('forgot_pass_identity', null)
			->where('forgot_pass_identity', $fp_code)
			->update('usuario');

		return ($this->db->affected_rows() > 0);
	}

	public function insert($data){ 
		$query = $this->db->select('*')
			->where('correo', $data['correo'])
			->get('usuario');

		if ($query->num_rows() > 0) {
			return FALSE;
		} else {
			$this->db->insert('usuario', $data);
			return TRUE;
		}
	}

	public function conditionsUpdate($data, $conditions)
	{

		if (!empty($data) && is_array($data) && !empty($conditions)) {
			//prepare columns and values sql
			$cols_vals = '';
			$i = 0;
			if (!array_key_exists('modified', $data)) {
				$data['modified'] = date("Y-m-d");
			}
			foreach ($data as $key => $val) {
				$pre = ($i > 0) ? ', ' : '';
				$cols_vals .= $pre . $key . " = '" . $val . "'";
				$i++;
			}
			//prepare where conditions
			$whereSql = '';
			$ci = 0;
			foreach ($conditions as $key => $value) {
				$pre = ($ci > 0) ? ' AND ' : '';
				$whereSql .= $pre . $key . " = '" . $value . "'";
				$ci++;
			}

			//print_r($data);
			//echo ' <br>';
			//print_r($conditions);
			//echo '<br> Creación query <br>';
			$query = "UPDATE " . "usuario" . " SET " . $cols_vals . " WHERE " . $whereSql;
			//print_r($query);
			//update data
			$update = $this->db->query($query);
			//print_r($update);
			return $update ? true : false;
			//return true;
		} else {
			return false;
		}
	}
}
