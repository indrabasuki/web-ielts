<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Exam.php
 * AUTHOR: Indra basuki
 * Date:
 */
class Exam extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Exam_model');
    }

    public function index()
    {
        $data['exam'] = $this->Exam_model->showAll()->result();
        $this->template->admin('administrator/exam/index', "Data Exam", $data);
    }

    public function show($id = null)
    {
        if (!$id) {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">Data not found
                                                    </div>');
            redirect('administrator/exam');
        }
        $data['exam'] = $this->Exam_model->getById($id)->row();
        $this->template->admin('administrator/exam/detail', "Detail Exam", $data);
    }

    public function edit($id = null)
    {
        if (!$id) {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">Data not found
                                                    </div>');
            redirect('administrator/exam');
        }
        $data['exam'] = $this->Exam_model->getById($id)->row();
        $this->template->admin('administrator/exam/edit', "Edit Exam", $data);
    }

    public function store()
    {
        $data = [
            'name' => $this->input->post('name'),
            'question_count' => $this->input->post('question_count'),
            'time' => $this->input->post('time'),
            'start_date' => $this->input->post('start_date'),
            'end_date' => $this->input->post('end_date'),
            'token' => $this->input->post('token'),
            'certificate' => $this->input->post('certificate'),
        ];
        $id = $this->input->post('id_exam');
        $this->Exam_model->update($data, $id);
        $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">Update data success
        </div>');
        redirect('administrator/exam');
    }
}

/* End of file: Exam.php */
