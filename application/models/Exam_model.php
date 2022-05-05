<?php

/**
 * File Name: Exam_model.php
 * AUTHOR: Indra Basuki
 * Date:
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Exam_model extends CI_Model
{

    protected $table = 'exam';
    protected $pk = 'id_exam';

    public function __construct()
    {
        parent::__construct();
    }

    public function showAll()
    {
        return $this->db->get($this->table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, [$this->pk => $id]);
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, [$this->pk => $id]);
    }
}

/* End of file: Exam_model.php */
