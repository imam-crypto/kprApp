<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_rumah extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_barang');
		$this->load->model('m_user');
	}

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


		$data['rumah'] = $this->kpr_model->get_data('rumah')->result();
		$data['type'] = $this->kpr_model->get_data('type')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_rumah', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambahDataRumah()
	{
		$data['type'] = $this->kpr_model->get_data('type')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tambahDataRumah', $data);
		$this->load->view('templates_admin/footer');
	}

	public function proses_tambah_rumah()
	{
		$this->_rules();

		if ($this->form_validation->run() == false) {
			$this->tambahDataRumah();
		} else {
			$kode_type = $this->input->post('kode_type');
			$ukuran = $this->input->post('ukuran');
			$no_rumah = $this->input->post('no_rumah');
			$warna = $this->input->post('warna');
			$status = $this->input->post('status');
			$harga = $this->input->post('harga');
			$denda = $this->input->post('denda');
			$jumlah_pembangunan = $this->input->post('jumlah_pembangunan');
			$gambar = $_FILES['gambar']['name'];

			if ($gambar = '') {
			} else {
				$config['upload_path'] = './assets/upload';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['max_size'] = '1000000';
				$config['max_width'] = '1920';
				$config['max_height'] = '1080';
			}
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "gagal upload gambar";
			} else {
				$gambar = $this->upload->data('file_name');
			}

			$data = array(

				'kode_type' => $kode_type,
				'ukuran' => $ukuran,
				'no_rumah' => $no_rumah,
				'warna' => $warna,
				'status' => $status,
				'harga' => $harga,
				'denda' => $denda,
				'jumlah_pembangunan' => $jumlah_pembangunan,
				'gambar' => $gambar
			);

			$this->kpr_model->insert_data($data, 'rumah');
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('admin/data_rumah');
		}
	}

	public function update_rumah($id)
	{
		$where = array('id_rumah' => $id);
		$data['rumah'] = $this->db->query(" SELECT * FROM rumah rm, type tp WHERE rm.kode_type=tp.kode_type AND rm.id_rumah='$id' ")->result();
		$data['type'] = $this->kpr_model->get_data('type')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_update_rumah', $data);
		$this->load->view('templates_admin/footer');
	}

	public function proses_update_rumah()
	{
		$this->_rules();

		if ($this->form_validation->run() == false) {

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_update_rumah');
			$this->load->view('templates_admin/footer');
		} else {
			$id     = $this->input->post('id');
			$kode_type = $this->input->post('kode_type');
			$ukuran = $this->input->post('ukuran');
			$no_rumah = $this->input->post('no_rumah');
			$warna = $this->input->post('warna');
			$status = $this->input->post('status');
			$harga = $this->input->post('harga');
			$denda = $this->input->post('denda');
			$jumlah_pembangunan = $this->input->post('jumlah_pembangunan');
			$gambar = $_FILES['gambar']['name'];

			if ($gambar)
				$config['upload_path'] = './assets/upload';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = '1000000';
			$config['max_width'] = '1920';
			$config['max_height'] = '1080';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				$gambar =  $this->upload->data('file_name');
				$this->db->set('gambar', $gambar);
			} else {
				echo "Gagal upload";
			}

			$data = array(

				'kode_type' => $kode_type,
				'ukuran' => $ukuran,
				'no_rumah' => $no_rumah,
				'warna' => $warna,
				'status' => $status,
				'harga' => $harga,
				'denda' => $denda,
				'jumlah_pembangunan' => $jumlah_pembangunan,
				'gambar' => $gambar
			);

			$where = array('id_rumah' => $id);
			$this->kpr_model->update_data('rumah', $data, $where);
			$this->session->set_flashdata('flash', 'di ubah');
			redirect('admin/data_rumah');
		}
	}

	public function detail_rumah($id)
	{
		$detail = $this->kpr_model->detail($id);
		$data['detail'] = $detail;
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_rumah', $data);
		$this->load->view('templates_admin/footer');
	}

	public function hapus_rumah($id)
	{
		$where = array('id_rumah' => $id);
		$this->kpr_model->hapus_rumah($where, 'rumah');
		$this->session->set_flashdata('flash', 'di hapus');
		redirect('admin/data_rumah');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_types', 'Kode type', 'trim', 'required');
		$this->form_validation->set_rules('ukuran', 'Ukuran', 'trim', 'required');
		$this->form_validation->set_rules('no_rumah', 'No rumah', 'trim', 'required');
		$this->form_validation->set_rules('warna', 'Warna', 'trim', 'required');
		$this->form_validation->set_rules('status', 'Status', 'trim', 'required');
		$this->form_validation->set_rules('jumlah_pembangunan', 'Jumlah pembangunan', 'trim', 'required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'trim', 'required');
	}
}
