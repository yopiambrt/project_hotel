<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengunjung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->simple_login->cek_login();

        $this->load->model(array('ModelPengunjung'));
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('table');
        $this->load->database();
    }

    public function index()
    {

        $data['query'] = $this->ModelPengunjung->get_all2();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('hotel/listpengunjung', $data);
        $this->load->view('templates/footer');
    }

    public function inputForm()
    {
        $this->form_validation->set_rules(
            'id_pengunjung',
            'id_pengunjung',
            'required|min_length[3]|max_length[6]',
            array('required'      => 'Anda harus mengisi %s dengan benar.')
        );
        $this->form_validation->set_rules(
            'nama_pengunjung',
            'nama_pengunjung',
            'required',
            array('required' => 'Anda harus mengisi %s terlebih dahulu .')
        );
        $this->form_validation->set_rules(
            'no_ktp',
            'no_ktp',
            'required',
            array('required' => 'Anda harus mengisi %s terlebih dahulu .')
        );
        $this->form_validation->set_rules(
            'no_tlpn',
            'no_tlpn',
            'required',
            array('required' => 'Anda harus mengisi %s terlebih dahulu .')
        );
        $this->form_validation->set_rules(
            'alamat',
            'alamat',
            'required',
            array('required' => 'Anda harus mengisi %s terlebih dahulu .')
        );

        if ($this->form_validation->run() == FALSE) {
            // $data['query']= $this->ModelPengunjung->get_all();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('hotel/formpengunjung');
            $this->load->view('templates/footer');
        } else {

            $data['id_pengunjung'] = $_POST['id_pengunjung'];
            $data['nama_pengunjung'] = $_POST['nama_pengunjung'];
            $data['no_ktp'] = $_POST['no_ktp'];
            $data['no_tlpn'] = $_POST['no_tlpn'];
            $data['alamat'] = $_POST['alamat'];

            $this->ModelPengunjung->insert_entry($data);
            redirect('pengunjung/index');
        }
    }

    public function edit($id_pengunjung)
    {
        $data['pengunjung'] = $this->ModelPengunjung->getById($id_pengunjung);
        // $data['kategori'] = ['Makanan', 'Minuman', 'Lainnya'];
        // $data['query'] = $this->ModelRoom->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('hotel/editpengunjung', $data);
        $this->load->view('templates/footer');
    }

    public function UpdateForm()
    {
        $this->form_validation->set_rules(
            'id_pengunjung',
            'id_pengunjung',
            'required|min_length[3]|max_length[6]',
            array('required'      => 'Anda harus mengisi %s dengan benar.')
        );
        $this->form_validation->set_rules(
            'nama_pengunjung',
            'nama_pengunjung',
            'required',
            array('required' => 'Anda harus mengisi %s terlebih dahulu .')
        );
        $this->form_validation->set_rules(
            'no_ktp',
            'no_ktp',
            'required',
            array('required' => 'Anda harus mengisi %s terlebih dahulu .')
        );
        $this->form_validation->set_rules(
            'no_tlpn',
            'no_tlpn',
            'required',
            array('required' => 'Anda harus mengisi %s terlebih dahulu .')
        );
        $this->form_validation->set_rules(
            'alamat',
            'alamat',
            'required',
            array('required' => 'Anda harus mengisi %s terlebih dahulu .')
        );

        if ($this->form_validation->run() == TRUE) {
            $data['id_pengunjung'] = $this->input->post('id_pengunjung');
            $data['nama_pengunjung'] = $this->input->post('nama_pengunjung');
            $data['no_ktp'] = $this->input->post('no_ktp');
            $data['no_tlpn'] = $this->input->post('no_tlpn');
            $data['alamat'] = $this->input->post('alamat');


            $this->ModelPengunjung->update($data, $data['id_pengunjung']);

            redirect('pengunjung/index');
        } else {
            $data['id_pengunjung'] = $this->input->post('id_pengunjung');
            $this->load->view('hotel/editpengunjung', $data);
        }
    }

    public function deletepengunjung($id_pengunjung)
    {

        $this->ModelPengunjung->delete($id_pengunjung);
        redirect('pengunjung/index');
    }
}
