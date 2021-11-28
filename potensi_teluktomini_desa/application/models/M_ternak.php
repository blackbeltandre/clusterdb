<?php

class M_ternak extends CI_model {

	public function data_ternak(){
		return $this->db->get('tbl_ternak');
		
	}
	
	public function input_ternak($data){
		$this->db->insert('tbl_ternak', $data);
		
	}

	public function update_ternak($data, $id_ternak){
		$this->db->where('id_ternak', $id_ternak);
		$this->db->update('tbl_ternak', $data);
		
	}
	
	public function delete_ternak($id_ternak){
		$this->db->where('id_ternak', $id_ternak);
		$this->db->delete('tbl_ternak');
		
	}

	public function jenis_ternak($id_ternak){
		$this->db->where('id_ternak', $id_ternak);
		return $this->db->get('tbl_ternak');
		
	}
	
}
