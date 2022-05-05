<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Listening.php
 * AUTHOR: Indra Basuki
 * Date:
 */
class Listening extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('role') == 1) {
            redirect('administrator/dashboard');
        }
        $this->load->model('Listening_model');
    }

    public function index()
    {

        $data = [
            'listening' => $this->Listening_model->showAll()->row()
        ];
        $this->template->nav('member/ielts/listening', 'Listening section', $data);
    }

    public function store()
    {
        $id = $this->input->post('id', true);
        $data = [
            'params_1' => $this->input->post('params_1'),
            'params_2' => $this->input->post('params_2'),
            'params_3' => $this->input->post('params_3'),
            'params_4' => $this->input->post('params_4'),
            'params_5' => $this->input->post('params_5'),
            'params_6' => $this->input->post('params_6'),
            'params_7' => $this->input->post('params_7'),
            'params_8' => $this->input->post('params_8'),
            'params_9' => $this->input->post('params_9'),
            'params_10' => $this->input->post('params_10'),
            'params_11' => $this->input->post('params_11'),
            'params_12' => $this->input->post('params_12'),
            'params_13' => $this->input->post('params_13'),
            'params_14' => $this->input->post('params_14'),
            'params_15' => $this->input->post('params_15'),
            'params_16' => $this->input->post('params_16'),
            'params_17' => $this->input->post('params_17'),
            'params_18' => $this->input->post('params_18'),
            'params_19' => $this->input->post('params_19'),
            'params_20' => $this->input->post('params_20'),
            'params_21' => $this->input->post('params_21'),
            'params_22' => $this->input->post('params_22'),
            'params_23' => $this->input->post('params_23'),
            'params_24' => $this->input->post('params_24'),
            'params_25' => $this->input->post('params_25'),
            'params_26' => $this->input->post('params_26'),
            'params_27' => $this->input->post('params_27'),
            'params_28' => $this->input->post('params_28'),
            'params_29' => $this->input->post('params_29'),
            'params_30' => $this->input->post('params_30'),
            'params_31' => $this->input->post('params_31'),
            'params_32' => $this->input->post('params_32'),
            'params_33' => $this->input->post('params_33'),
            'params_34' => $this->input->post('params_34'),
            'params_35' => $this->input->post('params_35'),
            'params_36' => $this->input->post('params_36'),
            'params_37' => $this->input->post('params_37'),
            'params_38' => $this->input->post('params_38'),
            'params_39' => $this->input->post('params_39'),
            'params_40' => $this->input->post('params_40'),
        ];

        $this->db->update('listening', $data, ['id' => $id]);
        $this->db->update('user_exam', ['listening_status' => 1], ['id' => $id]);
        $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">Your answer has been saved
        </div>');
        redirect('reading');
    }
}

/* End of file: Listening.php */
