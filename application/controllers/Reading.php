<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Reading.php
 * AUTHOR: Indra Basuki
 * Date:
 */
class Reading extends CI_Controller
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

        $id             = $this->input->get('id_user_exam');
        $id_user        = $this->input->get('member_id');
        $user_exam      = $this->User_exam_model->getById($id)->row();

        if ($id_user !== $this->user['id_user']) {
            redirect('dashboard');
        }
        if (empty($id_user)) {
            redirect('dashboard');
        }
        if (empty($id)) {
            redirect('dashboard');
        }
        if ($user_exam->reading_status == 1) {
            redirect('writing');
        }
        $data = [
            'id' => $id
        ];
        $this->template->nav('member/ielts/reading', 'Listening section', $data);
    }
    public function store()
    {
        $score = 0;
        $band = 0;
        $id = $this->input->post('id');
        $params_1 = ($this->input->post('params_1') == 'FALSE' ? $score += 1 :  $score += 0);
        $params_2 = ($this->input->post('params_2') == 'NOT GIVEN' ? $score += 1 :  $score += 0);
        $params_3 = ($this->input->post('params_3') == 'FALSE' ? $score += 1 :  $score += 0);
        $params_4 = ($this->input->post('params_4') == 'TRUE' ? $score += 1 :  $score += 0);
        $params_5 = ($this->input->post('params_5') == 'NOT GIVEN' ?   $score += 1 :  $score += 0);
        $params_6 = ($this->input->post('params_6') == 'TRUE' ? $score += 1 :  $score += 0);
        $params_7 = ($this->input->post('params_7') == 'NOT GIVEN' ? $score += 1 :  $score += 0);
        $params_8 = ($this->input->post('params_8') == 'RICH' ? $score += 1 :  $score += 0);
        $params_9 = ($this->input->post('params_9') == 'COMMERCIAL POSSIBILITIES' ? $score += 1 :  $score += 0);
        $params_10 = ($this->input->post('params_10') == 'MAUVE' ? $score += 1 :  $score += 0);
        $params_11 = ($this->input->post('params_11') == 'ROBERT PULLAR' ? $score += 1 :  $score += 0);
        $params_12 = ($this->input->post('params_12') == 'FRANCE' ? $score += 1 :  $score += 0);
        $params_13 = ($this->input->post('params_13') == 'MALARIA' ? $score += 1 :  $score += 0);
        $params_14 = ($this->input->post('params_14') == 'III' ? $score += 1 :  $score += 0);
        $params_15 = ($this->input->post('params_15') == 'VI' ? $score += 1 :  $score += 0);
        $params_16 = ($this->input->post('params_16') == 'V' ? $score += 1 :  $score += 0);
        $params_17 = ($this->input->post('params_17') == 'X' ? $score += 1 :  $score += 0);
        $params_18 = ($this->input->post('params_18') == 'IV' ? $score += 1 :  $score += 0);
        $params_19 = ($this->input->post('params_19') == 'VIII' ? $score += 1 :  $score += 0);
        $params_20 = ($this->input->post('params_20') == 'I' ? $score += 1 :  $score += 0);
        $params_21 = ($this->input->post('params_21') == 'WHEELS' ? $score += 1 :  $score += 0);
        $params_22 = ($this->input->post('params_22') == 'FILM' ?  $score += 1 :  $score += 0);
        $params_23 = ($this->input->post('params_23') == 'FILTER' ? $score += 1 :  $score += 0);
        $params_24 = ($this->input->post('params_24') == 'WASTE' ? $score += 1 :  $score += 0);
        $params_25 = ($this->input->post('params_25') == 'PERFORMANCE' ? $score += 1 :  $score += 0);
        $params_26 = ($this->input->post('params_26') == 'SERVICING' ? $score += 1 :  $score += 0);
        $params_27 = ($this->input->post('params_27') == 'TRUE' ? $score += 1 :  $score += 0);
        $params_28 = ($this->input->post('params_28') == 'NOT GIVEN' ? $score += 1 :  $score += 0);
        $params_29 = ($this->input->post('params_29') == 'TRUE' ? $score += 1 :  $score += 0);
        $params_30 = ($this->input->post('params_30') == 'FALSE' ? $score += 1 :  $score += 0);
        $params_31 = ($this->input->post('params_31') == 'A' ? $score += 1 :  $score += 0);
        $params_32 = ($this->input->post('params_32') == 'C' ? $score += 1 :  $score += 0);
        $params_33 = ($this->input->post('params_33') == 'B' ? $score += 1 :  $score += 0);
        $params_34 = ($this->input->post('params_34') == 'D' ? $score += 1 :  $score += 0);
        $params_35 = ($this->input->post('params_35') == 'A' ? $score += 1 :  $score += 0);
        $params_36 = ($this->input->post('params_36') == 'D' ? $score += 1 :  $score += 0);
        $params_37 = ($this->input->post('params_37') == 'HEAT' ? $score += 1 :  $score += 0);
        $params_38 = ($this->input->post('params_38') == 'LEAF LITTER' ? $score += 1 :  $score += 0);
        $params_39 = ($this->input->post('params_39') == 'SCREEN' ? $score += 1 :  $score += 0);
        $params_40 = ($this->input->post('params_40') == 'ALCOHOL' ? $score += 1 :  $score += 0);

        $band = score_reading($score);

        $data['reading_status'] = 0;
        $data['reading_score']  = $score;
        $data['reading_band']   = strval($band);

        $this->db->update('user_exam', $data, ['id' => $id]);

        redirect(base_url() . "writing/?key=" . sha1($id) . "&id_user_exam=" . $id . "&member_id=" . $this->user['id_user']);
    }
}

/* End of file: Reading.php */
