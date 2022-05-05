<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getById($id)
    {
        return $this->db->get_where('user', ['id_user' => $id]);
    }

    public function getExamHistory($id_user)
    {
        $this->db->select('*');
        $this->db->from('user_exam');
        $this->db->join('user', 'user_exam.user_id=user.id_user');
        $this->db->where('user_exam.user_id', $id_user);
        $this->db->order_by('id', 'desc');
        return $this->db->get();
    }
    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('id_user', 'desc');
        $this->db->where(['role' => 2]);
        $this->db->limit(1000);
        return $this->db->get();
    }
    public function get_new()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('id_user', 'desc');
        $this->db->where(['role' => 2, 'is_active' => 0, 'create_at' => date('Y-m-d')]);
        $this->db->limit(1000);
        return $this->db->get();
    }


    public function get_active()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('id_user', 'desc');
        $this->db->where(['role' => 2, 'is_active' => 1]);
        $this->db->limit(1000);
        return $this->db->get();
    }
    public function get_notactive()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('id_user', 'desc');
        $this->db->where(['role' => 2, 'is_active' => 0]);
        $this->db->limit(1000);
        return $this->db->get();
    }

    public function import($data)
    {
        $insert = $this->db->insert_batch('user', $data);
        if ($insert) {
            return true;
        }
    }

    public function get_filter($start, $end)
    {
        $query = $this->db->query("SELECT * FROM user WHERE create_at BETWEEN '" . $start . "' AND '" . $end . "'");
        return $query;
    }
}
