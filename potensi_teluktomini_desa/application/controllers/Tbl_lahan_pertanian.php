<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_lahan_pertanian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_lahan_pertanian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tbl_lahan_pertanian/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tbl_lahan_pertanian/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tbl_lahan_pertanian/index.html';
            $config['first_url'] = base_url() . 'tbl_lahan_pertanian/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tbl_lahan_pertanian_model->total_rows($q);
        $tbl_lahan_pertanian = $this->Tbl_lahan_pertanian_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_lahan_pertanian_data' => $tbl_lahan_pertanian,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbl_lahan_pertanian/tbl_lahan_pertanian_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_lahan_pertanian_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_lahan' => $row->id_lahan,
		'luas_lahan' => $row->luas_lahan,
		'kk' => $row->kk,
	    );
            $this->load->view('tbl_lahan_pertanian/tbl_lahan_pertanian_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_lahan_pertanian'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_lahan_pertanian/create_action'),
	    'id_lahan' => set_value('id_lahan'),
	    'luas_lahan' => set_value('luas_lahan'),
	    'kk' => set_value('kk'),
	);
        $this->load->view('tbl_lahan_pertanian/tbl_lahan_pertanian_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'luas_lahan' => $this->input->post('luas_lahan',TRUE),
		'kk' => $this->input->post('kk',TRUE),
	    );

            $this->Tbl_lahan_pertanian_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_lahan_pertanian'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_lahan_pertanian_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_lahan_pertanian/update_action'),
		'id_lahan' => set_value('id_lahan', $row->id_lahan),
		'luas_lahan' => set_value('luas_lahan', $row->luas_lahan),
		'kk' => set_value('kk', $row->kk),
	    );
            $this->load->view('tbl_lahan_pertanian/tbl_lahan_pertanian_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_lahan_pertanian'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_lahan', TRUE));
        } else {
            $data = array(
		'luas_lahan' => $this->input->post('luas_lahan',TRUE),
		'kk' => $this->input->post('kk',TRUE),
	    );

            $this->Tbl_lahan_pertanian_model->update($this->input->post('id_lahan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_lahan_pertanian'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_lahan_pertanian_model->get_by_id($id);

        if ($row) {
            $this->Tbl_lahan_pertanian_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_lahan_pertanian'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_lahan_pertanian'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('luas_lahan', 'luas lahan', 'trim|required');
	$this->form_validation->set_rules('kk', 'kk', 'trim|required');

	$this->form_validation->set_rules('id_lahan', 'id_lahan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_lahan_pertanian.php */
/* Location: ./application/controllers/Tbl_lahan_pertanian.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-09-05 16:11:13 */
/* http://harviacode.com */