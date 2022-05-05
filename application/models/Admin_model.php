<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        return $this->db->get_where('user', ['role' => 1]);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('user', ['id_user' => $id]);
    }
}
