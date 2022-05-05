<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('role') == 1) {
            redirect('administrator/dashboard');
        }
    }

    public function index()
    {
        $user               = $this->session->userdata();
        $data['user']       = $user;
        $data['member']     = $this->db->get_where('user', ['email' => $user['email']])->row();
        $this->template->member('member/dashboard', 'Dashboard', $data);
    }
}
