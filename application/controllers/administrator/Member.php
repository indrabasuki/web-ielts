<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

class Member extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('role') != 1) {
            redirect('dashboard');
        }
        $this->load->model('Member_model');
        $this->load->model('User_exam_model');
        $this->load->library('ciqrcode');
    }

    public function index()
    {
        $data['member'] = $this->Member_model->get_all()->result();
        $this->template->admin('administrator/member/index', 'Data Member', $data);
    }


    public function filter()
    {

        $start = $this->input->post('start');
        $end = $this->input->post('end');
        $data['filter'] = $this->Member_model->get_filter($start, $end)->result();
        if ($data['filter']) {
            $this->template->admin('administrator/member/filter', 'Filter Member', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak di temukan d!</div>');
            redirect('administrator/member/new');
        }
    }
    public function add()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('phone', 'No Hanphone', 'required|trim|is_unique[user.phone]');
        if ($this->form_validation->run() == false) {
            $this->template->admin('administrator/member/add', 'Tambah Member');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name'          => htmlspecialchars($this->input->post('name', true)),
                'email'         => htmlspecialchars($email),
                'phone'         => htmlspecialchars($this->input->post('phone', true)),
                'password'      => password_hash($this->input->post('phone'), PASSWORD_DEFAULT),
                'role'          => 2,
                'is_active'     => $this->input->post('is_active', true),
                'create_at'     => date('Y-m-d'),
                'updated_at'    => date('Y-m-d')
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Member baru berhasil di tambahkan</div>');
            redirect('administrator/member');
        }
    }

    public function detail($id)
    {
        $data['user']               = $this->Member_model->getById($id)->row();
        $data['user_exam_history']  = $this->Member_model->getExamHistory($id)->result();
        $this->template->admin('administrator/member/detail', 'Detail Member', $data);
    }

    public function edit($id)
    {
        $data['member']         = $this->Member_model->get_by_id($id)->row();
        $this->template->admin('administrator/member/edit', 'Edit Member', $data);
    }

    public function update()
    {
        $data = [
            'name'          => htmlspecialchars($this->input->post('name', true)),
            'email'         => htmlspecialchars($this->input->post('email', true)),
            'phone'         => htmlspecialchars($this->input->post('phone', true)),
            'password'      => password_hash($this->input->post('phone'), PASSWORD_DEFAULT),
            'role'          => 2,
            'is_active'     => $this->input->post('is_active', true),
            'updated_at'    => date('Y-m-d')
        ];
        $id = $this->input->post('id_user', true);
        $this->db->update('user', $data, ['id_user' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data member berhasil di update</div>');
        redirect('administrator/member');
    }
    public function delete($id)
    {
        $this->db->delete('user', ['id_user' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data member berhasil di hapus</div>');
        redirect('administrator/member');
    }
    public function activate($id_user)
    {
        $this->db->update('user', ['is_active' => 1], ['id_user' => $id_user]);
        $user = $this->db->get_where('user', ['id_user' => $id_user])->row();
        $ujian              = $this->Ujian_model->getUjianById(7466);
        $soal               = $this->Ujian_model->getSoal(7466);
        $soalListening      = $this->Ujian_model->getSoalById(1);
        $soalWriting        = $this->Ujian_model->getSoalById(2);
        $soalReading        = $this->Ujian_model->getSoalById(3);

        $soal_urut_ok     = array();
        $i = 0;
        foreach ($soal as $s) {
            $soal_per = new stdClass();
            $soal_per->id_soal         = $s->id_soal;
            $soal_per->soal         = $s->soal;
            $soal_per->opsi_a         = $s->opsi_a;
            $soal_per->opsi_b         = $s->opsi_b;
            $soal_per->opsi_c         = $s->opsi_c;
            $soal_per->opsi_d         = $s->opsi_d;
            $soal_per->jawaban         = $s->jawaban;
            $soal_urut_ok[$i]         = $soal_per;
            $i++;
        }



        $soal_urut_ok     = $soal_urut_ok;
        $list_id_soal    = "";
        $list_jw_soal     = "";
        $list_id_soal1    = "";
        $list_jw_soal1     = "";
        $list_id_soal2    = "";
        $list_jw_soal2     = "";
        $list_id_soal3    = "";
        $list_jw_soal3     = "";

        if (!empty($soal)) {
            foreach ($soal as $d) {
                $list_id_soal .= $d->id_soal . ",";
                $list_jw_soal .= $d->id_soal . "::N,";
            }
        }
        if (!empty($soalListening)) {
            foreach ($soalListening as $d) {
                $list_id_soal1 .= $d->id_soal . ",";
                $list_jw_soal1 .= $d->id_soal . "::N,";
            }
        }

        if (!empty($soalWriting)) {
            foreach ($soalWriting as  $dw) {
                $list_id_soal2 .= $dw->id_soal . ",";
                $list_jw_soal2 .= $dw->id_soal . "::N,";
            }
        }

        if (!empty($soalReading)) {
            foreach ($soalReading as  $dr) {
                $list_id_soal3 .= $dr->id_soal . ",";
                $list_jw_soal3 .= $dr->id_soal . "::N,";
            }
        }
        $list_id_soal     = substr($list_id_soal, 0, -1);
        $list_jw_soal     = substr($list_jw_soal, 0, -1);
        $list_id_soal1     = substr($list_id_soal1, 0, -1);
        $list_jw_soal1     = substr($list_jw_soal1, 0, -1);
        $list_id_soal2     = substr($list_id_soal2, 0, -1);
        $list_jw_soal2     = substr($list_jw_soal2, 0, -1);
        $list_id_soal3     = substr($list_id_soal3, 0, -1);
        $list_jw_soal3     = substr($list_jw_soal3, 0, -1);
        $waktu_selesai     = date('Y-m-d H:i:s', strtotime("+{$ujian->waktu} minute"));
        $time_mulai        = date('Y-m-d H:i:s');
        //qrcode
        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
        $seri = $this->Ujian_model->getSerial();
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './public/'; //string, the default is application/cache/
        $config['errorlog']     = './public/'; //string, the default is application/logs/
        $config['imagedir']     = './public/newqr/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
        $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
        $image_name = 'https://toeflgoldenenglish.com/validasi/get/' . $seri . '.png';
        $qrcode = $seri . '.png';
        $params['data'] = $image_name; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 256;
        $params['savename'] = FCPATH . $config['imagedir'] .   $qrcode; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

        $input = [
            'ujian_id'                     => 7466,
            'user_id'                      => $id_user,
            'list_soal'                    => $list_id_soal,
            'list_jawaban'                 => $list_jw_soal,
            'list_soal_listening'          => $list_id_soal1,
            'list_jawaban_listening'       => $list_jw_soal1,
            'list_soal_writing'            => $list_id_soal2,
            'list_jawaban_writing'         => $list_jw_soal2,
            'list_soal_reading'            => $list_id_soal3,
            'list_jawaban_reading'         => $list_jw_soal3,
            'jml_benar'                    => 0,
            'nilai'                        => 0,
            'tgl_mulai'                    => null,
            'tgl_selesai'                  => null,
            'status'                       => 'Y',
            'qrcode'                       => $qrcode,
            'seri'                         => $seri
        ];

        $this->db->insert('hasil_ujian', $input);

        $this->email_send($id_user);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Member baru berhasil di aktifasi</div>');
        redirect('administrator/member');
    }
    public function non_activate($id_user)
    {
        $this->db->update('user', ['is_active' => 0], ['id_user' => $id_user]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Member baru berhasil di nonaktifkan</div>');
        redirect('administrator/member');
    }

    public function store_new_test($id_user)
    {

        $seri = $this->User_exam_model->generateSeri();
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './public/'; //string, the default is application/cache/
        $config['errorlog']     = './public/'; //string, the default is application/logs/
        $config['imagedir']     = './public/qrcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
        $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
        $image_name = base_url() . '/validasi/get/' . $seri . '.png';
        $qrcode = $seri . '.png';
        $params['data'] = $image_name; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 256;
        $params['savename'] = FCPATH . $config['imagedir'] .   $qrcode; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
        $data = [
            'user_id'               => $id_user,
            'listening_status'      => 0,
            'reading_status'        => 0,
            'writing_status'        => 0,
            'speaking_status'       => 0,
            'listening_band'        => 0,
            'reading_band'          => 0,
            'writing_band'          => 0,
            'speaking_band'         => 0,
            'ielts_band'            => 0,
            'start_date'            => null,
            'finish_date'           => null,
            'qrcode'                => $qrcode,
            'seri'                  => $seri,
            'status'                => 0
        ];
        $this->User_exam_model->create($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Create test success</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function add_test($id_user)
    {

        $user               = $this->db->get_where('user', ['id_user' => $id_user])->row();
        $soal               = $this->Ujian_model->getSoal(7466);
        $soalListening      = $this->Ujian_model->getSoalById(1);
        $soalWriting        = $this->Ujian_model->getSoalById(2);
        $soalReading        = $this->Ujian_model->getSoalById(3);
        $soal_urut_ok     = array();
        $i = 0;
        foreach ($soal as $s) {
            $soal_per = new stdClass();
            $soal_per->id_soal         = $s->id_soal;
            $soal_per->soal         = $s->soal;
            $soal_per->opsi_a         = $s->opsi_a;
            $soal_per->opsi_b         = $s->opsi_b;
            $soal_per->opsi_c         = $s->opsi_c;
            $soal_per->opsi_d         = $s->opsi_d;
            $soal_per->jawaban         = $s->jawaban;
            $soal_urut_ok[$i]         = $soal_per;
            $i++;
        }
        $soal_urut_ok     = $soal_urut_ok;
        $list_id_soal    = "";
        $list_jw_soal     = "";
        $list_id_soal1    = "";
        $list_jw_soal1     = "";
        $list_id_soal2    = "";
        $list_jw_soal2     = "";
        $list_id_soal3    = "";
        $list_jw_soal3     = "";

        if (!empty($soal)) {
            foreach ($soal as $d) {
                $list_id_soal .= $d->id_soal . ",";
                $list_jw_soal .= $d->id_soal . "::N,";
            }
        }
        if (!empty($soalListening)) {
            foreach ($soalListening as $d) {
                $list_id_soal1 .= $d->id_soal . ",";
                $list_jw_soal1 .= $d->id_soal . "::N,";
            }
        }

        if (!empty($soalWriting)) {
            foreach ($soalWriting as  $dw) {
                $list_id_soal2 .= $dw->id_soal . ",";
                $list_jw_soal2 .= $dw->id_soal . "::N,";
            }
        }

        if (!empty($soalReading)) {
            foreach ($soalReading as  $dr) {
                $list_id_soal3 .= $dr->id_soal . ",";
                $list_jw_soal3 .= $dr->id_soal . "::N,";
            }
        }
        $list_id_soal     = substr($list_id_soal, 0, -1);
        $list_jw_soal     = substr($list_jw_soal, 0, -1);
        $list_id_soal1     = substr($list_id_soal1, 0, -1);
        $list_jw_soal1     = substr($list_jw_soal1, 0, -1);
        $list_id_soal2     = substr($list_id_soal2, 0, -1);
        $list_jw_soal2     = substr($list_jw_soal2, 0, -1);
        $list_id_soal3     = substr($list_id_soal3, 0, -1);
        $list_jw_soal3     = substr($list_jw_soal3, 0, -1);

        //qrcode
        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
        $seri = $this->Ujian_model->getSerial();
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './public/'; //string, the default is application/cache/
        $config['errorlog']     = './public/'; //string, the default is application/logs/
        $config['imagedir']     = './public/newqr/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
        $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
        $image_name = 'https://toeflgoldenenglish.com/validasi/get/' . $seri . '.png';
        $qrcode = $seri . '.png';
        $params['data'] = $image_name; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 256;
        $params['savename'] = FCPATH . $config['imagedir'] .   $qrcode; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE


        $input = [
            'ujian_id'                      => 7466,
            'user_id'                       => $user->id_user,
            'list_soal'                     => $list_id_soal,
            'list_jawaban'                  => $list_jw_soal,
            'list_soal_listening'           => $list_id_soal1,
            'list_jawaban_listening'        => $list_jw_soal1,
            'list_soal_writing'             => $list_id_soal2,
            'list_jawaban_writing'          => $list_jw_soal2,
            'list_soal_reading'             => $list_id_soal3,
            'list_jawaban_reading'          => $list_jw_soal3,
            'jml_benar'                     => 0,
            'nilai'                         => 0,
            'tgl_mulai'                     => null,
            'tgl_selesai'                   => null,
            'status'                        => 'Y',
            'qrcode'                        => $qrcode,
            'seri'                          => $seri
        ];

        $this->db->insert('hasil_ujian', $input);
        $this->email_send($id_user);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Test baru berhasil di tambahkan</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_test($id)
    {
        $this->db->delete('user_exam', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete test success</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function reset_test($id)
    {
        $data = [
            'listening_status'      => 0,
            'reading_status'        => 0,
            'writing_status'        => 0,
            'speaking_status'       => 0,
            'listening_band'        => 0,
            'reading_band'          => 0,
            'writing_band'          => 0,
            'speaking_band'         => 0,
            'ielts_band'            => 0,
            'start_date'            => null,
            'finish_date'           => null,
            'status'                => 0
        ];
        $this->db->update('user_exam', $data, ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Reset test success</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function print($id = null)
    {
        if ($id == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Hasil tes tidak di temukan!</div>');
            redirect('tes/list');
        }
        $this->load->library('Pdf');
        $data['hasil_ujian']    = $this->Ujian_model->get_hasil_ujian($id)->row();
        $data['ujian']          = $this->Ujian_model->getUjianById(7466);
        // var_dump($data['hasil_ujian']);
        // die;
        $this->load->view('administrator/member/cetak', $data);
    }

    public function import($import_data = null)
    {
        if ($import_data != null) $data['import'] = $import_data;
        $this->template->admin('administrator/member/import', 'Import Member', $data);
    }


    public function send_email($id)
    {
        $member     = $this->Member_model->get_by_id($id)->row();
        $ujian     = $this->db->get('ujian')->row();
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $from = "noreply@toeflgoldenenglish.com";
        $to = $member->email;
        $subject = "Account TOEFL Test";
        $message = "Informasi Akun \r\n\r\nEMAIL :$member->email \r\nPassword : $member->phone \r\nTOKEN Test : $ujian->token";
        $headers = "From:" . $from;
        mail($to, $subject, $message, $headers);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Email berhasil terkirim</div>');
        redirect('administrator/member');
    }

    public function kirim()
    {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        mail("toeflgolden@gmail.com", "My subject", 'tes');
    }
    public function email_send($id)
    {
        $member     = $this->Member_model->get_by_id($id)->row();
        $ujian     = $this->db->get('ujian')->row();
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $from = "noreply@toeflgoldenenglish.com";
        $to = $member->email;
        $subject = "Account TOEFL Test";
        $message = "Informasi Akun \r\n\r\nEMAIL :$member->email \r\nPassword : $member->phone \r\nTOKEN Test : $ujian->token";
        $headers = "From:" . $from;
        mail($to, $subject, $message, $headers);
    }
}
