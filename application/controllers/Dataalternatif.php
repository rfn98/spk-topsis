<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataalternatif extends CI_Controller {
    public function index()
	{
		$headerNormalize = new StdClass();
		$headerWeight = new StdClass();
		$list = $this->db->query("SELECT nama_kriteria, round(sqrt(sum(nilai_rating*nilai_rating)), 2) detail FROM `alternatif_detail` ad join m_subkriteria ms on ms.id_subkriteria = ad.id_sub_kriteria join m_alternatif ma on ma.id_alternatif = ad.id_alternatif join m_kriteria mk on mk.id_kriteria = ad.id_kriteria group by 1")->result();
		$listWeight = $this->db->get('m_kriteria')->result();
		foreach ($list as $k => $v) $headerNormalize->{$v->nama_kriteria} = $v->detail;
		foreach ($listWeight as $k => $v) $headerWeight->{$v->nama_kriteria} = $v->bobot_kriteria;
		$this->load->view('Headerv');
		$this->load->view('Dataalternatifv', [
			'header' => $this->db->get('m_kriteria')->result(),
			'listAlternatif' => $this->db->query("SELECT ad.id_alternatif, nama_alternatif, concat ('{', GROUP_CONCAT('\"', nama_kriteria, '\"', ':', '\"', case when is_range = 0 then nama_subkriteria else nilai_alternatif end, '\"'), '}') detail FROM `alternatif_detail` ad join m_subkriteria ms on ms.id_subkriteria = ad.id_sub_kriteria join m_alternatif ma on ma.id_alternatif = ad.id_alternatif join m_kriteria mk on mk.id_kriteria = ad.id_kriteria group by 1,2")->result(),
			'listMatrixDecision' => $this->db->query("SELECT ad.id_alternatif, nama_alternatif, concat ('{', GROUP_CONCAT('\"', nama_kriteria, '\"', ':', '\"', nilai_rating, '\"'), '}') detail FROM `alternatif_detail` ad join m_subkriteria ms on ms.id_subkriteria = ad.id_sub_kriteria join m_alternatif ma on ma.id_alternatif = ad.id_alternatif join m_kriteria mk on mk.id_kriteria = ad.id_kriteria group by 1,2")->result(),
			'headerNormalize' => $headerNormalize,
			'headerWeight' => $headerWeight
		]);
		$this->load->view('Footerv');
		
	}

	/*public function test_data() {
		echo json_encode($this->db->get('m_kriteria')->result());
	}*/
}
?>