<?php defined('BASEPATH') or exit('No direct script access allowed');
class level extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_topik');
    }
    public function index()
    {
        $data['level']     = $this->m_topik->tampil_level()->result();
        $this->load->view('content/pegawai/admin/level/tampil_level', $data);
    }

    public function tambah_level()
    {
        $data['level']     = $this->m_topik->tampil_level()->result();
        $this->load->view('content/pegawai/admin/level/tambah_level', $data);
    }

    public function generate_level()
    {
        $cek = $this->db->query("SELECT tm_level_id from tm_level ORDER BY tm_level_id DESC limit 1");
        $jumlah = $cek->num_rows();
        foreach ($cek->result() as $ck) {
            $tm_level_id = $ck->tm_level_id;
        }

        if ($jumlah <> 0) {
            $kode = intval($tm_level_id) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 6, "0", STR_PAD_LEFT);

        $tm_level_nama     = $this->input->post('tm_level_nama');

        $data = array(

            'tm_level_id'        => $kodemax,
            'tm_level_nama'     => $tm_level_nama,

        );
        $this->m_topik->tambah_data($data, 'tm_level');
        redirect('admin/level');
    }
    public function edit($tm_level_id)
    {
        $where = array('tm_level_id' => $tm_level_id);
        $data['level'] = $this->m_topik->edit_topik($where, 'tm_level')->result();
        $this->load->view('content/pegawai/Admin/level/update_level', $data);
    }
    public function hapus($tm_level_id)
    {
        $where = array('tm_level_id' => $tm_level_id);
        $this->m_topik->delete_data($where, 'tm_level');
        redirect('Admin/level/index');
    }

    public function update()
    {
        $tm_level_id = $this->input->post('tm_level_id');
        $tm_level_nama = $this->input->post('tm_level_nama');


        $data = array(

            'tm_level_nama' => $tm_level_nama,

        );
        $where = array(
            'tm_level_id' => $tm_level_id
        );

        $this->m_topik->update_data($where, $data, 'tm_level');
        redirect('Admin/level/index');
    }
}
