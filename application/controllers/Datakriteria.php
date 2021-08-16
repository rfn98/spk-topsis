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
		if ($_POST['id_kriteria'])
			$this->db->where('id_kriteria', $_POST['id_kriteria'])->update('m_kriteria', $_POST);
		else 
			$this->db->insert('m_kriteria', $_POST);
		return redirect('Datakriteria');
	}

	public function insertSub() {
		if ($_POST['id_subkriteria'])
			$this->db->where('id_subkriteria', $_POST['id_subkriteria'])->update('m_subkriteria', $_POST);
		else 
			$this->db->insert('m_subkriteria', $_POST);
		return redirect('Datakriteria');
	}

	public function getListSubKriteria($id)	{
		echo json_encode($this->db->get_where('m_subkriteria', ['id_kriteria' => $id])->result());
	}

	public function delete() {
		$this->db->where('id_kriteria', $_POST['id_kriteria'])->delete('alternatif_detail');
		$this->db->where('id_kriteria', $_POST['id_kriteria'])->delete('m_subkriteria');
		$this->db->where('id_kriteria', $_POST['id_kriteria'])->delete('m_kriteria');
		return redirect('Datakriteria');
	}

	public function deleteSub() {
		$this->db->where('id_subkriteria', $_POST['id_subkriteria'])->delete('m_subkriteria');
		return redirect('Datakriteria');
	}

	/*public function test_data() {
		echo json_encode($this->db->get('m_kriteria')->result());
	}*/
}
?>