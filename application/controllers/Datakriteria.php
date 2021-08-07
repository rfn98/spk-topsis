<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakriteria extends CI_Controller {
    public function index()
	{
		$this->load->view('Headerv');
		$this->load->view('Datakriteriav');
		$this->load->view('Footerv');
		
	}
}
?>