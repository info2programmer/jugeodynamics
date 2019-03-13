<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        if(!$this->session->userdata('adminlogin')){
            redirect('manage-website','refresh');
        }
    }

	public function index()
	{
        $data = array(
            'title' => "Welcome to admin area, you loged in securely",
            'pageName' => 'DASHBOARD',
            'mainContent' => 'admin/dashboard-view'
        );
		$this->load->view('admin/layout/layout',$data);
    }
    

    // This Section For Change Password
	public function changePassword()
	{
	
		if($this->input->post('btnSubmit') == "submit"){
			
			$this->form_validation->set_rules('txtCurrentPassword', 'Current Password', 'trim|required|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
			$this->form_validation->set_rules('txtNewPassword', 'New Password', 'trim|required|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]');
			$this->form_validation->set_rules('txtReNewPassword', 'Re Password', 'trim|required|regex_match[/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/]|matches[txtNewPassword]');

			
			if ($this->form_validation->run() == TRUE) {
				// Check Enter a valid passwod or not
				$username = $this->session->userdata('adminemail');
				$password = $this->input->post('txtCurrentPassword',true);
				$newPassword = $this->input->post('txtNewPassword',true);
				$result = $this->common_model->checkcredential($username,$password,'ju_login');
				
				if($result)
				{
					$object=array(
						'password'  => md5($newPassword)
                    );
                    $this->common_model->updateData(1,'id',$object,'ju_login');
					$flashData=array(
						'error_message' => 'Enter Valid UserName And Password'
					);
					$this->session->set_flashdata($flashData);
                    redirect('logout','refresh');
                    
				}
				else{
					$this->session->set_flashdata('error_message', "Please enter valid password");
					redirect('change-password','refresh');
				}
			} else {
                $this->session->set_flashdata('error_message', validation_errors());
				redirect('change-password','refresh');
			}
			

			
		}
		
		$data=array(
			'title' => "Change your password",
			'pageName' => 'CHANGE PASSWORD',
			'mainContent' => 'admin/change-password-view'
		);

		$this->load->view('admin/layout/layout',$data);
	}
	
}
