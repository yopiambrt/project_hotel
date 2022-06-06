<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();

		$this->load->model(array('RoomModel', 'PengunjungModel', 'TransaksiModel'));
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('table');
		$this->load->database();
	}

	public function index()
	{

		$data['transaksi'] = $this->TransaksiModel->getJoinData();
		$data['pengunjung'] = $this->PengunjungModel->getAll();
		$data['kamar'] = $this->RoomModel->getAll();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('hotel/detailhotel', $data);
		$this->load->view('templates/footer');
	}

	public function inputForm()
	{
		$this->form_validation->set_rules(
			'id',
			'Id',
			'required|max_length[3]',
			array('required'      => '<span style="color:red">Anda harus mengisi %s terlebih dahulu</span>', 'max_length[3]' => '<span style="color:red">Maksimal 3 Karakter</span>')
		);
		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'required',
			array('required' => '<span style="color:red">Anda harus mengisi %s terlebih dahulu</span>')
		);
		$this->form_validation->set_rules(
			'harga',
			'Harga',
			'required|regex_match[/^[0-9]/]',
			array('required' => '<span style="color:red">Anda harus mengisi %s terlebih dahulu</span>', 'regex_match' => '<span style="color:red">Harus Berupa Nominal Angka</span>')
		);
		$this->form_validation->set_rules(
			'kapasitas',
			'Kapasitas',
			'required|regex_match[/^[0-9]/]',
			array('required' => '<span style="color:red">Anda harus mengisi %s terlebih dahulu</span>', 'regex_match' => '<span style="color:red">Harus Berupa Nominal Angka</span>')
		);
		$this->form_validation->set_rules(
			'keterangan',
			'Keterangan',
			'required',
			array('required' => '<span style="color:red">Anda harus mengisi %s terlebih dahulu</span>')
		);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('hotel/myform');
			$this->load->view('templates/footer');
		} else {

			$data = array(
				'id' => $this->input->post('id'),
				'nama' => $this->input->post('nama'),
				'harga' => $this->input->post('harga'),
				'kapasitas' => $this->input->post('kapasitas'),
				'keterangan' => $this->input->post('keterangan'),
			);
			$this->RoomModel->tambahData($data);
			redirect('hotel/listkamar');
		}
	}

	public function listKamar()
	{
		$data['kamar'] = $this->RoomModel->getAll();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('hotel/listkamar', $data);
		$this->load->view('templates/footer');
	}

	public function deletekamar($id)
	{
		$this->RoomModel->delete($id);
		redirect('hotel/listkamar');
	}

	public function getDataKamar()
	{
		echo json_encode($this->RoomModel->getData($_POST['id']));
	}

	public function updateKamar()
	{
		$data = array(
			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'),
			'kapasitas' => $this->input->post('kapasitas'),
			'keterangan' => $this->input->post('keterangan'),
		);
		$this->RoomModel->updateData($data);
		redirect('hotel/listkamar');
	}

	public function inputPengunjung()
	{
		$this->form_validation->set_rules(
			'nama_pengunjung',
			'Nama_pengunjung',
			'required|regex_match[/^[a-zA-Z]/]',
			array('required' => '<span style="color:red">Anda harus mengisi %s terlebih dahulu</span>', 'regex_match' => '<span style="color:red">Harus berupa huruf</span>')
		);
		$this->form_validation->set_rules(
			'no_telp',
			'No_telp',
			'required|regex_match[/^[0-9]/]|max_length[13]',
			array('required' => '<span style="color:red">Anda harus mengisi %s terlebih dahulu</span>', 'regex_match' => '<span style="color:red">Harus Berupa Nominal Angka</span>', 'max_length' => '<span style="color:red">Maksimal 13 karakter</span>')
		);
		$this->form_validation->set_rules(
			'alamat',
			'Alamat',
			'required',
			array('required' => '<span style="color:red">Anda harus mengisi %s terlebih dahulu</span>')
		);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('hotel/formpengunjung');
			$this->load->view('templates/footer');
		} else {

			$data = array(
				'no_ktp' => $this->input->post('no_ktp'),
				'nama_pengunjung' => $this->input->post('nama_pengunjung'),
				'no_telp' => $this->input->post('no_telp'),
				'alamat' => $this->input->post('alamat'),
			);
			$this->PengunjungModel->tambahData($data);
			redirect('hotel/listpengunjung');
		}
	}

	public function listpengunjung()
	{
		$data['pengunjung'] = $this->PengunjungModel->getAll();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('hotel/listpengunjung', $data);
		$this->load->view('templates/footer');
	}

	public function getDataPengunjung()
	{
		echo json_encode($this->PengunjungModel->getData($_POST['id']));
	}

	public function deletepengunjung($id)
	{
		$this->PengunjungModel->delete($id);
		redirect('hotel/listpengunjung');
	}

	public function updatePengunjung()
	{
		$data = array(
			'no_ktp' => $this->input->post('no_ktp'),
			'nama_pengunjung' => $this->input->post('nama_pengunjung'),
			'no_telp' => $this->input->post('no_telp'),
			'alamat' => $this->input->post('alamat'),
			'id' => $this->input->post('id')
		);
		$this->RoomModel->updateData($data);
		redirect('hotel/listkamar');
	}

	public function tambahTransaksi()
	{
		$data['pengunjung'] = $this->PengunjungModel->getAll();
		$data['kamar'] = $this->RoomModel->getAll();
		$this->form_validation->set_rules(
			'tgl_masuk',
			'tgl_masuk',
			'required',
			array('required' => '<span style="color:red">Anda harus mengisi %s terlebih dahulu</span>')
		);
		$this->form_validation->set_rules(
			'tgl_keluar',
			'tgl_keluar',
			'required',
			array('required' => '<span style="color:red">Anda harus mengisi %s terlebih dahulu</span>')
		);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('hotel/transaksiform', $data);
			$this->load->view('templates/footer');
		} else {

			$data = array(
				'id_pengunjung' => $this->input->post('id_pengunjung'),
				'id_kamar' => $this->input->post('id_kamar'),
				'tgl_masuk' => $this->input->post('tgl_masuk'),
				'tgl_keluar' => $this->input->post('tgl_keluar'),
				'status' => $this->input->post('status'),
			);
			$this->TranksaksiModel->tambahData($data);
			redirect('hotel/index');
		}
	}
	public function getDataTransaksi()
	{
		echo json_encode($this->TransaksiModel->getData($_POST['id']));
	}

	public function deleteTransaksi($id)
	{
		$this->TransaksiModel->delete($id);
		redirect('hotel/index');
	}

	public function updateTransaksi()
	{
		$data = array(
			'id_transaksi' => $this->input->post('id_transaksi'),
			'id_pengunjung' => $this->input->post('id_pengunjung'),
			'id_kamar' => $this->input->post('id_kamar'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
			'tgl_keluar' => $this->input->post('tgl_keluar'),
			'status' => $this->input->post('status'),
		);
		$this->TransaksiModel->updateData($data);
		redirect('hotel/listkamar');
	}
}
