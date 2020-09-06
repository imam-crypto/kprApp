<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('id_customer') == '') {
            $this->session->set_flashdata('flashhh', '<div class="alert alert-primary alert-dismissible fade show" role="alert"> Login dulu biar Jongjons
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span> 
                <span class="sr-only">Close</span>
            </button>
           
        </div> ');
            redirect('auth/login');
        }

        $customer = $this->session->userdata('id_customer');
        $data['transaksi'] = $this->db->query(" SELECT * FROM transaksi tr, rumah rm, customer cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_customer=cs.id_customer AND cs.id_customer='$customer' ORDER BY id_booking DESC")->result();



        $this->load->view('templates_customer/header');
        $this->load->view('customer/data_transaksi', $data);
        $this->load->view('templates_customer/footer');
    }

    public function pembayaran($id)
    {
        $data['transaksi'] = $this->db->query(" SELECT * FROM transaksi tr, rumah rm, customer cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_customer=cs.id_customer AND tr.id_booking='$id' ORDER BY id_booking DESC")->result();

        $this->load->view('templates_customer/header');
        $this->load->view('customer/pembayaran', $data);
        $this->load->view('templates_customer/footer');
    }
    public function pembayaran_aksi()
    {
        $id_booking =  $this->input->post('id_booking');
        $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];

        if ($bukti_pembayaran)
            $config['upload_path'] = './assets/upload';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1000000';
        $config['max_width'] = '1920';
        $config['max_height'] = '1080';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('bukti_pembayaran')) {
            $bukti_pembayaran =  $this->upload->data('file_name');
            $this->db->set('bukti_pembayaran', $bukti_pembayaran);
        } else {
            echo "Gagal upload";
        }
        $data   =   array('bukti_pembayaran' => $bukti_pembayaran);
        $where  =   array('id_booking' => $id_booking);

        $this->kpr_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('flash', ' <div class="alert alert-info alert-dismissible fade show" role="alert"> Transaksi Telah di update Mohon tunggu konfirmasi
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            
            <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            
        </div> ');
        redirect('customer/transaksi');
    }

    public function print_invoice($id)
    {
        $data['transaksi'] = $this->db->query(" SELECT * FROM transaksi tr, rumah rm, customer cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_customer=cs.id_customer AND tr.id_booking='$id'")->result();

        $this->load->view('customer/cetak_invoice', $data);
    }

    public function batal_transaksi($id)
    {
        $where = array('id_booking' => $id);
        $data = $this->kpr_model->got_where($where, 'transaksi')->row();

        $where2 = array('id_rumah'  => $data->id_rumah);
        $data2 = array('status'     => '1');

        $this->kpr_model->update_data('rumah', $data2, $where2);
        $this->kpr_model->hapus_rumah($where, 'transaksi');
        $this->session->set_flashdata('flash', ' <div class="alert alert-info alert-dismissible fade show" role="alert"> Transaksi Telah di Batalkan
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        
        <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        
    </div> ');
        redirect('customer/transaksi');
    }
}
