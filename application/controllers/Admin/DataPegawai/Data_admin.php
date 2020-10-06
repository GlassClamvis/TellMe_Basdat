<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');
class Data_admin extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('data_admin_model');
    }

    public function index(){
        $data['tm_pegawai']$this->data_admin_model->getAll()->result();
        $this->template->views('Admin/crud/data_admin', $data);
    }

    public function edit($tm_pegawai_id){
        $where = array('$tm_pegawai_id' => $tm_pegawai_id);
        $data['tm_pegawai'] = $this->data_admin_model->edit_data($where, 'tm_pegawai')->result();
        $this->template->views('crud/edit_admin',$data);
    }
    public function hapus($tm_pegawai_id){
        $where = array('tm_pegawai_id' => $tm_pegawai_id);
        $this->data_admin_model->hapus_data($where,'tm_pegawai_id');
        redirect('Data_admin/index');
    }

    public function update(){
        $tm_pegawai_id = $this->input->post('tm_pegawai_id');
        $tm_pegawai_nip = $this->input->post('tm_pegawai_nip');
        $tm_pegawai_nama = $this->input->post('tm_pegawai_nama');
        $tm_pegawai_email = $this->input->post('tm_pegawai_email');
        $tm_pegawai_no_telp = $this->input->post('tm_pegawai_no_telp');
        $tm_pegawai_alamat = $this->input->post('tm_pegawai_alamat');
        $tm_pegawai_foto = $this->input->post('tm_pegawai_foto');

        $data = array(
            'tm_pegawai_nip' => $tm_pegawai_nip,
            'tm_pegawai_nama' => $tm_pegawai_nama,
            'tm_pegawai_email' => $tm_pegawai_email,
            'tm_pegawai_no_telp' => $tm_pegawai_no_telp,
            'tm_pegawai_alamat' => $tm_pegawai_alamat,
            'tm_pegawai_foto' => $tm_pegawai_foto
        );

        $where = array(
            'tm_pegawai_admin' => $tm_pegawai_admin
        );

        $this->Admin_model->update_data($where,$data,'tm_pegawai');
        redirect('Data_admin');
    }
    public function input(){
        $tm_pegawai_id = $this->input->post('tm_pegawai_id');
        $tm_pegawai_nip = $this->input->post('tm_pegawai_nip');
        $tm_pegawai_nama = $this->input->post('tm_pegawai_nama');
        $tm_pegawai_email = $this->input->post('tm_pegawai_email');
        $tm_pegawai_no_telp = $this->input->post('tm_pegawai_no_telp');
        $tm_pegawai_alamat = $this->input->post('tm_pegawai_alamat');
        $tm_pegawai_foto = $this->input->post('tm_pegawai_foto');
        $tm_staff_label = $this->input->post('tm_staff_label');

        $data = array(
            'tm_pegawai_nip' => $tm_pegawai_nip,
            'tm_pegawai_nama' => $tm_pegawai_nama,
            'tm_pegawai_email' => $tm_pegawai_email,
            'tm_pegawai_no_telp' => $tm_pegawai_no_telp,
            'tm_pegawai_alamat' => $tm_pegawai_alamat,
            'tm_pegawai_foto' => $tm_pegawai_foto,
            'tm_staff_label' => $tm_staff_label
        );

        $this->data_admin_model->input_data($data,'tm_pegawai');
        redirect('admin/index');
    }
    public function tambah(){
        //menampilkan tambah_mahasiswa
        $this->template->views('crud/tambah_admin');
    }

}