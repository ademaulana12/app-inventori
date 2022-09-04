<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Database_model', 'data');
    }

    public function index()
    {
        $this->load->view('login');
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

    public function proses()
    {
        $table = 'tb_login';
        $username = htmlspecialchars($this->input->post('username'));
        $password = $this->input->post('password');

        $data = $this->data->show_where_data($table, 'username', $username)->row_array();

        if ($data) {
            if ($data['username'] == $username) {
                if ($data['password'] == $password) {
                    if ($data['hak_akses'] == 1) {
                        # code...
                        $send_data = [
                            'id_user' => $data['id_user'],
                            'nama_lengkap' => $data['nama_lengkap'],
                            'username' => $data['username'],
                            'hak_akses' => $data['hak_akses']
                        ];
                        $this->session->set_flashdata('message', $this->message('success', 'Login Success, Selamat datang ' . $send_data['nama_lengkap']));
                        $this->session->set_userdata($send_data);
                        redirect('app/dashboard', $send_data);
                    } else {
                        $this->session->set_flashdata('message', $this->message('error', 'Login Failed ' . error_reporting()));
                        redirect('login');
                    }
                } else {
                    $this->session->set_flashdata('message', $this->message('error', 'Login Failed ' . error_reporting()));
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', $this->message('error', 'Login Failed ' . error_reporting()));
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', $this->message('error', 'Login Failed ' . error_reporting()));
            redirect('login');
        }
    }

    public function logout()
    {
        $account_data = $this->session->all_userdata();
        foreach ($account_data as $key) {
            if ($key != 'username' && $key != 'id_user') {
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();
        $this->session->set_flashdata('messageAlert', $this->message('success', 'Anda Berhasil Logout'));
        redirect('login');
    }
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */