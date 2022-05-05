<?php

/**
 * File Name: Reading_model.php
 * AUTHOR: Indra Basuki
 * Date:
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Reading_model extends CI_Model
{

    protected $table = 'reading';
    protected $pk = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    public function showAll()
    {
        return $this->db->get($this->table);
    }

    public function create($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function update($data, $id)
    {
        return $this->db->update($data, array($this->pk => $id));
    }
    # code...

}

/* End of file: Reading_model.php */
