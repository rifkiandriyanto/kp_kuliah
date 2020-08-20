<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_nilai extends CI_Model {

	public function tampildatanilai()
	{
		$data = "SELECT
				nilai.kd_nilai,
				siswa.nm_siswa,
				kelas.nm_kelas,
				pelajaran.nm_pelajaran,
				pelajaran.bobot,
				guru.nm_guru,
				nilai.nilai
				FROM
				nilai ,
				pelajaran ,
				siswa ,
				guru ,
				kelas
				WHERE
				nilai.kd_pelajaran = pelajaran.kd_pelajaran AND
				nilai.nis = siswa.nis AND
				siswa.kd_kelas = kelas.kd_kelas AND
				nilai.nip = guru.nip
				ORDER BY nm_kelas ASC";
		return $this->db->query($data);
	}

	public function getlistnilai()
	{
		return $this->db->get('nilai');
	}



	public function getdata($key)
	{
		$this->db->where('kd_nilai',$key);
		$hasil = $this->db->get('nilai');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('kd_nilai',$key);
		$this->db->update('nilai',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('nilai',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('kd_nilai',$key);
		$this->db->delete('nilai');
	}

	function manualQuery($q)
	{
		return $this->db->query($q);
	}


}
