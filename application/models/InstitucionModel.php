<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class institucionModel extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
    }
	public function getAll(){ 

		$query=$this->db->order_by('id_institucion', 'ASD')
						->get('institucion');
        
        return ($query->num_rows()>0)?$query: false;
	}
	
	public function getOne($id){ 

		$query=$this->db->select('*')
						->where('id_institucion',$id)
						->get('institucion');
		
		return $query;
	
	}
}
