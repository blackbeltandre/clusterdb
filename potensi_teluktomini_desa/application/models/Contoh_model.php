<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contoh_model extends CI_Model
{

    public $table = 'tbl_pimpinan';
    public $id = 'id_camat';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
        
    }
 function contoh(){
    $db2 = $this->load->database('database_kedua', TRUE);
    $querydb1= $db2->select('*')->get('tbl_pimpinan');
    return $querydb1->result();
 }
    // get all
    function get_all()
    {
        $db2 = $this->load->database('database_kedua', TRUE);
        $db2->order_by($this->id, $this->order);
        return $db2->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $db2 = $this->load->database('database_kedua', TRUE);

        $db2->where($this->id, $id);
        return $db2->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $db2 = $this->load->database('database_kedua', TRUE);

        $db2->like('id', $q);
	$db2->or_like('kelas', $q);
	$db2->from($this->table);
        return $db2->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $db2 = $this->load->database('database_kedua', TRUE);

        $db2->order_by($this->id, $this->order);
        $db2->like('id', $q);
	$db2->or_like('kelas', $q);
	$db2->limit($limit, $start);
        return $db2->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $db2 = $this->load->database('database_kedua', TRUE);

        $db2->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $db2 = $this->load->database('database_kedua', TRUE);

        $db2->where($this->id, $id);
        $db2->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $db2 = $this->load->database('database_kedua', TRUE);

        $db2->where($this->id, $id);
        $db2->delete($this->table);
    }

}

/* End of file Data_kelas_model.php */
/* Location: ./application/models/Data_kelas_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-01 06:36:43 */
/* http://harviacode.com */