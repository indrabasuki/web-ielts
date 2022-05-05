<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard');
        }
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['user'] = $this->Admin_model->get()->result();
        $this->template->admin('administrator/user/index', 'Administrator', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('phone', 'No Hanphone', 'required|trim|is_unique[user.phone]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->template->admin('administrator/user/add', 'Tambah Administrator');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name'          => htmlspecialchars($this->input->post('name', true)),
                'email'         => htmlspecialchars($email),
                'phone'         => htmlspecialchars($this->input->post('phone', true)),
                'password'      => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role'          => 1,
                'is_active'     => $this->input->post('is_active', true),
                'create_at'     => date('Y-m-d'),
                'updated_at'    => date('Y-m-d')
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Administrator baru berhasil di tambahkan</div>');
            redirect('administrator/user');
        }
    }

    public function detail($id)
    {
        $data['user']           = $this->Admin_model->get_by_id($id)->row();
        $this->template->admin('administrator/user/detail', 'Detail Admin', $data);
    }

    public function edit($id)
    {
        $data['user']           = $this->Admin_model->get_by_id($id)->row();
        $this->template->admin('administrator/user/edit', 'Edit Admin', $data);
    }

    public function delete($id)
    {
        $this->db->delete('user', ['id_user' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data administrator berhasil di hapus</div>');
        redirect('administrator/user');
    }


    public function update()
    {
        $data = [
            'name'          => htmlspecialchars($this->input->post('name', true)),
            'email'         => htmlspecialchars($this->input->post('email', true)),
            'phone'         => htmlspecialchars($this->input->post('phone', true)),
            'role'          => 1,
            'is_active'     => $this->input->post('is_active', true),
            'updated_at'    => date('Y-m-d')
        ];
        $id = $this->input->post('id_user', true);
        $this->db->update('user', $data, ['id_user' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data administrator berhasil di update</div>');
        redirect('administrator/user');
    }

    public function change_password()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('current_password', 'Password lama', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'Password baru', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Konfirmasi password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->template->admin('administrator/user/change_password', 'Ganti password', $data);
        } else {
            $current_password   = $this->input->post('current_password');
            $new_password       = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">password lama salah</div>');
                redirect('administrator/user/change_password');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama</div>');
                    redirect('administrator/user/change_password');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil di update </div>');
                    redirect('administrator/user/change_password');
                }
            }
        }
    }
}
