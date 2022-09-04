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

    public function delete($id_user)
    {
        $this->db->where(['id_user' => $id_user]);
        $this->db->delete('tb_login');
    }
}


/* End of file Insert.php */
/* Location: ./application/controllers/Insert.php */