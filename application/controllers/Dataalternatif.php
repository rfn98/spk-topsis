<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataalternatif extends CI_Controller {
    public function index()
	{
		$this->load->view('Headerv');
		$this->load->view('Dataalternatifv');
		$this->load->view('Footerv');
		
	}
}
?>