<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakriteria extends CI_Controller {
    public function index()
	{
		$this->load->view('Headerv');
		$this->load->view('Datakriteriav', ['data' => $this->db->get('m_kriteria')->result()]);
		$this->load->view('Footerv');
		
	}

	/*public function test_data() {
		echo json_encode($this->db->get('m_kriteria')->result());
	}*/
}
?>