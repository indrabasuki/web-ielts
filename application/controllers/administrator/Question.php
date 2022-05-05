<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Question extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard');
        }

        $this->load->model('Soal_model');
    }

    public function index()
    {
        $data['soal'] = $this->Soal_model->get()->result();
        $this->template->admin('administrator/question/index', "Data Soal", $data);
    }

    public function detail($id)
    {
        $data = [
            'soal'      => $this->Soal_model->getById($id),
        ];
        $this->template->admin('administrator/question/detail', "Detail Soal", $data);
    }


    public function edit($id)
    {
        $user = $this->ion_auth->user()->row();
        $data = [
            'user'      => $user,
            'submenu'  => 'Edit Soal Final Test',
            'soal'      => $this->soal->getById($id),
        ];
        $this->template->app('soal/edit', "Edit Soal Final Test", $data);
    }
}
