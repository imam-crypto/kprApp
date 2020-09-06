<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendor extends CI_Controller
{

    public function index()
    {
        $data['vendor'] = $this->kpr_model->get_data('vendor')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_vendor', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_vendor()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('vendor/form_vendor');
        $this->load->view('templates_admin/footer');
    }
    public function proses_tambah_vendor()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->tambah_vendor();
        } else {
            $nama               = $this->input->post('nama');
            $support_bagian     = $this->input->post('support_bagian');
            $alamat             = $this->input->post('alamat');
            $mulai_kontrak      = $this->input->post('mulai_kontrak');
            $selesai_kontrak    = $this->input->post('selesai_kontrak');


            $data = array(

                'nama'              => $nama,
                'support_bagian'    => $support_bagian,
                'alamat'            => $alamat,
                'mulai_kontrak'     => $mulai_kontrak,
                'selesai_kontrak'   => $selesai_kontrak

            );
            // var_dump($data);
            // die();

            $this->kpr_model->insert_data($data, 'vendor');
            $this->session->set_flashdata('flash', ' ditambahkan');
            redirect('admin/vendor');
        }
    }

    public function detail_vendor($id)
    {
        $detail = $this->kpr_model->detail_vendor($id);
        $data['detail'] = $detail;
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('vendor/detail_vendor', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_vendor($id)
    {
        $where = array(
            'vendor' => $id
        );
        $data['vendor'] = $this->db->query("SELECT * from vendor WHERE id_vendor='$id'")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('vendor/form_update_vendor', $data);
        $this->load->view('templates_admin/footer');
    }

    public function proses_update_vendor()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('vendor/form_update_vendor');
            $this->load->view('templates_admin/footer');
        } else {
            $id                 = $this->input->post('id_vendor');
            $nama               = $this->input->post('nama');
            $support_bagian     = $this->input->post('support_bagian');
            $alamat             = $this->input->post('alamat');
            $mulai_kontrak      = $this->input->post('mulai_kontrak');
            $selesai_kontrak    = $this->input->post('selesai_kontrak');


            $data = array(

                'nama'              => $nama,
                'support_bagian'    => $support_bagian,
                'alamat'            => $alamat,
                'mulai_kontrak'     => $mulai_kontrak,
                'selesai_kontrak'   => $selesai_kontrak

            );
            $where = array(
                'id_vendor' => $id
            );
            $this->kpr_model->update_data('vendor', $data, $where);
            $this->session->set_flashdata('flash', ' di ubah');
            redirect('admin/vendor');
        }
    }
    public function hapus_vendor($id)
    {
        $where = array('id_vendor' => $id);
        $this->kpr_model->hapus_vendor($where, 'vendor');
        $this->session->set_flashdata('flash', ' di hapus');
        redirect('admin/vendor');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim', 'required');
        $this->form_validation->set_rules('support_bagian', 'Support Bagian', 'trim', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim', 'required');
    }
}
