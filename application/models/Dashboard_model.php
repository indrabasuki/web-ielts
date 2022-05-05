<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Name			: Dashboard Models
 * AUTHOR		: Indra Basuki
 * Date			: 1 Juli 2020 0
 */
class Dashboard_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function new_member()
    {
        return $this->db->get_where('user', ['role' => 2, 'is_active' => 0, 'create_at' => date('Y-m-d')]);
    }

    public function new_test()
    {
        $query = $this->db->query("SELECT * FROM hasil_ujian JOIN user ON hasil_ujian.user_id=user.id_user WHERE status='N' ORDER BY id DESC LIMIT 10;");
        return $query;
    }
}
