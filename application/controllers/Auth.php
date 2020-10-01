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
            $email = $this->input->post('email');
            $user = $this->db->get_where('tm_mahasiswa', ['tm_mahasiswa_email' => $email])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
            } else {
                $this->session->set_flashdata('message', '<div class="alert 
            alert-danger" role="alert">Email tidak terdaftar!</div>');
                redirect('auth/lupa_password');
            }
            // token yg dikirim ke email
            $token = base64_encode(random_bytes(32));
            $tm_forgot_password = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->_sendEmail();

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert">Berhasil! Tautan akan dikirimkan melalui email anda. Silahkan cek email anda untuk melanjutkan ke halaman reset password melalui tautan tersebut. Tautan berlaku 1x24 jam!</div>');
            redirect('auth/lupa_password');
        }
    }

    private function _sendEmail()
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'cobaemail.tellme@gmail.com',
            'smtp_pass' => 'tellme1212',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"

        ];

        $this->email->initialize($config);


        $this->email->from('cobaemail.tellme@gmail.com', 'TellMe Basdat');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Reset Password');
        $this->email->message('Klik disini untuk ganti password : <a
        href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '"> Reset Password</a>');

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
        // $token = $this->input->get('token')

        $user = $this->db->get_where('tm_mahasiswa', ['tm_mahasiswa_email' => $email])->row_array();

        if ($user) {
            $this->ubahPassword();
        } else {
            $this->session->set_flashdata('message', '<div class="alert 
            alert-danger" role="alert">Reset password gagal. Email tidak terdaftar!</div>');
            redirect('auth/lupa_password');
        }
    }

    public function ubahPassword()
    {
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|
        min_legth[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|
        required|min_length[8]|matches[password1]');

        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Reset Password';
            $this->load->view('content/v_ubah_password');
        } else {
            $password = password_hash(
                $this->input->post('password1'),
                PASSWORD_DEFAULT
            );
            $email = $this->session->userdata('reset_email');

            $this->db->set('tm_login_password', $password);
            $this->db->update('tm_login');

            $this->session->set_flashdata('message', '<div class="alert 
            alert-succes" role="alert">Password berhasil diubah. Silahkan Login!</div>');
            redirect('auth/lupa_password');
        }
    }
}
