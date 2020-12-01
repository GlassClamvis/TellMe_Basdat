<?php
defined('BASEPATH') or exit('No direct script access allowed');

class quiz extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['barang'] = $this->db->get('tm_quiz')->result_array();
        $data['user_session'] = $this->db->get_where('tm_pegawai', ['tm_pegawai_id' => $this->session->userdata('status_pegawai')])->row_array();
        $data['title'] = 'TellMe Basdat | Quiz Management';

        $this->load->view('content/pegawai/adminlte/h_admin.php');
        $this->load->view('content/pegawai/admin/quiz/quiz', $data);
        $this->load->view("content/pegawai/adminlte/s_admin.php");
        $this->load->view('content/pegawai/adminlte/f_admin');
    }

    public function detail($id)
    {
        // $data['judul'] = 'Dashboard';
        $data['barang'] = $this->db->get_where('tm_quiz', ['tm_quiz_id' => $id])->result_array();
        $data['id_detail_quiz'] = $id;
        $querys = $this->db->get_where('tm_quiz', ['tm_quiz_id' => $id])->row_array();
        $topik_id = $querys['tm_topik_id'];
        $query = $this->db->get_where('tm_topik', ['tm_topik_id' => $topik_id])->row_array();
        $data['level_id'] = $query['tm_level_id'];
        $data['topik_id'] = $query['tm_topik_id'];
        $data['user_session'] = $this->db->get_where('tm_pegawai', ['tm_pegawai_id' => $this->session->userdata('status_pegawai')])->row_array();
        $data['title'] = 'TellMe Basdat | Quiz Detail';

        $this->load->view('content/pegawai/adminlte/h_admin.php');
        $this->load->view('content/pegawai/admin/quiz/detail_quiz', $data);
        $this->load->view("content/pegawai/adminlte/s_admin.php");
        $this->load->view('content/pegawai/adminlte/f_admin');
    }

    public function add()
    {
        $data['title'] = 'Data Baru';

        $data['user_session'] = $this->db->get_where('tm_pegawai', ['tm_pegawai_id' => $this->session->userdata('status_pegawai')])->row_array();

        $this->form_validation->set_rules('topik_id', 'topik id', 'trim|required');
        $this->form_validation->set_rules('quiz_kode', 'kode quiz', 'trim|required');
        $this->form_validation->set_rules('quiz_label', 'quiz label', 'trim|required');
        $this->form_validation->set_rules('quiz_unlock', 'quiz poin to unlock', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('content/pegawai/adminlte/h_admin.php');
            $this->load->view('content/pegawai/admin/quiz/add_quiz', $data);
            $this->load->view("content/pegawai/adminlte/s_admin.php");
            $this->load->view('content/pegawai/adminlte/f_admin');
        } else {
            $data = [
                'tm_quiz_kode' => htmlspecialchars($this->input->post('quiz_kode', true)),
                'tm_quiz_label' => htmlspecialchars($this->input->post('quiz_label', true)),
                'tm_quiz_poin_unlock' => htmlspecialchars($this->input->post('quiz_unlock', true)),
                'tm_topik_id' => htmlspecialchars($this->input->post('topik_id', true)),
            ];
            $this->db->insert('tm_quiz',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('Admin/quiz');
        }
    }

    public function edit($id)
    {
        $data['id'] = $id;
        $data['user_session'] = $this->db->get_where('tm_pegawai', ['tm_pegawai_id' => $this->session->userdata('status_pegawai')])->row_array();
        $b = $this->db->get_where('tm_quiz', ['tm_quiz_id' => $id])->row_array();
        $data['quiz_kode'] = $b['tm_quiz_kode'];
        $data['quiz_label'] = $b['tm_quiz_label'];
        $data['quiz_unlock'] = $b['tm_quiz_poin_unlock'];

        $this->form_validation->set_rules('topik_id', 'topik id', 'trim|required');
        $this->form_validation->set_rules('quiz_kode', 'kode quiz', 'trim|required');
        $this->form_validation->set_rules('quiz_label', 'quiz label', 'trim|required');
        $this->form_validation->set_rules('quiz_unlock', 'quiz poin to unlock', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('content/pegawai/adminlte/h_admin', $data);
            $this->load->view('content/pegawai/admin/quiz/edit_quiz', $data);
            $this->load->view("content/pegawai/adminlte/s_admin.php");
            $this->load->view('content/pegawai/adminlte/f_admin');
        } else {
            $data = [
                'tm_quiz_kode' => htmlspecialchars($this->input->post('quiz_kode', true)),
                'tm_quiz_label' => htmlspecialchars($this->input->post('quiz_label', true)),
                'tm_quiz_poin_unlock' => htmlspecialchars($this->input->post('quiz_unlock', true)),
                'tm_topik_id' => htmlspecialchars($this->input->post('topik_id', true)),
            ];
            $this->db->where('tm_quiz_id', $id);
            $this->db->update('tm_quiz', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-outline alert-success">Data berhasil diubah!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('admin/quiz');
        }
    }

    public function delete($id)
    {
        $this->db->where('tm_quiz_id', $id);
        $this->db->delete('tm_quiz');
        redirect('admin/quiz');
    }
}

/* End of file Product.php */
/* Location: ./application/controllers/administrator/Product.php */
