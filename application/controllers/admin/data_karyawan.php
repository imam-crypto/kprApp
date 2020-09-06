<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_karyawan extends CI_Controller
{

    public function index()
    {
        $data['karyawan'] = $this->kpr_model->get_data('karyawan')->result();



        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_karyawan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_karyawan');
        $this->load->view('templates_admin/footer');
    }
}
