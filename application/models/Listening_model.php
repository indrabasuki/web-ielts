<?php

/**
 * File Name: Listening_model.php
 * AUTHOR: INdra Basuki
 * Date:
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Listening_model extends CI_Model
{

    protected $table = 'listening';
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
}

/* End of file: Listening_model.php */
