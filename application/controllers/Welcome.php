<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
			'researchList' => $this->db->query("SELECT * FROM ju_research WHERE publisher=1 ORDER BY id ASC")->result()
		);
		$this->load->view('front/research-view', $data);
	}

	public function publication()
	{
		$this->load->view('front/publication-view');
	}

	public function lab()
	{
		$this->load->view('front/lab-view');
	}

	public function pageNotFound()
	{
		$this->load->view('front/page-not-found-view');
	}
	public function group($memberType)
	{
		$data = array(
			'groupList' =>  $this->db->query("SELECT * FROM ju_group WHERE publisher=1 AND memberType=$memberType ORDER BY id DESC")->result()
		);
		$this->load->view('front/group-view', $data);
	}

	public function contact()
	{
		$this->load->view('front/contact-view');
	}

	public function memberDetails()
	{
		$memberId = $this->input->post('memberId', true);
		$memberDetails = $this->db->query("SELECT * FROM ju_group WHERE id = $memberId")->row();

		echo json_encode(['memberDetails' => $memberDetails]);
	}

	public function SendMessage()
	{
		$name = $this->input->post('name', true);
		$email = $this->input->post('email', true);
		$phone = $this->input->post('phone', true);
		$message = $this->input->post('message', true);

		$msgBody = '';

		$msgBody .= '<strong>Name : </strong> ' . $name . '<br>';
		$msgBody .= '<strong>Email : </strong> ' . $email . '<br>';
		$msgBody .= '<strong>Phone : </strong> ' . $phone . '<br>';
		$msgBody .= '<strong>Message : </strong> ' . $message . '<br>';

		$subject = 'Website Enquiry ' . date('Y-m-d h:i:s a');
		$email = 'jugeodynamics@gmail.com';

		$this->common_model->send_smtpmail($email, $subject, $msgBody);

		echo json_encode(['status' => 1]);
	}
}
