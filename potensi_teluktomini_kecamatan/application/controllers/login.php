<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data ['title'] 	= "Login Panitia";
		$data ['page'] 		= "login_panitia";
		$this->load->view('v_login/login', $data);
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('comfirm_password', 'Comfirm Password', 'trim|required|min_length[8]|matches[password]');

		if($this->form_validation->run() == FALSE) {

			$data = array(
				'warning' => validation_errors() 
				);

			$this->session->set_flashdata($data);
	
			redirect('login/panitia');

		}else{
			$username = $this->input->post('username');
		 	$password = $this->input->post('password');

		 	//Cek Login Panitia
			$cek_panitia = $this->M_panitia->cek_panitia($username)->result();
		
			foreach($cek_panitia as $cu)
			{	
				$user = $cu->username;
				$pass = $this->encryption->decrypt($cu->password);
			}
			//echo $user." ".$pass;
			if ($user == "") {
				$this->session->set_flashdata('warning', 'Maaf, Panitia Tidak Terdaftar.');
				redirect('login/panitia');
			
			}elseif($pass != $password){
				$this->session->set_flashdata('warning', 'Maaf, Password Yang Anda Masukan Salah.');
				redirect('login/panitia');
			}elseif ($pass == $password) {

				$cek_panitia = $this->M_panitia->cek_panitia($username)->result();
				foreach($cek_panitia as $sess){
					$id_admin 		= $sess->id_admin;
					$username 		= $sess->username;
					$password 		= $sess->password;
					$level_admin 	= $sess->level_admin;
					$nama 			= $sess->nama;
				}

				$user_data = array(
					'id_admin' 		=> $id_admin,
					'username' 		=> $username,
					'password' 		=> $password,
					'level_admin' 	=> $level_admin,
					'nama' 			=> $nama
					);
				$this->session->set_userdata($user_data);

				if ($level_admin == '1') {
					redirect('admin');
				}elseif ($level_admin == '2') {
					redirect('panitia');
				}else{
					redirect('access_denied');
				}
			
			}else{

				$this->session->set_flashdata('warning', 'Maaf, kombinasi username dan password salah.');
				redirect('login');
			}
		}
	}

}