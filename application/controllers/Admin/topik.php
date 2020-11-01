<?php defined('BASEPATH') or exit('No direct script access allowed');
class topik extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_topik');
    }

    public function index()
    {
        $data['topik'] = $this->m_topik->tampil_topik()->result();
        $this->load->view('admin/topik/tampil_topik_sub_topik', $data);
    }

    public function tambah_topik()
    {
        $data['topik']     = $this->m_topik->tampil_topik()->result();
        $data['sub_topik'] = $this->m_topik->tampil_sub_topik()->result();
        $data['staff']     = $this->m_topik->tampil_pegawai()->result();
        $data['level']     = $this->m_topik->tampil_level()->result();
        $this->load->view('admin/topik/tambah_topik', $data);
    }

    public function tambah_sub_topik()
    {
        $data['topik'] = $this->m_topik->tampil_topik()->result();
        $data['sub_topik'] = $this->m_topik->tampil_sub_topik()->result();
        $data['staff'] = $this->m_topik->tampil_pegawai()->result();
        $data['level'] = $this->m_topik->tampil_level()->result();
        $this->load->view('admin/topik/tambah_sub_topik', $data);
    }

    public function edt_topik()
    {
        $a = $this->uri->segment('4');
        $data['data_hoki'] = $this->m_topik->data_topik($a);
        $this->load->view('admin/topik/update_topik', $data);
    }

    public function edt_sub_topik()
    {
        $a = $this->uri->segment('4');
        $data['data_sub_hoki'] = $this->m_topik->data_sub_topik($a);
        $this->load->view('admin/topik/update_sub_topik', $data);
    }

    public function generate_topik()
    {
        $cek    = $this->db->query("SELECT tm_topik_id from tm_topik ORDER BY tm_topik_id DESC limit 1");
        $jumlah = $cek->num_rows();
        foreach ($cek->result() as $ck) {
            $id_topik = $ck->tm_topik_id;
        }

        if ($jumlah <> 0) {
            $kode = intval($id_topik) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 6, "0", STR_PAD_LEFT);
        $tm_topik_nama      = $this->input->post('tm_topik_nama');
        $tm_pegawai_id      = $this->input->post('tm_pegawai_id');
        $tm_level_id        = $this->input->post('tm_level_id');
        $cek    = $this->db->query("SELECT tm_topik_poin_open from tm_topik ORDER BY tm_topik_poin_open DESC limit 1");
        $jumlah = $cek->num_rows();
        foreach ($cek->result() as $ck) {
            $id_poin = $ck->tm_topik_poin_open;
        }

        if ($jumlah <> 0) {
            $kode = intval($id_poin) + 1;
        } else {
            $kode = 1;
        }

        $kodemin = str_pad($kode, 6, "0", STR_PAD_LEFT);

        $data = array(

            'tm_topik_id'        => $kodemax,
            'tm_topik_nama'      => $tm_topik_nama,
            'tm_pegawai_id'      => $tm_pegawai_id,
            'tm_level_id'        => $tm_level_id,
            'tm_topik_poin_open' => $kodemin,

        );

        $this->m_topik->tambah_data($data, 'tm_topik');
        redirect('admin/topik/index');
    }

    public function generate_sub_topik()
    {
        $cek = $this->db->query("SELECT td_sub_topik_id from td_sub_topik ORDER BY td_sub_topik_id DESC limit 1");
        $jumlah = $cek->num_rows();
        foreach ($cek->result() as $ck) {
            $id_sub_topik = $ck->td_sub_topik_id;
        }

        if ($jumlah <> 0) {
            $kode = intval($id_sub_topik) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 6, "0", STR_PAD_LEFT);

        $td_sub_topik_title     = $this->input->post('td_sub_topik_title');
        $td_sub_topik_content   = $this->input->post('td_sub_topik_content');
        $tm_pegawai_id          = $this->input->post('tm_pegawai_id');
        $tm_topik_id            = $this->input->post('tm_topik_id');

        $data = array(

            'td_sub_topik_id'        => $kodemax,
            'td_sub_topik_title'     => $td_sub_topik_title,
            'td_sub_topik_content'   => $td_sub_topik_content,
            'tm_pegawai_id'          => $tm_pegawai_id,
            'tm_topik_id'            => $tm_topik_id,

        );
        $this->m_topik->tambah_data($data, 'td_sub_topik');
        redirect('admin/topik');
    }

    public function delete_data_topik($id)
    {
        $where = array('tm_topik_id' => $id);
        $this->m_topik->delete_data($where, 'tm_topik');
        redirect('admin/topik');
    }

    public function delete_data_sub_topik($id)
    {
        $where = array('td_sub_topik_id' => $id);
        $this->m_topik->delete_data($where, 'td_sub_topik');
        redirect('admin/topik');
    }

    public function update_topik()
    {
        $id                        = $this->input->post('tm_topik_id');
        $tm_topik_nama             = $this->input->post('tm_topik_nama');

        $data = array(

            'tm_topik_nama'        => $tm_topik_nama,

        );

        $where = array(
            'tm_topik_id'   => $id
        );

        $this->m_topik->update_data($where, $data, 'tm_topik');
        redirect('admin/topik');
    }
    public function update_sub_topik()
    {
        $id                      = $this->input->post('td_sub_topik_id');
        $td_sub_topik_title      = $this->input->post('td_sub_topik_title');
        $td_sub_topik_content    = $this->input->post('td_sub_topik_content');



        $data = array(

            'td_sub_topik_title'     => $td_sub_topik_title,
            'td_sub_topik_content'   => $td_sub_topik_content,

        );

        $where = array(
            'td_sub_topik_id'   => $id
        );

        $this->m_topik->update_data($where, $data, 'td_sub_topik');
        redirect('admin/topik');
    }

    public function detail_topik($tm_topik_id)
    {
        $this->load->model('m_topik');
        $data['sub_topik'] = $this->m_topik->tampil_sub_topik()->result();
        $detail = $this->m_topik->detail_data_topik($tm_topik_id);
        $data['detail_topik'] = $detail;
        $this->load->view('admin/topik/detail_topik', $data);
    }

    public function detail_sub_topik($td_sub_topik_id)
    {
        $this->load->model('m_topik');
        $detail = $this->m_topik->detail_data_sub_topik($td_sub_topik_id);
        $data['detail_sub_topik'] = $detail;
        $this->load->view('admin/topik/detail_sub_topik', $data);
    }
}
