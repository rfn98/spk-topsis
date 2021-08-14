<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakriteria extends CI_Controller {
    public function index()
	{
		$this->load->view('Headerv');
		$this->load->view('Datakriteriav', ['data' => $this->db->get('m_kriteria')->result()]);
		$this->load->view('Footerv');
		
	}

	public function insert() {
		$this->db->insert('m_kriteria', $_POST);
		return redirect('Datakriteria');
	}

	public function insertSub() {
		$this->db->insert('m_subkriteria', $_POST);
		return redirect('Datakriteria');
	}

	public function getListSubKriteria($id)	{
		echo json_encode($this->db->get_where('m_subkriteria', ['id_kriteria' => $id])->result());
	}

	/*public function test_data() {
		echo json_encode($this->db->get('m_kriteria')->result());
	}*/
}
?>