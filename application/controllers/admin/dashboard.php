<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {

        if ($this->session->userdata('nama') == '') {
            $this->session->set_flashdata('flashhh', '<div class="alert alert-primary alert-dismissible fade show" role="alert"> Login dulu biar Jongjons
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span> 
                <span class="sr-only">Close</span>
            </button>
           
        </div> ');
            redirect('auth/login');
        }


		$user = $this->session->userdata('id_customer'); 
		// var_dump($user);
		// die();

        $data['rumah'] = $this->kpr_model->get_data('rumah')->num_rows();
        $data['transaksi'] = $this->kpr_model->get_data('transaksi')->num_rows();
        $data['karyawan'] = $this->kpr_model->get_data('karyawan')->num_rows();
        $data['customer'] = $this->kpr_model->get_data('customer')->num_rows();
        $data['grafik'] = $this->kpr_model->dataGrafik();
		
        $data['berita'] = $this->kpr_model->get_data('tb_berita')->result();
		// cek user
		$data['get'] = $this->kpr_model->getBacaBerita($user);
		$data['getbaca'] = $this->kpr_model->getbaca();



        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar',$data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
}
