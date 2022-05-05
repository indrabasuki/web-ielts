<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Certificate.php
 * AUTHOR: 
 * Date:
 */
class Certificate extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Exam_model');
        $this->load->model('User_exam_model');
    }

    public function index()
    {
        $user                   = $this->session->userdata();
        $data['exam']           = $this->Exam_model->getById(1)->row();
        $data['user_certficate']      = $this->User_exam_model->listUserCertificate($user['id_user'])->result();
        $this->template->member('member/certificate', 'Certificate List', $data);
    }
}

/* End of file: Certificate.php */
