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
    private $exam_id = 7907422;
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('role') == 1) {
            redirect('administrator/dashboard');
        }
        $this->load->model('Exam_model');
        $this->load->model('User_exam_model');
    }

    public function output_json($data, $encode = true)
    {
        if ($encode) $data = json_encode($data);
        $this->output->set_content_type('application/json')->set_output($data);
    }

    public function index()
    {
        $user                   = $this->session->userdata();
        $data['exam']           = $this->Exam_model->getById($this->exam_id)->row();
        $data['user_exam']      = $this->User_exam_model->listUserExam($user['id_user'])->result();
        $this->template->member('member/exam/index', 'Test List', $data);
    }


    public function detail($id = null)
    {

        if (empty($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">403-forbidden</div>');
            redirect('exam');
        }
        $data['user']           = $this->session->userdata();
        $data['exam']           = $this->Exam_model->getById($this->exam_id)->row();
        $data['user_exam']      = $this->User_exam_model->getById($id)->row();
        $this->template->member('member/exam/detail', 'Detail', $data);
    }

    public function cektoken()
    {
        $id_user_exam    = $this->input->post('id_user_exam', true);
        $token           = $this->input->post('token', true);
        $exam            = $this->Exam_model->getById($this->exam_id)->row();


        $data['status'] = $token === $exam->token ? TRUE : FALSE;
        $data['id_user_exam'] =   $id_user_exam;
        if ($data['status'] == TRUE) {
            $input['id'] =  $id_user_exam;
        }
        $this->output_json($data);
    }

    public function result($id = null)
    {
        if ($id == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">404,Data not found !</div>');
            redirect('exam');
        }
        $this->load->library('Pdf');
        $data['user']                   = $this->session->userdata();
        $data['exam']           = $this->Exam_model->getById($this->exam_id)->row();
        // $data['user_exam']      = $this->User_exam_model->listUserExamResult($user['id_user']);
        var_dump($data);
        // die;
        $this->load->view('member/exam/result', $data);
    }
}

/* End of file: Exam.php */
