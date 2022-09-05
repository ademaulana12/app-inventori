<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Insert
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

class Insert extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Database_model', 'data');
    }
    /**
     * Pesan error
     */
    public function message($type, $title)
    {
        $message_alert = "
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000
            });

            Toast.fire({
                icon: '" . $type . "',
                title: '" . $title . "',
            });
            ";
        return $message_alert;
    }

    /**
     * Function Tambah Akun
     */
    public function account()
    {
        // Name table database
        $table = 'tb_akun';

        // Set data 
        $data = [
            'id_user' => rand(111111, 999999),
            'id_akun' => htmlspecialchars($this->input->post('id_akun')),
            'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap')),
            'username' => htmlspecialchars($this->input->post('username')),
            'password' => htmlspecialchars($this->input->post('password')),
            'hak_akses' => htmlspecialchars($this->input->post('hak_akses')),
            'status' => 'pending',
        ];
        // Set variabel insert data
        $insert = $this->data->insert_data($table, $data);
        // var_dump($insert);
        // Send message 
        if ($insert) {
            $this->session->set_flashdata('message', $this->message('success', 'Berhasil membuat akun'));
            redirect('app/pengaturan_akun');
        } else {
            $this->session->set_flashdata('message', $this->message('error', 'Gagal membuat akun'));
            redirect('app/pengaturan_akun');
        }
    }

    /**
     * Function Aktivasi Akun
     */
    public function move_data($id_user, $nama_lengkap, $username, $password, $hak_akses)
    {
        $table = 'tb_login';
        $data = [
            'id_user' => $id_user,
            'nama_lengkap' => str_replace('%20', ' ', $nama_lengkap),
            'username' => $username,
            'password' => $password,
            'hak_akses' => $hak_akses,
            'status' => 'active',
        ];
        $move = $this->data->insert_data($table, $data);
        if ($move) {
            $this->db->where(['id_user' => $id_user]);
            $this->db->delete('tb_akun');
            $this->session->set_flashdata('message', $this->message('success', 'Berhasil update akun'));
            redirect('app/pengaturan_akun');
        } else {
            $this->session->set_flashdata('message', $this->message('error', 'Gagal update akun'));
            redirect('app/pengaturan_akun');
        }
    }

    /**
     * Function tambah kategori
     */
    public function tambah_kategori()
    {
        $table = 'tb_kategori_barang';
        $data = [
            'id_kategori' => htmlspecialchars($this->input->post('id_kategori')),
            'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori'))
        ];
        $insert = $this->data->insert_data($table, $data);
        if ($insert) {
            $this->session->set_flashdata('message', $this->message('success', 'Berhasil tambah kategori barang'));
            redirect('app/pengaturan_barang');
        } else {
            $this->session->set_flashdata('message', $this->message('error', 'Gagal tambah kategori barang'));
            redirect('app/pengaturan_barang');
        }
    }

    /**
     * Function tambah kategori
     */
    public function tambah_barang()
    {
        $table = 'tb_barang';

        $data = [
            'kode_barang' => htmlspecialchars($this->input->post('kode_barang')),
            'nama_barang' => htmlspecialchars($this->input->post('nama_barang')),
            'merk_barang' => htmlspecialchars($this->input->post('merk_barang')),
            'kategori_barang' => htmlspecialchars($this->input->post('kategori_barang')),
            'kondisi_barang' => htmlspecialchars($this->input->post('kondisi_barang')),
            'suplier_barang' => htmlspecialchars($this->input->post('suplier_barang')),
        ];
        $insert = $this->data->insert_data($table, $data);
        if ($insert) {
            $this->session->set_flashdata('message', $this->message('success', 'Berhasil tambah kategori barang'));
            redirect('app/pengaturan_barang');
        } else {
            $this->session->set_flashdata('message', $this->message('error', 'Gagal tambah kategori barang'));
            redirect('app/pengaturan_barang');
        }
    }
    public function test_barcode_generator($barcode)
    {
        // $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
        $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
        echo $generator->getBarcode($barcode, $generator::TYPE_CODE_128);
    }

    /**
     * Function tambah kategori
     */
    public function tambah_suplier()
    {
        $table = 'tb_suplier';
        $data = [
            'id_suplier' => htmlspecialchars($this->input->post('id_suplier')),
            'nama_suplier' => htmlspecialchars($this->input->post('nama_suplier')),
            'nomor_telepon' => htmlspecialchars($this->input->post('nomor_telepon')),
            'alamat_suplier' => htmlspecialchars($this->input->post('alamat_suplier'))
        ];
        $insert = $this->data->insert_data($table, $data);
        if ($insert) {
            $this->session->set_flashdata('message', $this->message('success', 'Berhasil menambahkan suplier'));
            redirect('app/suplier');
        } else {
            $this->session->set_flashdata('message', $this->message('error', 'Gagal menambahkan suplier'));
            redirect('app/suplier');
        }
    }

    /**
     * Function Delete
     */
    public function delete($id_user)
    {
        $this->db->where(['id_user' => $id_user]);
        $this->db->delete('tb_login');
    }
}


/* End of file Insert.php */
/* Location: ./application/controllers/Insert.php */