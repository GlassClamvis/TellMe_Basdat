<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function lupa_password()
    {

        $this->form_validation->set_rules('nim', 'NIM,', 'required|trim', [
            'required' => 'Nim tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('email', 'Email,', 'required|trim|valid_email', [
            'required' => 'Email tidak boleh kosong!'
        ]);

        if ($this->form_validation->run() == false) {

            // $data['title'] = 'Lupa Password';

            $this->load->view('content/v_lupa_password');
        } else {
            $nim = $this->input->post('nim');
            $email = $this->input->post('email');
            $id_mahasiswa = $this->db->get('tm_login');
            $user = $this->db->get_where('tm_mahasiswa', ['tm_mahasiswa_email' => $email])->row_array();
            $user = $this->db->get_where('tm_mahasiswa', ['tm_mahasiswa_nim' => $nim])->row_array();
            // $user = $this->db->get_where('tm_pegawai', ['tm_pegawai_email' => $email])->row_array();
            // $user = $this->db->get_where('tm_pegawai', ['tm_pegawai_nip' => $nim])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [

                    'tm_forgot_password_link' => $token
                ];

                // $this->db->insert('tm_forgot_password', $user_token);

                $this->_sendEmail($token);

                $this->session->set_flashdata('message', '<div class="alert 
                alert-success" role="alert">Berhasil! Tautan akan dikirimkan melalui email anda. Silahkan cek email anda untuk melanjutkan ke halaman reset password melalui tautan tersebut. Tautan berlaku 1x24 jam!</div>');
                redirect('auth/lupa_password');

                // $this->db->insert('tm_forgot_password', $user_token);
            } else {
                $this->session->set_flashdata('message', '<div class="alert 
            alert-danger" role="alert">NIM atau Email tidak terdaftar!</div>');
                redirect('auth/lupa_password');
            }
        }
    }

    private function _sendEmail()
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'cb.tellme909@gmail.com',
            'smtp_pass' => 'tellme1212',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"

        ];

        $this->email->initialize($config);

        $this->email->from('noreply@gmail.com', 'Tellme Basdat');
        $this->email->to($this->input->post('email', 'nim'));
        $this->email->subject('Reset Password');
        $this->email->message('Klik disini untuk ganti password : <a
        href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&nim=' . $this->input->post('nim') . '"> Reset Password</a>');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function resetPassword()
    {
        $email = $this->input->get('email');
        $nim = $this->input->get('nim');
        // $token = $this->input->get('token')

        $user = $this->db->get_where('tm_mahasiswa', ['tm_mahasiswa_email' => $email])->row_array();
        $user = $this->db->get_where('tm_mahasiswa', ['tm_mahasiswa_nim' => $nim])->row_array();
        // $user = $this->db->get_where('tm_pegawai', ['tm_pegawai_email' => $email])->row_array();
        // $user = $this->db->get_where('tm_pegawai', ['tm_pegawai_nip' => $nim])->row_array();

        if ($user) {
            $vall = $this->db->get_where('tm_mahasiswa', ['tm_mahasiswa_email' => $email])->row_array();
            $vall = $this->db->get_where('tm_mahasiswa', ['tm_mahasiswa_nim' => $nim])->row_array();
            // $vall = $this->db->get_where('tm_pegawai', ['tm_pegawai_email' => $email])->row_array();
            // $vall = $this->db->get_where('tm_pegawai', ['tm_pegawai_nip' => $nim])->row_array();

            if ($vall) {
                $this->session->set_userdata('reset_email', $email);
                $this->session->set_userdata('nimget', $nim);
                $this->ubahPassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert 
            alert-danger" role="alert">Reset password gagal. Email tidak terdaftar!</div>');
                redirect('auth/lupa_password');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert 
            alert-danger" role="alert">Reset password gagal. Email tidak terdaftar!</div>');
            redirect('auth/lupa_password');
        }
    }

    public function ubahPassword()
    {
        $id = $this->db->get_where('tm_login', 'tm_mahasiswa_id')->row_array();
        $email = $this->session->userdata('reset_email');
        $nim = $this->session->userdata('nimget');

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[6]|matches[password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('content/v_ubah_password');
        } else {
            $id = $this->db->get_where('tm_login', 'tm_mahasiswa_id')->row_array();
            // $password = password_hash($this->input->post('password1', true), PASSWORD_DEFAULT);
            $password = $this->input->post('password1', true);
            $nim = $this->session->userdata('nimget');
            $email = $this->session->userdata('reset_email');

            $this->db->set('tm_login_password', $password);
            $this->db->where('tm_login_username', $nim);
            $this->db->update('tm_login');

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert">Password berhasil diubah. Silahkan Login!</div>');
            redirect('auth/lupa_password');
        }
    }
}
