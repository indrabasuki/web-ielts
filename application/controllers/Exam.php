<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Exam.php
 * AUTHOR: Indra Basuki
 * Date:
 */
class Exam extends CI_Controller
{

    public $user;
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('role') == 1) {
            redirect('administrator/dashboard');
        }
        $this->load->model('Exam_model');
        $this->load->model('User_exam_model');
        $this->load->model('Listening_model');
        $this->load->model('Reading_model');
    }

    public function index()
    {
        $user                   = $this->session->userdata();
        $data['exam']           = $this->Exam_model->getById(1)->row();
        $data['user_exam']      = $this->User_exam_model->listUserExam($user['id_user'])->result();
        $this->template->member('member/exam/index', 'Exam List', $data);
    }

    public function insertId()
    {
        try {
            $data['id'] =  $this->input->post('id');
            $this->Listening_model->create($data);
            $this->Reading_model->create($data);
            echo json_encode([
                'status' => 'success',
                'data'  => $data
            ]);
        } catch (\Exception $e) {
            echo json_encode($e->getMessage());
        }
    }

    public function detail($id = null)
    {

        if (!$id) {
            redirect('exam');
        }
        $data['user']           = $this->session->userdata();
        $data['exam']           = $this->Exam_model->getById(1)->row();
        $data['user_exam']      = $this->User_exam_model->getById($id)->row();
        if (!$data['user_exam']) {
            redirect('exam');
        }
        $this->template->member('member/exam/detail', 'Detail', $data);
    }
}

/* End of file: Exam.php */
