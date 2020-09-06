<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function index()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/filter_laporan');
            $this->load->view('templates_admin/footer');
        } else {
            $data['laporan'] = $this->db->query(" SELECT * FROM transaksi tr, rumah rm, customer cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_customer=cs.id_customer AND date (tgl_sewa)>= '$dari' AND date (tgl_sewa)<= '$sampai'")->result();
            // var_dump($data);
            // die();

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/tampilkan_laporan', $data);
            $this->load->view('templates_admin/footer');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai', 'required');
    }

    public function print_laporan()
    {

        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');
        $data['title'] = "laporan transaksi";



        $data['laporan'] = $this->db->query(" SELECT * FROM transaksi tr, rumah rm, customer cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_customer=cs.id_customer AND date (tgl_sewa)>= '$dari' AND date (tgl_sewa)<= '$sampai'")->result();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('admin/print_laporan', $data);
    }
}
