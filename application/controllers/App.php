<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller App
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class App extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function dashboard()
  {
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('template/sidebar');
    $this->load->view('dashboard');
    $this->load->view('template/footer');
  }

  public function semua_barang()
  {
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('template/sidebar');
    $this->load->view('barang/semua_barang');
    $this->load->view('template/footer');
  }

  public function barang_masuk()
  {
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('template/sidebar');
    $this->load->view('barang/barang_masuk');
    $this->load->view('template/footer');
  }

  public function barang_keluar()
  {
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('template/sidebar');
    $this->load->view('barang/barang_keluar');
    $this->load->view('template/footer');
  }

  public function suplier()
  {
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('template/sidebar');
    $this->load->view('suplier/data_suplier');
    $this->load->view('template/footer');
  }

  public function pengaturan_akun()
  {
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('template/sidebar');
    $this->load->view('pengaturan/pengaturan_akun');
    $this->load->view('template/footer');
  }

  public function pengaturan_barang()
  {
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('template/sidebar');
    $this->load->view('pengaturan/pengaturan_barang');
    $this->load->view('template/footer');
  }
}


/* End of file App.php */
/* Location: ./application/controllers/App.php */