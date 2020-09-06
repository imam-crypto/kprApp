<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function index()
    {


        $this->load->view('templates_admin/header');
        $this->load->view('auth/register_form');
        // $this->load->view('templates_admin/footer');
    }


    public function daftar()
    {

        $this->_rules();
        if ($this->form_validation == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('register_form');
            $this->load->view('templates_admin/footer');
        } else {
            $nama           = $this->input->post('nama');
            $username       = $this->input->post('username');
            $alamat         = $this->input->post('alamat');
            $jenis_kelamin  = $this->input->post('jenisKelamin');
            $no_telepon     = $this->input->post('no_telepon');
            $no_ktp         = $this->input->post('no_ktp');
            $password       = md5($this->input->post('password'));
            $role_id        = '2';

            $data = array(

                'nama'          => $nama,
                'username'      => $username,
                'alamat'        => $alamat,
                'jenis_kelamin' => $jenis_kelamin,
                'no_telepon'    => $no_telepon,
                'no_ktp'        => $no_ktp,
                'password'      => $password,
                'role_id'       => $role_id
            );

            $this->kpr_model->insert_data($data, 'customer');
            $this->session->set_flashdata('flash', 'Register Berhasil');
            redirect('auth/login');
        }
    }




    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', 'trims');
        $this->form_validation->set_rules('username', 'Username', 'required', 'trims');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', 'trims');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required', 'trims');
        $this->form_validation->set_rules('no_telepon', 'No_telepon', 'required', 'trims');
        $this->form_validation->set_rules('no_ktp', 'No_ktp', 'required', 'trims');
        $this->form_validation->set_rules('password', 'Password', 'required', 'trims');
    }
}
