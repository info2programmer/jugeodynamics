<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	// find_data($table,$return_type='array',$list=NULL,$conditions='',$select='*',$join='',$group_by='',$order_by='',$limit=0,$offset=0,$or_where_in='',$or_like='')
	public function index()
	{
		$data = array(
			'newsList' => $this->db->query("SELECT * FROM ju_news WHERE publish=1 ORDER BY id DESC")->result()
		);
		$this->load->view('front/home-view', $data);
	}

	public function research()
	{
		$data = array(
			'researchList' => $this->db->query("SELECT * FROM ju_research WHERE publisher=1 ORDER BY id DESC")->result()
		);
		$this->load->view('front/research-view', $data);
	}

	public function publication($date = '')
	{
		if ($date == "") {
			$data = array(
				'publicationList' => $this->db->query("SELECT * FROM ju_publication WHERE date=2019 AND publisher=1 ORDER BY id DESC")->result(),
				'year' => 2019
			);
		} else {
			$data = array(
				'publicationList' => $this->db->query("SELECT * FROM ju_publication WHERE date=$date AND publisher=1 ORDER BY id DESC")->result(),
				'year' => $date
			);
		}

		$this->load->view('front/publication-view', $data);
	}

	public function lab()
	{
		$this->load->view('front/lab-view');
	}

	public function pageNotFound()
	{
		$this->load->view('front/page-not-found-view');
	}
	public function group()
	{
		$data = array(
			'groupList' =>  $this->db->query("SELECT * FROM ju_group WHERE publisher=1 ORDER BY id DESC")->result()
		);
		$this->load->view('front/group-view', $data);
	}

	public function contact()
	{
		$this->load->view('front/contact-view');
	}
}
