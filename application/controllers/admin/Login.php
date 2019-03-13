<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/admin-login-view');
	}

	// This Section For Login Check
	public function checkLogin()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_message', validation_errors());
			redirect('manage-website','refresh');
			
		} else {
			$username = $this->input->post('email',true);
			$password = $this->input->post('password',true);
			$oldpassword = $password;
			$result = $this->common_model->checkcredential($username,$password,'ju_login');
			if($result)
			{	
				// Get User Agent 
				$agent = $this->common_model->useAgent();

				$object=array(
					'user_agent' => $agent
				);
				$this->common_model->updateData('1','id',$object,'ju_login');
				$data=array(
					'adminid' => $result,
					'adminemail' => $username,
					'adminlogin' => true
				);
				$this->session->set_userdata($data);
				redirect('dashboard','refresh');
			}
			else{
				$flashData=array(
					'error_message' => 'Enter Valid UserName And Password',
					'error_email' => $username,
					'error_password' => $oldpassword
				);
				$this->session->set_flashdata($flashData);
				redirect('manage-website','refresh');
			}
			
		}
		
		
	}

	// This Section For Logout
	public function logout()
	{
		$user_data = $this->session->all_userdata();
		foreach ($user_data as $key => $value) {
			if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
				$this->session->unset_userdata($key);
			}
		}
		$this->session->sess_destroy();
		redirect('manage-website','refresh');
	}
	
}
