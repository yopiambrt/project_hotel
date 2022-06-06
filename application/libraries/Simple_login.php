<?php if (!defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');

class Simple_login
{
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct()
	{
		$this->CI = &get_instance();
	}
	// Fungsi login
	public function login($username, $password)
	{
		$query = $this->CI->db->get_where('admin', array('username' => $username, 'password' => md5($password)));
		if ($query->num_rows() == 1) {
			$row 	= $this->CI->db->query('SELECT * FROM `admin` where username = "' . $username . '"');
			$id = $row->row()->id;
			$name = $row->row()->name;

			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $id);
			$this->CI->session->set_userdata('name', $name);
			redirect(site_url('hotel'));
		} else {
			$this->CI->session->set_flashdata('sukses', 'Username/password Anda salah');
			redirect(site_url('login'));
		}
		return false;
	}
	// Proteksi halaman
	public function cek_login()
	{
		if ($this->CI->session->userdata('username') == '') {
			$this->CI->session->set_flashdata('sukses', 'Anda belum login');
			redirect(site_url('login'));
		}
	}
	// Fungsi logout
	public function logout()
	{
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->set_flashdata('sukses', 'Anda berhasil logout');
		redirect(site_url('login'));
	}
}
