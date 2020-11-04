<?php defined('BASEPATH') or exit('No direct script access allowed');
class Data_teknisi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data_admin');
    }

    public function index()
    {
        $this->db->join('tm_login', 'tm_login.tm_pegawai_id = tm_pegawai.tm_pegawai_id');
        $this->db->where('tm_login.tm_login_username', $this->session->userdata("username"));
        $data['pegawai'] = $this->db->get('tm_pegawai')->row_array();
        ///////////////////////////////////////////////////////////////////
        $data['tm_pegawai'] = $this->db->query('SELECT tm_pegawai_id, tm_pegawai_nip, tm_login_password, tm_pegawai_nama, tm_pegawai_email, tm_pegawai_no_telp, tm_pegawai_alamat, tm_pegawai_foto, tm_staff_label FROM tm_pegawai INNER JOIN tm_login USING(tm_pegawai_id) INNER JOIN tm_staff USING (tm_staff_id) WHERE tm_staff_id = 2')->result();
        $this->load->view('content/pegawai/adminlte/h_admin.php', $data);
        $this->load->view('content/pegawai/Admin/crud/data_teknisi', $data);
        $this->load->view("content/pegawai/adminlte/s_admin.php");
        $this->load->view("content/pegawai/adminlte/f_admin.php");
    }

    public function edit($tm_pegawai_id)
    {
        $this->db->join('tm_login', 'tm_login.tm_pegawai_id = tm_pegawai.tm_pegawai_id');
        $this->db->where('tm_login.tm_login_username', $this->session->userdata("username"));
        $data['pegawai'] = $this->db->get('tm_pegawai')->row_array();
        $where = array('tm_pegawai_id' => $tm_pegawai_id);
        $data['tm_pegawai'] = $this->m_data_admin->edit_data($where, 'tm_pegawai JOIN tm_login USING(tm_pegawai_id) JOIN tm_staff USING(tm_staff_id)')->result();

        $this->load->view('content/pegawai/adminlte/h_admin.php', $data);
        $this->load->view('content/pegawai/Admin/crud/edit_teknisi', $data);
        $this->load->view("content/pegawai/adminlte/s_admin.php");
        $this->load->view("content/pegawai/adminlte/f_admin.php");
    }

    public function hapus($tm_pegawai_id)
    {
        $data = $this->db->get_where('tm_pegawai', ['tm_pegawai_id' => $tm_pegawai_id])->row_array();

        $path = './upload/';

        $where = array('tm_pegawai_id' => $tm_pegawai_id);
        $this->m_data_admin->hapus_data($where, 'tm_pegawai');

        @unlink($path . $data['tm_pegawai_foto']);
        redirect('Admin/DataPegawai/Data_teknisi/index');
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
                $tm_pegawai_id = $this->input->post('tm_pegawai_id');
                $tm_login_id = $this->input->post('tm_login_id');
                $tm_pegawai_foto = $this->upload->data("file_name");

                $data = array(
                    'tm_pegawai_foto' => $tm_pegawai_foto,
                    'tm_pegawai_id' => $tm_pegawai_id,
                    'tm_pegawai_nip' => $this->input->post('tm_pegawai_nip'),
                    'tm_pegawai_nama' => $this->input->post('tm_pegawai_nama'),
                    'tm_pegawai_email' => $this->input->post('tm_pegawai_email'),
                    'tm_pegawai_no_telp' => $this->input->post('tm_pegawai_no_telp'),
                    'tm_pegawai_alamat' => $this->input->post('tm_pegawai_alamat'),
                    'tm_staff_id' => $this->input->post('tm_staff_id')
                );

                $data1 = array(
                    'tm_login_id' => $tm_login_id,
                    'tm_login_password' => $this->input->post('tm_login_password')
                );
                // var_dump($data); die;

                $where = array(
                    'tm_pegawai_id' => $tm_pegawai_id
                );
                $where1 = array(
                    'tm_login_id' => $tm_login_id
                );

                $this->m_data_admin->update_data($where, $data, 'tm_pegawai');
                $this->m_data_admin->update_data($where1, $data1, 'tm_login');

                // hapus foto pada direktori
                @unlink($path . $this->input->post('filelama'));

                redirect('Admin/DataPegawai/Data_teknisi/index');
            } else {
                die("gagal update");
            }
        } else {
            echo "tidak masuk";
        }
    }
    // public function update2(){
    //     $tm_login_id = $this->input->post('tm_login_id');
    //     $tm_login_username = $this->input->post('tm_login_username');
    //     $tm_login_password = $this->input->post('tm_login_password');

    //     $data = array(
    //         'tm_login_username' => $tm_login_username,
    //         'tm_login_password' => $tm_login_password
    //     );
    //     $where = array(
    //         'tm_login_id' => $tm_login_id
    //     );

    //     $this->data_admin_model->update_data($where,$data,'tm_login');
    //     redirect('Admin/DataPegawai/Data_teknisi/index');
    // }
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
                $tm_pegawai_foto = $this->upload->data();
                $data = array(
                    'tm_pegawai_foto' => $tm_pegawai_foto['file_name'],
                    'tm_pegawai_nip' => $this->input->post('tm_pegawai_nip'),
                    'tm_pegawai_nama' => $this->input->post('tm_pegawai_nama'),
                    'tm_pegawai_email' => $this->input->post('tm_pegawai_email'),
                    'tm_pegawai_no_telp' => $this->input->post('tm_pegawai_no_telp'),
                    'tm_pegawai_alamat' => $this->input->post('tm_pegawai_alamat'),
                    'tm_staff_id' => $this->input->post('tm_staff_id')
                );

                $this->m_data_admin->input_data($data, 'tm_pegawai'); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('Admin/DataPegawai/Data_teknisi/tambah2'); //jika berhasil maka akan ditampilkan view upload
            } else {
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('Admin/DataPegawai/Data_teknisi/tambah'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }

    public function input2()
    {
        $tm_pegawai_id = $this->input->post('tm_pegawai_id');
        $tm_login_username = $this->input->post('tm_login_username');
        $tm_login_password = $this->input->post('tm_login_password');
        $tm_user_access_id = $this->input->post('tm_user_access_id');

        $data = array(
            'tm_pegawai_id' => $tm_pegawai_id,
            'tm_login_username' => $tm_login_username,
            'tm_login_password' => $tm_login_password,
            'tm_user_access_id' => $tm_user_access_id
        );

        $this->m_data_admin->input_data($data, 'tm_login');
        redirect('Admin/DataPegawai/Data_teknisi/index');
    }

    public function tambah()
    {
        $this->db->join('tm_login', 'tm_login.tm_pegawai_id = tm_pegawai.tm_pegawai_id');
        $this->db->where('tm_login.tm_login_username', $this->session->userdata("username"));
        $data['pegawai'] = $this->db->get('tm_pegawai')->row_array();
        //menampilkan tambah_mahasiswa
        $this->load->view('content/pegawai/adminlte/h_admin.php', $data);
        $this->load->view('content/pegawai/Admin/crud/tambah_teknisi');
        $this->load->view("content/pegawai/adminlte/s_admin.php");
        $this->load->view("content/pegawai/adminlte/f_admin.php");
    }

    public function tambah2()
    {
        $this->db->join('tm_login', 'tm_login.tm_pegawai_id = tm_pegawai.tm_pegawai_id');
        $this->db->where('tm_login.tm_login_username', $this->session->userdata("username"));
        $data['pegawai'] = $this->db->get('tm_pegawai')->row_array();
        //menampilkan tambah_mahasiswa
        $data['tm_pegawai'] = $this->m_data_admin->max_data();
        // $data['tm_pegawai']=$this->db->query('SELECT MAX(tm_pegawai_id) FROM tm_pegawai')->result();
        $this->load->view('content/pegawai/adminlte/h_admin.php', $data);
        $this->load->view('content/pegawai/Admin/crud/tambah_teknisi2', $data);
        $this->load->view("content/pegawai/adminlte/s_admin.php");
        $this->load->view("content/pegawai/adminlte/f_admin.php");
    }
}
