<?php

class M_pertanian extends CI_model {

	public function data_pertanian(){
		return $this->db->get('tbl_pertanian');
		
	}
	
	public function input_pertanian($data){
		$this->db->insert('tbl_pertanian', $data);
		
	}

	public function update_pertanian($data, $id_pertanian){
		$this->db->where('id_pertanian', $id_pertanian);
		$this->db->update('tbl_pertanian', $data);
		
	}
	
	public function delete_pertanian($id_pertanian){
		$this->db->where('id_pertanian', $id_pertanian);
		$this->db->delete('tbl_pertanian');
		
	}

	public function jenis_tanaman($id_pertanian){
		$this->db->where('id_pertanian', $id_pertanian);
		return $this->db->get('tbl_pertanian');
		
	}
	
}
