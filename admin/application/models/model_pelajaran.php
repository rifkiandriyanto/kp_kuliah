<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pelajaran extends CI_Model {

	public function getdata($key)
	{
		$this->db->where('kd_pelajaran',$key);
		$hasil = $this->db->get('pelajaran');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('kd_pelajaran',$key);
		$this->db->update('pelajaran',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('pelajaran',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('kd_pelajaran',$key);
		$this->db->delete('pelajaran');
	}


}
