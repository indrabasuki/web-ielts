<?php

/**
 * File Name: User_exam_model.php
 * AUTHOR: Indra Basuki
 * Date:
 */
defined('BASEPATH') or exit('No direct script access allowed');

class User_exam_model extends CI_Model
{

    protected $table    = 'user_exam';
    protected $pk       = 'id';


    public function create($data)
    {
        $query = $this->db->insert($this->table, $data);
        if (!$query) {
            return false;
        }
        return $query;
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id]);
    }


    public function generateSeri()
    {
        $this->db->select('RIGHT(user_exam.seri,4) as nomor', FALSE);
        $this->db->order_by('seri', 'DESC');
        $this->db->limit(1);

        $query = $this->db->get('user_exam');

        if ($query->num_rows() != 0) {
            $data = $query->row();
            $nomor_seri = intval($data->nomor) + 1;
        } else {
            $nomor_seri = 1;
        }

        $seri_max = str_pad($nomor_seri, 4, "0", STR_PAD_LEFT);
        $seri_jadi = "02A." . $seri_max;
        return $seri_jadi;
    }



    /* For User Method */
    public function listUserExam($user_id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('user_id', $user_id);
        return $this->db->get();
    }

    public function listUserCertificate($user_id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(['status' => 1, 'user_id' => $user_id]);
        return $this->db->get();
    }
}

/* End of file: User_exam_model.php */
