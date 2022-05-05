<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('role') != "1") {
            redirect('dashboard');
        }
        $this->load->model('Dashboard_model');
        $this->load->model('Member_model');
    }

    public function index()
    {
        $data['new_member'] = $this->Dashboard_model->new_member()->result();

        $this->template->admin('administrator/dashboard', 'Dashboard', $data);
    }
    // public function send_email($id)
    // {
    //     $member     = $this->Member_model->get_by_id($id)->row();
    //     $ujian     = $this->db->get('ujian')->row();
    //     ini_set('display_errors', 1);
    //     error_reporting(E_ALL);
    //     $from = "noreply@toeflgoldenenglish.com";
    //     $to = $member->email;
    //     $subject = "Account TOEFL Test";
    //     $message = "Informasi Akun \r\n\r\nEMAIL :$member->email \r\nPassword : $member->phone \r\nTOKEN Test : $ujian->token ";
    //     $headers = "From:" . $from;
    //     mail($to, $subject, $message, $headers);
    // }

    public function activate($id_user)
    {
    }
}
