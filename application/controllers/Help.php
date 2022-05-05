<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Help.php
 * AUTHOR: 
 * Date:
 */
class Help extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('role') == 1) {
            redirect('administrator/dashboard');
        }
    }

    public function index()
    {
        $this->template->member('member/help', 'Help and Support',);
    }
}

/* End of file: Help.php */
