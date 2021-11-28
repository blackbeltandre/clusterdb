<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pimpinan extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('level_admin'))
		{
			redirect('access_denied');
		}

	}

	public function index()
	{
		$data ['title'] 	= "Data Pimpinan";
		$data ['page'] 		= "data_pimpinan";

		$id_admin		= $this->session->userdata('id_admin');
		$data ['user']	= $this->M_panitia->get_panitia($id_admin)->result();
		
		$data ['data_pimpinan'] = $this->Contoh_model->contoh();

		$this->load->view('v_admin/v_app', $data);
	}

	public function input()
	{
		$nama_camat		=($this->input->post('nama_camat'));
		$masa_jabatan		= ($this->input->post('masa_jabatan'));
		
		$data = [
				'nama_camat' => $nama_camat,
				'masa_jabatan ' => $masa_jabatan,
				
			];

		$simpan = $this->Contoh_model->insert($data);

		if (!$simpan) {
			$this->session->set_flashdata('success', 'Data Pimpinan Berhasil Disimpan.');
		} else{
			$this->session->set_flashdata('warning', 'Data Gagal Disimpan');
		}
		redirect('data_pimpinan');
	}

	public function edit($id_camat)
	{
		$nama_camat		=($this->input->post('nama_camat'));
		$masa_jabatan	= ($this->input->post('masa_jabatan'));
	
		

		$data = [
				'nama_camat' => $nama_camat,
				'masa_jabatan' => $masa_jabatan,
				
			];
		$simpan = $this->M_pimpinan->update_pimpinan($data, $id_camat);

		if (!$simpan) {
			$this->session->set_flashdata('info', 'Data Pimpinan Berhasil Diperbarui.');
		} else{
			$this->session->set_flashdata('warning', 'Data Gagal Disimpan');
		}
		redirect('data_pimpinan');
	}

	
    public function delete($id_camat)
	{

		$simpan = $this->M_pimpinan->delete_pimpinan($id_camat);

		if (!$simpan) {
			$this->session->set_flashdata('danger', 'Data Pimpinan Berhasil Dihapus.');
		} else{
			$this->session->set_flashdata('warning', 'Data Gagal Disimpan');
		}
		redirect('data_pimpinan');
	}
	

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
