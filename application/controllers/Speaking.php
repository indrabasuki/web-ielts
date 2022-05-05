<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Speaking.php
 * AUTHOR: Indra Basuki
 * Date:
 */
class Speaking extends CI_Controller
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
        # code...
    }
}

/* End of file: Speaking.php */
