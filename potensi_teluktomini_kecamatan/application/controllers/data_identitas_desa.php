<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_identitas_desa extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('level_admin'))
		{
			redirect('access_denied');
		}

	}

	public function index()
	{
		$data ['title'] 	= "Data Identitas Desa";
		$data ['page'] 		= "data_identitas_desa";

		$id_admin		= $this->session->userdata('id_admin');
		$data ['user']	= $this->M_panitia->get_panitia($id_admin)->result();
		
		$data ['data_identitas_desa'] = $this->M_identitas_desa->contoh();

		$this->load->view('v_admin/v_app', $data);
	}

	public function input()
	{
		$nama_desa	        = ($this->input->post('nama_desa'));
		$kepala_desa		= ($this->input->post('kepala_desa'));
		$alamat	            = ($this->input->post('alamat'));
		$nomor_telpon		= ($this->input->post('nomor_telpon'));
		
		

		$data = [
				'nama_desa' => $nama_desa,
				'kepala_desa' => $kepala_desa,
				'alamat' => $alamat,
				'nomor_telpon' => $nomor_telpon,				
			];

		$simpan = $this->M_identitas_desa->insert($data);

		if (!$simpan) {
			$this->session->set_flashdata('success', 'Data Identitas Berhasil Disimpan.');
		} else{
			$this->session->set_flashdata('warning', 'Data Gagal Disimpan');
		}
		redirect('data_identitas_desa');
	}

	public function edit($id_desa)
	{
		$id_desa	        = ($this->input->post('id_desa'));
		$nama_desa	        = ($this->input->post('nama_desa'));
		$kepala_desa		= ($this->input->post('kepala_desa'));
		$alamat	            = ($this->input->post('alamat'));
		$nomor_telpon		= ($this->input->post('nomor_telpon'));
	
		

		$data = [
			'id_desa' => $id_desa,
			'nama_desa' => $nama_desa,
			'kepala_desa' => $kepala_desa,
			'alamat' => $alamat,
			'nomor_telpon' => $nomor_telpon,
			];
		$simpan = $this->M_identitas_desa->update_desa($data, $id_desa);

		if (!$simpan) {
			$this->session->set_flashdata('info', 'Data Identitas Berhasil Diperbarui.');
		} else{
			$this->session->set_flashdata('warning', 'Data Gagal Disimpan');
		}
		redirect('data_identitas_desa');
	}

	
    public function delete($id_desa)
	{

		$simpan = $this->M_identitas_desa->delete_identitas($id_desa);

		if (!$simpan) {
			$this->session->set_flashdata('danger', 'Data Identitas Berhasil Dihapus.');
		} else{
			$this->session->set_flashdata('warning', 'Data Gagal Disimpan');
		}
		redirect('data_identitas_desa');
	}
	

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
