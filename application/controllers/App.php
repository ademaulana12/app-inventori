<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Database_model', 'data');
    $id_user = $this->session->userdata('id_user');
    if (empty($id_user)) {
      redirect('login');
    }
  }

  public function dashboard()
  {
    $data['nama_lengkap'] = $this->session->userdata('nama_lengkap');

    // Load Page
    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('dashboard', $data);
    $this->load->view('template/footer', $data);
  }

  public function semua_barang()
  {
    $data['data_barang'] = $this->data->show_all_data('tb_barang')->result_array();

    // Load Page
    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('barang/semua_barang', $data);
    $this->load->view('template/footer', $data);
  }

  public function barang_masuk()
  {
    // Load Page
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('template/sidebar');
    $this->load->view('barang/barang_masuk');
    $this->load->view('template/footer');
  }

  public function barang_keluar()
  {
    // Load Page
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('template/sidebar');
    $this->load->view('barang/barang_keluar');
    $this->load->view('template/footer');
  }

  public function suplier()
  {
    $data['id_suplier'] = 'SUP-' . rand(111111111, 999999999);
    $data['data_suplier'] = $this->data->show_all_data('tb_suplier')->result_array();
    // Load Page
    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('suplier/data_suplier', $data);
    $this->load->view('template/footer', $data);
  }

  public function pengaturan_akun()
  {
    $data['id_akun'] = rand(111111, 999999);
    $data['data_akun'] = $this->data->show_all_data('tb_login')->result_array();
    $data['data_akun_pending'] = $this->data->show_all_data('tb_akun')->result_array();

    // Load Page
    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('pengaturan/pengaturan_akun', $data);
    $this->load->view('template/footer', $data);
  }

  public function pengaturan_barang()
  {
    $data['kode_barang'] = 'BRG-' . rand(111111111, 999999999);
    $data['id_kategori'] = rand(111111, 999999);
    $data['data_kategori'] = $this->data->show_all_data('tb_kategori_barang')->result_array();
    $data['data_suplier'] = $this->data->show_all_data('tb_suplier')->result_array();


    // Load Page
    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('pengaturan/pengaturan_barang', $data);
    $this->load->view('template/footer', $data);
  }
}


/* End of file App.php */
/* Location: ./application/controllers/App.php */