<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notaris extends CI_Controller
{

    public function index()
    {
        $data['notaris'] = $this->kpr_model->get_data('notaris')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('notaris/data_notaris', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_notaris()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('notaris/tambah_notaris');
        $this->load->view('templates_admin/footer');
    }
    public function proses_tambah_notaris()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->tambah_notaris();
        } else {
            $nama               = $this->input->post('nama');
            $alamat             = $this->input->post('alamat');
            $spesialis          = $this->input->post('spesialis');


            $data = array(

                'nama'              => $nama,
                'alamat'            => $alamat,
                'spesialis'         => $spesialis


            );
            // var_dump($data);
            // die();

            $this->kpr_model->insert_data($data, 'notaris');
            $this->session->set_flashdata('flash', ' ditambahkan');
            redirect('admin/notaris');
        }
    }

    public function detail_notaris($id)
    {
        $detail = $this->kpr_model->detail_notaris($id);
        $data['detail'] = $detail;
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('notaris/detail_notaris', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_notaris($id)
    {
        $where = array(
            'notaris' => $id
        );
        $data['notaris'] = $this->db->query("SELECT * from notaris WHERE id_notaris='$id'")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('notaris/form_update_notaris', $data);
        $this->load->view('templates_admin/footer');
    }

    public function proses_update_notaris()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/form_update_notaris');
            $this->load->view('templates_admin/footer');
        } else {
            $id                     = $this->input->post('id_notaris');
            $nama                   = $this->input->post('nama');
            $alamat                 = $this->input->post('alamat');
            $spesialis              = $this->input->post('spesialis');

            $data = array(

                'nama' => $nama,
                'alamat' => $alamat,
                'spesialis' => $spesialis

            );
            $where = array(
                'id_notaris' => $id
            );
            $this->kpr_model->update_data('notaris', $data, $where);
            $this->session->set_flashdata('flash', ' di ubah');
            redirect('admin/notaris');
        }
    }
    public function hapus_notaris($id)
    {
        $where = array('id_notaris' => $id);
        $this->kpr_model->hapus_notaris($where, 'notaris');
        $this->session->set_flashdata('flash', ' di hapus');
        redirect('admin/notaris');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim', 'required');
        $this->form_validation->set_rules('support_bagian', 'Support Bagian', 'trim', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim', 'required');
    }
}
