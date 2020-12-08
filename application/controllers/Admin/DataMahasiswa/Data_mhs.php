<?php defined('BASEPATH') or exit('No direct script access allowed');
class Data_mhs extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('m_data_admin');
    }

    public function index()
    {
        // $query = $this->db->get_where('tm_login', ['tm_login_username' => $this->session->userdata("username")])->row_array();
        // $query_pegawai_id = $query['tm_mahasiswa_id'];
        // $pgw = $this->db->get_where('tm_mahasiswa', ['tm_mahasiswa_id' => $query_pegawai_id])->row_array();
        // $data['pegawai_nama'] = $pgw['tm_mahasiswa_nama'];
        $this->db->join('tm_login', 'tm_login.tm_pegawai_id = tm_pegawai.tm_pegawai_id');
        $this->db->where('tm_login.tm_login_username', $this->session->userdata("username"));
        $data['pegawai'] = $this->db->get('tm_pegawai')->row_array();
        ///////////////////////////////////////////////////////////////////
        $data['tm_mahasiswa'] = $this->db->query('SELECT * FROM tm_mahasiswa INNER JOIN tm_login USING(tm_mahasiswa_id)')->result();
        $this->template->views('content/pegawai/Admin/crud/data_mhs', $data);
    }

    public function edit($tm_mahasiswa_id)
    {
        $this->db->join('tm_login', 'tm_login.tm_pegawai_id = tm_pegawai.tm_pegawai_id');
        $this->db->where('tm_login.tm_login_username', $this->session->userdata("username"));
        $data['pegawai'] = $this->db->get('tm_pegawai')->row_array();
        ///////////////////////////////////////////////////////////////
        $where = array('tm_mahasiswa_id' => $tm_mahasiswa_id);
        $data['mhs'] = $this->m_data_admin->edit_data($where, 'tm_mahasiswa JOIN tm_login USING(tm_mahasiswa_id)')->row_array();

        $this->template->views('content/pegawai/Admin/crud/edit_mhs', $data);
    }

    public function hapus($tm_mahasiswa_id)
    {
        $data = $this->db->get_where('tm_mahasiswa', ['tm_mahasiswa_id' => $tm_mahasiswa_id])->row_array();

        $path = './upload/';

        $where = array('tm_mahasiswa_id' => $tm_mahasiswa_id);
        $this->m_data_admin->hapus_data($where, 'tm_mahasiswa');

        @unlink($path . $data['tm_mahasiswa_foto']);

        redirect('Admin/DataMahasiswa/Data_mhs/index');
    }

    public function update()
    {

        $path = './upload/';

        $nama_file = "file_" . time(); //nama file + fungsi time
        $config['upload_path'] = './upload/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nama_file; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $tm_mahasiswa_id = $this->input->post('tm_mahasiswa_id');
                $tm_login_id = $this->input->post('tm_login_id');
                $tm_mahasiswa_foto = $this->upload->data("file_name");

                $data = array(
                    'tm_mahasiswa_foto' => $tm_mahasiswa_foto,
                    'tm_mahasiswa_id' => $tm_mahasiswa_id,
                    'tm_mahasiswa_nim' => $this->input->post('tm_mahasiswa_nim'),
                    'tm_mahasiswa_nama' => $this->input->post('tm_mahasiswa_nama'),
                    'tm_mahasiswa_jurusan' => $this->input->post('tm_mahasiswa_jurusan'),
                    'tm_mahasiswa_prodi' => $this->input->post('tm_mahasiswa_prodi'),
                    'tm_mahasiswa_semester' => $this->input->post('tm_mahasiswa_semester'),
                    'tm_mahasiswa_tanggal_lahir' => $this->input->post('tm_mahasiswa_tanggal_lahir'),
                    'tm_mahasiswa_email' => $this->input->post('tm_mahasiswa_email'),
                    'tm_mahasiswa_telp' => $this->input->post('tm_mahasiswa_telp'),
                    'tm_mahasiswa_alamat' => $this->input->post('tm_mahasiswa_alamat')
                );

                $data1 = array(
                    'tm_login_id' => $tm_login_id,
                    'tm_login_username' => $this->input->post('tm_login_username'),
                    'tm_login_password' => $this->input->post('tm_login_password')
                );
                // var_dump($data); die;

                $where = array(
                    'tm_mahasiswa_id' => $tm_mahasiswa_id
                );
                $where1 = array(
                    'tm_login_id' => $tm_login_id
                );

                $this->m_data_admin->update_data($where, $data, 'tm_mahasiswa');
                $this->m_data_admin->update_data($where1, $data1, 'tm_login');

                // hapus foto pada direktori
                @unlink($path . $this->input->post('filelama'));

                redirect('Admin/DataMahasiswa/Data_mhs/index');
            } else {
                die("gagal update");
            }
        } else {
            echo "tidak masuk";
        }
    }

    public function input()
    {
        $this->load->library('upload');
        $nama_file = "file_" . time(); //nama file + fungsi time
        $config['upload_path'] = './upload/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nama_file; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if ($_FILES['foto']['name']); {
            if ($this->upload->do_upload('foto')) {
                $tm_mahasiswa_foto = $this->upload->data();
                $data = array(
                    'tm_mahasiswa_foto' => $tm_mahasiswa_foto['file_name'],
                    'tm_mahasiswa_nim' => $this->input->post('tm_mahasiswa_nim'),
                    'tm_mahasiswa_nama' => $this->input->post('tm_mahasiswa_nama'),
                    'tm_mahasiswa_jurusan' => $this->input->post('tm_mahasiswa_jurusan'),
                    'tm_mahasiswa_prodi' => $this->input->post('tm_mahasiswa_prodi'),
                    'tm_mahasiswa_semester' => $this->input->post('tm_mahasiswa_semester'),
                    'tm_mahasiswa_tanggal_lahir' => $this->input->post('tm_mahasiswa_nama'),
                    'tm_mahasiswa_email' => $this->input->post('tm_mahasiswa_email'),
                    'tm_mahasiswa_telp' => $this->input->post('tm_mahasiswa_telp'),
                    'tm_mahasiswa_alamat' => $this->input->post('tm_mahasiswa_alamat')
                );

                $this->m_data_admin->input_data($data, 'tm_mahasiswa'); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('Admin/DataMahasiswa/Data_mhs/tambah2'); //jika berhasil maka akan ditampilkan view upload
            } else {
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('Admin/DataMahasiswa/Data_mhs/tambah'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }

    public function input2()
    {
        $tm_mahasiswa_id = $this->input->post('tm_mahasiswa_id');
        $tm_login_username = $this->input->post('tm_login_username');
        $tm_login_password = $this->input->post('tm_login_password');
        $tm_user_access_id = $this->input->post('tm_user_access_id');

        $data = array(
            'tm_mahasiswa_id' => $tm_mahasiswa_id,
            'tm_login_username' => $tm_login_username,
            'tm_login_password' => $tm_login_password,
            'tm_user_access_id' => $tm_user_access_id
        );

        $this->m_data_admin->input_data($data, 'tm_login');
        redirect('Admin/DataMahasiswa/Data_mhs/index');
    }

    public function tambah()
    {
        $this->db->join('tm_login', 'tm_login.tm_pegawai_id = tm_pegawai.tm_pegawai_id');
        $this->db->where('tm_login.tm_login_username', $this->session->userdata("username"));
        $data['pegawai'] = $this->db->get('tm_pegawai')->row_array();
        //menampilkan tambah_mahasiswa
        $this->template->views('content/pegawai/Admin/crud/tambah_mhs', $data);
    }

    public function tambah2()
    {
        $this->db->join('tm_login', 'tm_login.tm_pegawai_id = tm_pegawai.tm_pegawai_id');
        $this->db->where('tm_login.tm_login_username', $this->session->userdata("username"));
        $data['pegawai'] = $this->db->get('tm_pegawai')->row_array();
        //menampilkan tambah_mahasiswa
        $data['tm_mahasiswa'] = $this->m_data_admin->max_data2();
        // $data['tm_mahasiswa']=$this->db->query('SELECT MAX(tm_mahasiswa_id) FROM tm_mahasiswa')->result();
        
        $this->template->views('content/pegawai/Admin/crud/tambah_mhs2', $data);
    }

    // fungsi untukupload image
    private function _uploadImage($name)
    {
        // konfigurasi
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
        $config['encrypt_name']         = TRUE; //Enkripsi nama yang terupload
        $config['overwrite']            = TRUE;
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_ext_tolower']     = TRUE;

        $this->load->library('upload', $config);

        // bila berhasil
        if ($this->upload->do_upload($name)) {
            // ambil nama file foto
            return $this->upload->data("file_name");
        } else {
            return "";
        }
    }
}
