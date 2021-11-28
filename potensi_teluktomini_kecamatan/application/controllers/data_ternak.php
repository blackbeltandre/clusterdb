<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_ternak extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('level_admin'))
		{
			redirect('access_denied');
		}
	}

	public function index()
	{
		$data ['title'] 	= "Data Ternak";
		$data ['page'] 		= "data_ternak";

		$id_admin		= $this->session->userdata('id_admin');
		$data ['user']	= $this->M_panitia->get_panitia($id_admin)->result();
		
		$data ['data_ternak'] = $this->M_ternak->data_ternak()->result();
		$this->load->view('v_admin/v_app', $data);
	}

	public function input()
	{
		$jenis_ternak		=($this->input->post('jenis_ternak'));
		$jumlah_ternak		= ($this->input->post('jumlah_ternak'));
		$jumlah_pemilik 	= ($this->input->post('jumlah_pemilik'));
		

		$data = [
				'jenis_ternak' => $jenis_ternak,
				'jumlah_ternak' => $jumlah_ternak,
				'jumlah_pemilik' => $jumlah_pemilik,
			];

		$simpan = $this->M_ternak->input_ternak($data);

		if (!$simpan) {
			$this->session->set_flashdata('success', 'Data Ternak Berhasil Disimpan.');
		} else{
			$this->session->set_flashdata('warning', 'Data Gagal Disimpan');
		}
		redirect('data_ternak');
	}

	public function edit($id_ternak)
	{
		$jenis_ternak		=($this->input->post('jenis_ternak'));
		$jumlah_ternak		= ($this->input->post('jumlah_ternak'));
		$jumlah_pemilik 	= ($this->input->post('jumlah_pemilik'));
		

		$data = [
				'jenis_ternak' => $jenis_ternak,
				'jumlah_ternak' => $jumlah_ternak,
				'jumlah_pemilik' => $jumlah_pemilik,
			];
		$simpan = $this->M_ternak->update_ternak($data, $id_ternak);

		if (!$simpan) {
			$this->session->set_flashdata('info', 'Data Ternak Berhasil Diperbarui.');
		} else{
			$this->session->set_flashdata('warning', 'Data Gagal Disimpan');
		}
		redirect('data_ternak');
	}

	
    public function delete($id_ternak)
	{

		$simpan = $this->M_ternak->delete_ternak($id_ternak);

		if (!$simpan) {
			$this->session->set_flashdata('danger', 'Data Ternak Berhasil Dihapus.');
		} else{
			$this->session->set_flashdata('warning', 'Data Gagal Disimpan');
		}
		redirect('data_ternak');
	}
	

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}

