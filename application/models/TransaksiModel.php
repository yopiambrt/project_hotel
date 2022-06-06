<?php

class TransaksiModel extends CI_Model
{
	public $id_transaksi,
		$id_pengunjung,
		$id_kamar,
		$tgl_masuk,
		$tgl_keluar,
		$status;

	public function getJoinData()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pengunjung', 'transaksi.id_pengunjung = pengunjung.id');
		$this->db->join('room', 'transaksi.id_kamar = room.id');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tambahData($data)
	{
		$this->db->insert('transaksi', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->delete('transaksi');
	}

	public function getData($id)
	{
		$this->db->where('id_transaksi', $id);
		$query = $this->db->get('transaksi');
		return $query->row();
	}

	public function updateData($data)
	{
		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->update('transaksi', $data);
	}
}
