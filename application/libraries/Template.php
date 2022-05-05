<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Name			: Template
 * AUTHOR		: Indra Basuki
 * Date			: 1 Juli 2020 0
 */
class Template
{
    protected $_ci;

    public function __construct()
    {
        $this->_ci = &get_instance();
    }

    public function admin($template, $title, $data = null)
    {
        $data['content'] = $this->_ci->load->view($template, $data, true);
        $data['title'] = $title;
        $this->_ci->load->view('templates/admin.php', $data);
    }
    public function member($template, $title, $data = null)
    {
        $data['content'] = $this->_ci->load->view($template, $data, true);
        $data['title'] = $title;
        $this->_ci->load->view('templates/member.php', $data);
    }


    public function nav($template, $title, $data = null)
    {
        $data['content'] = $this->_ci->load->view($template, $data, true);
        $data['title'] = $title;
        $this->_ci->load->view('templates/nav.php', $data);
    }
}
