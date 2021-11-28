<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pertanian extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('level_admin'))
		{
			redirect('access_denied');
		}
	}

	public function index()
	{
		$data ['title'] 	= "Data Pertanian";
		$data ['page'] 		= "data_pertanian";

		$id_admin		= $this->session->userdata('id_admin');
		$data ['user']	= $this->M_panitia->get_panitia($id_admin)->result();
		
		$data ['data_pertanian'] = $this->M_pertanian->data_pertanian()->result();

		$this->load->view('v_admin/v_app', $data);
	}

	public function input()
	{
		$jenis_tanaman		=($this->input->post('jenis_tanaman'));
		$luas_tanam		= ($this->input->post('luas_tanam'));
		$hasil 	= ($this->input->post('hasil'));
		

		$data = [
				'jenis_tanaman' => $jenis_tanaman,
				'luas_tanam ' => $luas_tanam,
				'hasil' => $hasil,
			];

		$simpan = $this->M_pertanian->input_pertanian($data);

		if (!$simpan) {
			$this->session->set_flashdata('success', 'Data Pertanian Berhasil Disimpan.');
		} else{
			$this->session->set_flashdata('warning', 'Data Gagal Disimpan');
		}
		redirect('data_pertanian');
	}

	public function edit($id_pertanian)
	{
		$jenis_tanaman		=($this->input->post('jenis_tanaman'));
		$luas_tanam		= ($this->input->post('luas_tanam'));
		$hasil 	= ($this->input->post('hasil'));
		

		$data = [
				'jenis_tanaman' => $jenis_tanaman,
				'luas_tanam ' => $luas_tanam,
				'hasil' => $hasil,
			];
		$simpan = $this->M_pertanian->update_pertanian($data, $id_pertanian);

		if (!$simpan) {
			$this->session->set_flashdata('info', 'Data Pertanian Berhasil Diperbarui.');
		} else{
			$this->session->set_flashdata('warning', 'Data Gagal Disimpan');
		}
		redirect('data_pertanian');
	}

	
    public function delete($id_pertanian)
	{

		$simpan = $this->M_pertanian->delete_pertanian($id_pertanian);

		if (!$simpan) {
			$this->session->set_flashdata('danger', 'Data Pertanian Berhasil Dihapus.');
		} else{
			$this->session->set_flashdata('warning', 'Data Gagal Disimpan');
		}
		redirect('data_pertanian');
	}
	

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
