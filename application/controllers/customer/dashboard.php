<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['rumah'] = $this->kpr_model->get_data('rumah')->result();


        $this->load->view('templates_customer/header');
        $this->load->view('customer/dashboardCs', $data);
        $this->load->view('templates_customer/footer');
    }
    public function detail_rumah($id)
    {
        $data['detail'] = $this->kpr_model->detail($id);


        $this->load->view('templates_customer/header');
        $this->load->view('customer/detail_rumah', $data);
        // $this->load->view('templates_customer/footer');
    }

    public function produk()
    {
        $data['produk'] = $this->kpr_model->dataBriliant();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/produkBriliant', $data);
        $this->load->view('templates_customer/footer');
    }
}
