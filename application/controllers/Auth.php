<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('auth/form_login');
            // $this->load->view('templates_admin/footer');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $cek = $this->kpr_model->cek_login($username, $password);

            if ($cek == false) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert"> Login dulu biar Jongjons
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span> 
                    <span class="sr-only">Close</span>
                </button>
               
            </div> ');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('nama', $cek->nama);
                $this->session->set_userdata('id_customer', $cek->id_customer);
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('role_id', $cek->role_id);

                switch ($cek->role_id) {
                    case 1:
                        $this->session->set_flashdata('pesan1', '<div class="alert alert-primary alert-dismissible fade show" role="alert"> Login dulu biar Jongjons
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span> 
                            <span class="sr-only">Close</span>
                        </button>
                       
                    </div> ');
                        redirect('admin/dashboard');
                        break;
                    case 2:
                        $this->session->set_flashdata('flash', 'Login  Berhasil !!');
                        redirect('customer/dashboard');
                        break;

                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('customer/dashboard');
    }

    public function ganti_password()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('auth/form_gantipass');
        $this->load->view('templates_admin/footer');
    }
    public function ganti_password_aksi()
    {
        $pass_baru = $this->input->post('pass_baru');
        $ulang_pass = $this->input->post('ulang_pass');

        $this->form_validation->set_rules('pass_baru', 'Password baru', 'required|matches[ulang_pass]');
        $this->form_validation->set_rules('ulang_pass', 'Ulangi password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('auth/form_gantipass');
            $this->load->view('templates_admin/footer');
        } else {
            $data = array('password' => md5($pass_baru));
            $id = array('id_customer' => $this->session->userdata('id_customer'));



            $this->kpr_model->ganti_password($id, $data, 'customer');



            $this->session->set_flashdata('flash', 'Password berhasil di ganti silahkan Login   !!');

            redirect('auth/login');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', 'trims');
        $this->form_validation->set_rules('password', 'Password', 'required', 'trims');
    }
}
