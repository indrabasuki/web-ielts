<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Writing.php
 * AUTHOR: Indra Basuki
 * Date:
 */
class Writing extends CI_Controller
{
    public $user;
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('role') == 1) {
            redirect('administrator/dashboard');
        }
        $this->load->model('User_exam_model');
        $this->user          = $this->session->userdata();
    }

    public function output_json($data, $encode = true)
    {
        if ($encode) $data = json_encode($data);
        $this->output->set_content_type('application/json')->set_output($data);
    }

    public function index()
    {
        $id = $this->input->get('id_user_exam');
        $id_user = $this->input->get('member_id');
        $user_exam = $this->User_exam_model->getById($id)->row();

        // if ($id_user !== $this->user['id_user']) {
        //     redirect('dashboard');
        // }
        // if (empty($id_user)) {
        //     redirect('dashboard');
        // }
        // if (empty($id)) {
        //     redirect('dashboard');
        // }
        // if ($user_exam-> == 1) {
        //     redirect(base_url() . "reading/?key=" . sha1($id) . "&id_user_exam=" . $id . "&member_id=" . $this->user['id_user']);
        // }
        $data = [
            'id' => $id
        ];
        $this->template->nav('member/ielts/writing', 'Writing section', $data);
    }

    public function store()
    {
        $id = $this->input->post('id');

        $data = [
            'writing_task1' => $this->input->post('params_1'),
            'writing_task2' => $this->input->post('params_2'),
        ];
        $this->db->update('user_exam', $data, ['id' => $id]);
        $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">Your answer has been saved
            </div>');
        redirect(base_url() . "speaking/?key=" . sha1($id) . "&id_user_exam=" . $id . "&member_id=" . $this->user['id_user']);
    }
}

/* End of file: Writing.php */
