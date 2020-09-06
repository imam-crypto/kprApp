<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{



    public function index()
    {
        $data['transaksi'] = $this->db->query(" SELECT * FROM transaksi tr, rumah rm, customer cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_customer=cs.id_customer")->result();



        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_transaksi', $data);
        $this->load->view('templates_admin/footer');
    }
    public function cek_pembayaran($id)

    {
        $where = array('id_booking' => $id);
        $data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_booking='$id'")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/konfirmasi_pembayaran', $data);
        $this->load->view('templates_admin/footer');
    }

    public function dl_pembayaran()
    {
        $id                 = $this->input->post('id_booking');
        $status_pembayaran  = $this->input->post('status_pembayaran');

        $data = array('status_pembayaran' => $status_pembayaran);
        $where = array('id_booking' => $id);


        $this->kpr_model->update_data('transaksi', $data, $where);
        // var_dump($this->kpr_model->update_data('transaksi', $data, $where));
        // die();
        // $this->kpr_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('flash', 'konfirmasi berhasil');
        redirect('admin/transaksi');
    }
    public function download_pembayaran($id)
    {
        $this->load->helper('download');
        $file_pembayaran = $this->kpr_model->download_pembayaran($id);
        $file = 'assets/upload/' . $file_pembayaran['bukti_pembayaran'];
        force_download($file, NULL);
        redirect('admin/transaksi');
    }
    public function transaksi_selesai($id)
    {
        $where = array('id_booking' => $id);
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_booking='$id'")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaksi_selesai', $data);
        $this->load->view('templates_admin/footer');
    }
    public function transaksi_selesai_aksi()
    {
        $id                                 = $this->input->post('id_booking');
        $tgl_selesai                        = $this->input->post('tanggal_selesai');
        $denda                              = $this->input->post('denda');
        $tgl_pengembalian                   = $this->input->post('tgl_pengembalian');
        $status_pengembalian                = $this->input->post('status_pengembalian');
        $status_sewa                        = $this->input->post('status_sewa');


        $x = strtotime($tgl_pengembalian);
        $y = strtotime($tgl_selesai);


        // $selisih = abs($x - $y) / (60 * 60 * 24);

        $selisih = 6 - (date("m", $x) - date("m", $y));

        $total_denda = $selisih * $denda;

        // var_dump($selisih);
        // die();


        $data = array(
            'tgl_pengembalian'              => $tgl_pengembalian,
            'status_pengembalian'           => $status_pengembalian,
            'status_sewa'                   => $status_sewa,
            'total_denda'                   => $total_denda
        );
        $where = array(
            'id_booking' => $id
        );


        $this->kpr_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('flash', 'Transaksi Sukses');
        redirect('admin/transaksi');
    }
    public function batal_transaksi($id)
    {
        $where = array('id_booking' => $id);
        $data = $this->kpr_model->got_where($where, 'transaksi')->row();

        $where2 = array('id_rumah'  => $data->id_rumah);
        $data2 = array('status'     => '1');

        $this->kpr_model->update_data('rumah', $data2, $where2);
        $this->kpr_model->hapus_rumah($where, 'transaksi');
        $this->session->set_flashdata('flash', ' Di batalkan');
        redirect('admin/transaksi');
    }
}
