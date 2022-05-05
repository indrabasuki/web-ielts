<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validasi extends CI_Controller
{
    public function get($id = null)
    {
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->load->model('ujian_model');
        $data['item'] = $this->ujian_model->validasi($id);
        if (!$data['item']) {
            $this->load->view('e404');
        } else {
            $this->load->view('validasi', $data);
        }
    }

    public function tes()
    {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $from = "noreply@toeflgoldenenglish.com";
        $to = "indrabasuki17@gmail.com";
        $subject = "Account TOEFL Test";
        $message = "Informasi Akun \r\n\r\nEMAIL : \r\nPassword : \r\nTOKEN Test : ";
        $headers = "From:" . $from;
        mail ($to,$subject,$message,$headers);
        echo "The email message was sent.";
    }
}
