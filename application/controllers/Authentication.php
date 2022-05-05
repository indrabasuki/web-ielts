<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('dashboard');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data = [
                'recaptcha' => $this->recaptcha->create_box()
            ];
            $this->load->view('authentication/login', $data);
        } else {
            // validasinya success
            $this->_login();
        }
    }


    private function _login()
    {
        $email          = $this->input->post('email');
        $password       = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $is_valid = $this->recaptcha->is_valid();

                    if ($is_valid['success']) {
                        $data = [
                            'id_user' => $user['id_user'],
                            'name' => $user['name'],
                            'email' => $user['email'],
                            'role' => $user['role']
                        ];
                        $this->session->set_userdata($data);
                        if ($user['role'] == 1) {
                            redirect('administrator/dashboard');
                        } else {
                            redirect('dashboard');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">recaptcha invalid</div>');

                        redirect('authentication');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email / Password invalid</div>');

                    redirect('authentication');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account not active</div>');

                redirect('authentication');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account not found</div>');

            redirect('authentication');
        }
    }


    public function register()
    {
        if ($this->session->userdata('email')) {
            redirect('dashboard');
        }

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim|max_length[40]|min_length[2]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);

        $this->form_validation->set_rules('phone', 'Phone Number', 'required|is_unique[user.phone]');

        if ($this->form_validation->run() == false) {
            $this->load->view('authentication/register');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name'          => htmlspecialchars($this->input->post('name', true)),
                'email'         => htmlspecialchars($email),
                'phone'         => $this->input->post('phone', true),
                'password'      => password_hash($this->input->post('phone'), PASSWORD_DEFAULT),
                'role'          => 2,
                'is_active'     => 0,
                'create_at'     => date('Y-m-d'),
                'updated_at'    => date('Y-m-d')
            ];


            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert"><h4 class="alert-heading text-center">Success!</h4>
                    <hr>
                    <p>Register success.PLease confirm administrator activate your account !</p>
                   </div>');
            redirect('authentication');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Session finish</div>');
        redirect('authentication');
    }


    public function changePassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('auth');
        }

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Change Password';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/change-password');
            $this->load->view('templates/auth_footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->db->delete('user_token', ['email' => $email]);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been changed! Please login.</div>');
            redirect('auth');
        }
    }
}
