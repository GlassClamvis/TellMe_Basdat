<?php
class Template
{
  protected $_ci;
  function __construct()
  {
    $this->_ci = &get_instance();
  }
  function home($template = NULL, $data = NULL)
  {
    $data['head'] = $this->_ci->load->view('templates/head', $data, TRUE);
    $data['header'] = $this->_ci->load->view('templates/header', $data, TRUE);
    $data['footer'] = $this->_ci->load->view('templates/footer', $data, TRUE);
    $data['theme'] = $this->_ci->load->view('templates/theme', $data, TRUE);
    $data['js'] = $this->_ci->load->view('templates/js', $data, TRUE);
    $this->_ci->load->view('content/v_index', $data);
  }

  function login($template = NULL, $data = NULL)
  {
    $data['head'] = $this->_ci->load->view('templates/head', $data, TRUE);
    $data['header'] = $this->_ci->load->view('templates/header', $data, TRUE);
    $data['footer'] = $this->_ci->load->view('templates/footer', $data, TRUE);
    $data['theme'] = $this->_ci->load->view('templates/theme', $data, TRUE);
    $data['js'] = $this->_ci->load->view('templates/js', $data, TRUE);
    $this->_ci->load->view('content/v_login', $data);
<<<<<<< HEAD
  }

  function Lupa_password($template = NULL, $data = NULL)
  {
    $data['head'] = $this->_ci->load->view('templates/head', $data, TRUE);
    $data['header'] = $this->_ci->load->view('templates/header', $data, TRUE);
    $data['footer'] = $this->_ci->load->view('templates/footer', $data, TRUE);
    $data['theme'] = $this->_ci->load->view('templates/theme', $data, TRUE);
    $data['js'] = $this->_ci->load->view('templates/js', $data, TRUE);
    $this->_ci->load->view('content/v_lupa_password', $data);
=======
  }

  function Lupa_password($template = NULL, $data = NULL)
  {
    $data['head'] = $this->_ci->load->view('templates/head', $data, TRUE);
    $data['header'] = $this->_ci->load->view('templates/header', $data, TRUE);
    $data['footer'] = $this->_ci->load->view('templates/footer', $data, TRUE);
    $data['theme'] = $this->_ci->load->view('templates/theme', $data, TRUE);
    $data['js'] = $this->_ci->load->view('templates/js', $data, TRUE);
    $this->_ci->load->view('content/v_lupa_password', $data);
  }

  function Student($template = NULL, $data = NULL) {
      $data['head'] = $this->_ci->load->view('templates/head', $data, TRUE);
      $data['header_mahasiswa'] = $this->_ci->load->view('templates/header_mahasiswa', $data, TRUE);
      $data['footer'] = $this->_ci->load->view('templates/footer', $data, TRUE);
      $data['js'] = $this->_ci->load->view('templates/js', $data, TRUE);
      $this->_ci->load->view('content/mahasiswa/v_mahasiswa', $data);
>>>>>>> e3f02991fb9a731be38fee296ff287488a2732fb
  }

  function views($template = NULL, $data = NULL)
  {
    if ($template != NULL) {
      // Bagian $data['head'] untuk memanggil file head.php dari folder Admin/_Template/
      // ['head'] data yang kita panggil dari file template.php dari folder Admin/_Template/
      $data['head'] = $this->_ci->load->view('templateadm/adminlte/h_admin', $data, TRUE);

      $data['topbar'] = $this->_ci->load->view('templateadm/adminlte/topbar_admin', $data, TRUE);

      $data['sidebar'] = $this->_ci->load->view('templateadm/adminlte/s_admin', $data, TRUE);

      $data['isi'] = $this->_ci->load->view($template, $data, TRUE);

      $data['content'] = $this->_ci->load->view('templateadm/adminlte/content', $data, TRUE);

      $data['footer'] = $this->_ci->load->view('templateadm/adminlte/f_admin', $data, TRUE);

      $data['js'] = $this->_ci->load->view('templateadm/adminlte/js', $data, TRUE);

      echo $data['template'] = $this->_ci->load->view('templateadm/Adminlte/Template', $data, TRUE);
    }
  }
  function viewsku($template = NULL, $data = NULL)
  {
    if ($template != NULL) {
      // Bagian $data['head'] untuk memanggil file head.php dari folder Admin/_Template/
      // ['head'] data yang kita panggil dari file template.php dari folder Admin/_Template/
      $data['head'] = $this->_ci->load->view('templateadm/dosenlte/h_dosen_teknisi', $data, TRUE);

      $data['topbar'] = $this->_ci->load->view('templateadm/dosenlte/topbar', $data, TRUE);

      $data['sidebar'] = $this->_ci->load->view('templateadm/dosenlte/s_dosen_teknisi', $data, TRUE);

      $data['isi'] = $this->_ci->load->view($template, $data, TRUE);

      $data['content'] = $this->_ci->load->view('templateadm/dosenlte/content', $data, TRUE);

      $data['footer'] = $this->_ci->load->view('templateadm/dosenlte/f_dosen_teknisi', $data, TRUE);

      $data['js'] = $this->_ci->load->view('templateadm/dosenlte/js', $data, TRUE);

      echo $data['template'] = $this->_ci->load->view('templateadm/dosenlte/Template', $data, TRUE);
    }
  }
  function viewskutek($template = NULL, $data = NULL)
  {
    if ($template != NULL) {
      // Bagian $data['head'] untuk memanggil file head.php dari folder Admin/_Template/
      // ['head'] data yang kita panggil dari file template.php dari folder Admin/_Template/
      $data['head'] = $this->_ci->load->view('templateadm/teknisilte/h_dosen_teknisi', $data, TRUE);

      $data['topbar'] = $this->_ci->load->view('templateadm/teknisilte/topbar', $data, TRUE);

      $data['sidebar'] = $this->_ci->load->view('templateadm/teknisilte/s_dosen_teknisi', $data, TRUE);

      $data['isi'] = $this->_ci->load->view($template, $data, TRUE);

      $data['content'] = $this->_ci->load->view('templateadm/teknisilte/content', $data, TRUE);

      $data['footer'] = $this->_ci->load->view('templateadm/teknisilte/f_dosen_teknisi', $data, TRUE);

      $data['js'] = $this->_ci->load->view('templateadm/teknisilte/js', $data, TRUE);

      echo $data['template'] = $this->_ci->load->view('templateadm/teknisilte/Template', $data, TRUE);
    }
  }
}
