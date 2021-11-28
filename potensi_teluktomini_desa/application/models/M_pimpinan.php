<?php

class M_pimpinan extends CI_model {

	public function data_pimpinan(){
		return $this->db->get('tbl_pimpinan');
		
	}
	
	public function input_pimpinan($data){
		$this->db->insert('tbl_pimpinan', $data);
		
	}

	public function update_pimpinan($data, $id_camat){
		$this->db->where('id_camat', $id_camat);
		$this->db->update('tbl_pimpinan', $data);
		
	}
	
	public function delete_pimpinan($id_camat){
		$this->db->where('id_camat', $id_camat);
		$this->db->delete('tbl_pimpinan');
		
	}

	public function nama_camat($id_camat){
		$this->db->where('id_camat', $id_camat);
		return $this->db->get('tbl_pimpinan');
		
	}
	
}
