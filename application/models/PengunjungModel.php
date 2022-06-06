<?php

class PengunjungModel extends CI_Model
{
	public $id,
		$no_ktp,
		$nama_pengunjung,
		$no_telp,
		$alamat;

	public function tambahData($data)
	{
		$this->db->insert('pengunjung', $data);
	}

	public function getAll()
	{
		$query = $this->db->get('pengunjung');
		return $query->result_array();
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pengunjung');
	}

	public function getData($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('pengunjung');
		return $query->row();
	}

	public function updateData($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('pengunjung', $data);
	}
}
