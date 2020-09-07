<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ubicacionModel extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
    }
	public function getAll(){ 

		$query=$this->db->order_by('id_ubicacion', 'ASD')
						->get('ubicacion');
        
        return ($query->num_rows()>0)?$query: false;
	}
	
	public function getOne($id){ 

		$query=$this->db->select('*')
						->where('id_ubicacion',$id)
						->get('ubicacion');
		
		return $query;
	
	}
}
