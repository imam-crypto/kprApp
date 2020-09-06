<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '../assets/vendor/autoload.php';

class Sewa extends CI_Controller
{


    public function tambah_sewa($id)
    {


        $data['detail'] = $this->kpr_model->detail($id);


        $this->load->view('templates_customer/header');
        $this->load->view('transaksi/tambah_sewa', $data);
        // $this->load->view('templates_customer/footer');
    }
    public function tambah_sewa_aksi()
    {
        $id_customer           = $this->session->userdata('id_customer');
        $id_rumah              = $this->input->post('id_rumah');
        $tgl_sewa              = $this->input->post('tgl_sewa');
        $tanggal_selesai       = $this->input->post('tanggal_selesai');
        $harga                 = $this->input->post('harga');
        $denda                 = $this->input->post('denda');

        $data = array(
            'id_customer'           => $id_customer,
            'id_rumah'              => $id_rumah,
            'tgl_sewa'              => $tgl_sewa,
            'tanggal_selesai'       => $tanggal_selesai,
            'harga'                 => $harga,
            'denda'                 => $denda,
            'tgl_pengembalian'      => '-',
            'status_pengembalian'   => 'belum_kembali',
            'status_sewa'           => 'belum_selesai'
        );

        $this->kpr_model->insert_data($data, 'transaksi');

        $status = array(
            'status' => '0'
        );
        $id = array(
            'id_rumah' => $id_rumah
        );

        $this->kpr_model->update_data('rumah', $status, $id);




        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'b27ae1d57367681044fc',
            '338aeacef8b0b8e91e42',
            '1066575',
            $options
        );

        $data['message'] = 'hello world';
        $pusher->trigger('my-channel', 'my-event', $data);


        $this->session->set_flashdata('flashh', '<div class="alert alert-info alert-dismissible fade show" role="alert"> Transaksi Sukses Silahkan Lakukan Pembayaran
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span> 
                <span class="sr-only">Close</span>
            </button>
           
        </div> ');
        redirect('customer/transaksi');
    }
}
