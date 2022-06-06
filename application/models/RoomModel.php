<?php

class RoomModel extends CI_Model
{
	public $id;
	public $nama;
	public $harga;
	public $kapasitas;
	public $keterangan;

	public function tambahData($data)
	{
		$this->db->insert('room', $data);
	}

	public function getAll()
	{
		$query = $this->db->get('room');
		return $query->result_array();
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('room');
	}

	public function getData($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('room');
		return $query->row();
	}

	public function updateData($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('room', $data);
	}
}
