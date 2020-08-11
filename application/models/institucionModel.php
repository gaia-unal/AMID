<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InstitucionModel extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
    }
	public function getAll(){ 

		$query=$this->db->get('institucion');
        
        return ($query->num_rows()>0)?$query: false;
	}
	
	public function getOne($id){ 

		$query=$this->db->select('*')
						->where('id_institucion',$id)
						->get('institucion');
		
		return $query;
	
	}
}
