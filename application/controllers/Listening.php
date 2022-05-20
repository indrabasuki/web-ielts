<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Listening.php
 * AUTHOR: Indra Basuki
 * Date:
 */
class Listening extends CI_Controller
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

        if ($id_user !== $this->user['id_user']) {
            redirect('dashboard');
        }
        if (empty($id_user)) {
            redirect('dashboard');
        }
        if (empty($id)) {
            redirect('dashboard');
        }
        if ($user_exam->listening_status == 1) {
            redirect(base_url() . "reading/?key=" . sha1($id) . "&id_user_exam=" . $id . "&member_id=" . $this->user['id_user']);
        }
        $data = [
            'id' => $id
        ];
        $this->template->nav('member/ielts/speaking', 'Speaking', $data);
    }

    public function store()
    {
        $score = 0;
        $band = 0;
        $id = $this->input->post('id');
        $params_1 = ($this->input->post('params_1') == '2194429785' ? $score += 1 :  $score += 0);
        $params_2 = ($this->input->post('params_2') == '10 OCTOBER' ? $score += 1 :  $score += 0);
        $params_3 = ($this->input->post('params_3') == 'MANAGER' ? $score += 1 :  $score += 0);
        $params_4 = ($this->input->post('params_4') == 'CAWLEY' ? $score += 1 :  $score += 0);
        $params_5 = ($this->input->post('params_5') == '3 WEEKS' ?   $score += 1 :  $score += 0);
        $params_6 = ($this->input->post('params_6') == 'TENNIS' ? $score += 1 :  $score += 0);
        $params_7 = ($this->input->post('params_7') == 'RUNNING' ? $score += 1 :  $score += 0);
        $params_8 = ($this->input->post('params_8') == 'SHOULDER' ? $score += 1 :  $score += 0);
        $params_9 = ($this->input->post('params_9') == 'VITAMINS' ? $score += 1 :  $score += 0);
        $params_10 = ($this->input->post('params_10') == 'C' ? $score += 1 :  $score += 0);
        $params_11 = ($this->input->post('params_11') == 'A' ? $score += 1 :  $score += 0);
        $params_12 = ($this->input->post('params_12') == 'B' ? $score += 1 :  $score += 0);
        $params_13 = ($this->input->post('params_13') == 'C' ? $score += 1 :  $score += 0);
        $params_14 = ($this->input->post('params_14') == 'E' ? $score += 1 :  $score += 0);
        $params_15 = ($this->input->post('params_15') == 'C' ? $score += 1 :  $score += 0);
        $params_16 = ($this->input->post('params_16') == 'B' ? $score += 1 :  $score += 0);
        $params_17 = ($this->input->post('params_17') == 'A' ? $score += 1 :  $score += 0);
        $params_18 = ($this->input->post('params_18') == 'G' ? $score += 1 :  $score += 0);
        $params_19 = ($this->input->post('params_19') == 'D' ? $score += 1 :  $score += 0);
        $params_20 = ($this->input->post('params_20') == 'PAGE' ? $score += 1 :  $score += 0);
        $params_21 = ($this->input->post('params_21') == 'SIZE' ? $score += 1 :  $score += 0);
        $params_22 = ($this->input->post('params_22') == 'GRAPHIC' ?  $score += 1 :  $score += 0);
        $params_23 = ($this->input->post('params_23') == 'STRUCTURE' ? $score += 1 :  $score += 0);
        $params_24 = ($this->input->post('params_24') == 'PURPOSE' ? $score += 1 :  $score += 0);
        $params_25 = ($this->input->post('params_25') == 'ASSUMPTION' ? $score += 1 :  $score += 0);
        $params_26 = ($this->input->post('params_26') == 'A' ? $score += 1 :  $score += 0);
        $params_27 = ($this->input->post('params_27') == 'C' ? $score += 1 :  $score += 0);
        $params_28 = ($this->input->post('params_28') == 'C' ? $score += 1 :  $score += 0);
        $params_29 = ($this->input->post('params_29') == 'B' ? $score += 1 :  $score += 0);
        $params_30 = ($this->input->post('params_30') == 'BULLYING' ? $score += 1 :  $score += 0);
        $params_31 = ($this->input->post('params_31') == 'SUPERIORITY' ? $score += 1 :  $score += 0);
        $params_32 = ($this->input->post('params_32') == 'PERSONALITY' ? $score += 1 :  $score += 0);
        $params_33 = ($this->input->post('params_33') == 'STRUCTURAL' ? $score += 1 :  $score += 0);
        $params_34 = ($this->input->post('params_34') == 'ABSENCE' ? $score += 1 :  $score += 0);
        $params_35 = ($this->input->post('params_35') == 'CONFIDENCE' ? $score += 1 :  $score += 0);
        $params_36 = ($this->input->post('params_36') == 'VISIONS' ? $score += 1 :  $score += 0);
        $params_37 = ($this->input->post('params_37') == 'DEMOCRATIC' ? $score += 1 :  $score += 0);
        $params_38 = ($this->input->post('params_38') == 'RESPECT' ? $score += 1 :  $score += 0);
        $params_39 = ($this->input->post('params_39') == 'MEDIATOR' ? $score += 1 :  $score += 0);
        $params_40 = ($this->input->post('params_40') == 'MEDIATOR' ? $score += 1 :  $score += 0);

        $band = score_listening($score);

        $data['listening_status'] = 0;
        $data['listening_score'] = $score;
        $data['listening_band'] = strval($band);

        $this->db->update('user_exam', $data, ['id' => $id]);

        redirect(base_url() . "reading/?key=" . sha1($id) . "&id_user_exam=" . $id . "&member_id=" . $this->user['id_user']);
    }
}

/* End of file: Listening.php */
