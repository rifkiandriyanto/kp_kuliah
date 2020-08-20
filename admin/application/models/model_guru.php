<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_guru extends CI_Model {


	public function getdata($key)
	{
		$this->db->where('nip',$key);
		$hasil = $this->db->get('guru');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('nip',$key);
		$this->db->update('guru',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('guru',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('nip',$key);
		$this->db->delete('guru');
	}


}
