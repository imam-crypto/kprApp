<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_customer extends CI_Controller
{

    public function index()
    {
        $data['customer'] = $this->kpr_model->get_data('customer')->result();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_customer', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_customer()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_customer');
        $this->load->view('templates_admin/footer');
    }
    public function proses_tambah_customer()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->tambah_customer();
        } else {
            $nama           = $this->input->post('nama');
            $username       = $this->input->post('username');
            $alamat         = $this->input->post('alamat');
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $no_telepon     = $this->input->post('no_telepon');
            $no_ktp         = $this->input->post('no_ktp');
            $password       = md5($this->input->post('password'));

            $data = array(

                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'jenis_kelamin' => $jenis_kelamin,
                'no_telepon' => $no_telepon,
                'no_ktp' => $no_ktp,
                'password' => $password
            );

            $this->kpr_model->insert_data($data, 'customer');
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/data_customer');
        }
    }
    public function update_customer($id)
    {
        $where = array(
            'id_customer' => $id
        );
        $data['customer'] = $this->db->query("SELECT * from customer WHERE id_customer='$id'")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_customer', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail_customer($id)
    {
        $detail = $this->kpr_model->detail_customer($id);
        $data['detail'] = $detail;
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_customer', $data);
        $this->load->view('templates_admin/footer');
    }

    public function hapus_customer($id)
    {
        $where = array('id_customer' => $id);
        $this->kpr_model->hapus_rumah($where, 'customer');
        $this->session->set_flashdata('flash', 'di hapus');
        redirect('admin/data_customer');
    }

    public function proses_update_customer()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/form_update_customer');
            $this->load->view('templates_admin/footer');
        } else {
            $id             = $this->input->post('id_customer');
            $nama           = $this->input->post('nama');
            $username       = $this->input->post('username');
            $alamat         = $this->input->post('alamat');
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $no_telepon     = $this->input->post('no_telepon');
            $no_ktp         = $this->input->post('no_ktp');
            $password       = md5($this->input->post('password'));

            $data = array(

                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'jenis_kelamin' => $jenis_kelamin,
                'no_telepon' => $no_telepon,
                'no_ktp' => $no_ktp,
                'password' => $password
            );
            $where = array(
                'id_customer' => $id
            );
            $this->kpr_model->update_data('customer', $data, $where);
            $this->session->set_flashdata('flash', 'di ubah');
            redirect('admin/data_customer');
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
