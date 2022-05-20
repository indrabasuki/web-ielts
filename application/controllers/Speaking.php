<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Speaking.php
 * AUTHOR: Indra Basuki
 * Date:
 */
class Speaking extends CI_Controller
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

    public function index()
    {
        $id = $this->input->get('id_user_exam');
        $id_user = $this->input->get('member_id');
        $user_exam = $this->User_exam_model->getById($id)->row();


        if ($user_exam->speaking_status == 1) {
            redirect('dashboard');
        }
        $data = [
            'id' => $id
        ];
        $this->template->nav('member/ielts/record', 'Speaking section', $data);
    }

    public function store()
    {
        foreach (array('video', 'audio') as $type) {
            if (isset($_FILES["${type}-blob"])) {

                echo 'uploads/';

                $fileName = $_POST["${type}-filename"];
                $uploadDirectory = 'uploads/' . $fileName;

                if (!move_uploaded_file($_FILES["${type}-blob"]["tmp_name"], $uploadDirectory)) {
                    echo (" problem moving uploaded file");
                }

                echo ($fileName);
            }
        }
    }
}

/* End of file: Speaking.php */
