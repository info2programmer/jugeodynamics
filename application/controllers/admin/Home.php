<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        if(!$this->session->userdata('adminlogin')){
            redirect('manage-website','refresh');
        }
    }

    // This  Function For Slider Management
    public function sliderManagement()
    {
        $data = array(
            'title' => "Manage home page slider",
            'pageName' => 'SLIDER MANAGEMENT',
            'mainContent' => 'admin/slider-list-view',
            'sliderList' => $this->common_model->find_data(['name' => 'ju_slider'],'array')
        );
		$this->load->view('admin/layout/layout',$data);
    }

    // This Function For Add Slider
    public function addSlider()
    {
        if($this->input->post('btnSubmit') == "submit"){
            $this->form_validation->set_rules('txtContent1', 'Content Line 1', 'trim');
            $this->form_validation->set_rules('txtContent2', 'Content Line 1', 'trim');
            $this->form_validation->set_rules('txtContentColor', 'Content Color', 'trim');

            
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error_message', validation_errors());
                redirect('create-slider','refresh');
            } else {
                $data=array(
                    'content_1' => $this->input->post('txtContent1',true),
                    'content_2' => $this->input->post('txtContent2',true),
                    'color' => $this->input->post('txtContentColor',true),
                    'created' => date('Y-m-d h.i.s a'),
                    'slider' => $this->common_model->upload_image('imageFile','./assets/front/slider-image/','create-slider'),
                    'published' => 1
                );
                $this->common_model->insert_record('ju_slider',$data);
                $this->session->set_flashdata('success_message', 'Slider Insert Successfully');
                redirect('manage-slider','refresh');
            }
            
            
        }
        $data = array(
            'title' => "Create new slider",
            'pageName' => 'NEW SLIDER',
            'mainContent' => 'admin/add-edit-slider-view'
        );
		$this->load->view('admin/layout/layout',$data);
    }


    // This function for delete Slider
    public function deleteSlider($id,$fileImage)
    {
        $fileName = urldecode($fileImage);
        $this->common_model->delete_record('id',$id,'ju_slider');
        unlink("assets/front/slider-image/".$fileName);
        $this->session->set_flashdata('erro_message', 'Slider Image Deleted');
        redirect('manage-slider','refresh');
    }

    public function changeStatus($id,$status)
    {
        $object=array(
            'published' => $status
        );
        $this->common_model->updateData($id,'id',$object,'ju_slider');
        $this->session->set_flashdata('success_message', 'Status Update Successfully');
        redirect('manage-slider','refresh');
    }

    // This Function For Add Slider
    public function editSlider($id)
    {
        if($this->input->post('btnSubmit') == "submit"){
            $this->form_validation->set_rules('txtContent1', 'Content Line 1', 'trim');
            $this->form_validation->set_rules('txtContent2', 'Content Line 1', 'trim');
            $this->form_validation->set_rules('txtContentColor', 'Content Color', 'trim');

            
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error_message', validation_errors());
                redirect('home/editSlider/'.$id,'refresh');
            } else {
                $image = $this->input->post('txtOldImage');
                if(!empty($_FILES['imageFile']['tmp_name']))
                {
                    unlink("assets/front/slider-image/".$image);
                    $image=$this->common_model->upload_image('imageFile','./assets/front/slider-image/','home/editSlider/'.$id);
                }
                $data=array(
                    'content_1' => $this->input->post('txtContent1',true),
                    'content_2' => $this->input->post('txtContent2',true),
                    'color' => $this->input->post('txtContentColor',true),
                    'created' => date('Y-m-d h.i.s a'),
                    'slider' => $image
                );
                $this->common_model->updateData($id,'id',$data,'ju_slider');
                $this->session->set_flashdata('success_message', 'Slider Edited Successfully');
                redirect('manage-slider','refresh');
            }
            
            
        }
        $data = array(
            'title' => "Update slider",
            'pageName' => 'EDIT SLIDER',
            'mainContent' => 'admin/add-edit-slider-view',
            'sliderData' => $this->common_model->find_data(['name' => 'ju_slider'],'row','',['id' => $id])
        );
		$this->load->view('admin/layout/layout',$data);
    }
    
    // This  Function For News Management
    public function newsManagement()
    {
        $data = array(
            'title' => "Manage home page news",
            'pageName' => 'NEWS MANAGEMENT',
            'mainContent' => 'admin/news-list-view',
            'newsList' => $this->common_model->find_data(['name' => 'ju_news'],'array')
        );
		$this->load->view('admin/layout/layout',$data);
    }

    // This Function For Add News
    public function addNews()
    {
        if($this->input->post('btnSubmit') == "submit"){
            $this->form_validation->set_rules('txtNewsTitle', 'News Title', 'trim|required');
            $this->form_validation->set_rules('txtContent', 'News Content', 'trim|required');
            
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error_message', validation_errors());
                redirect('create-news','refresh');
            } else {
                $data=array(
                    'title' => $this->input->post('txtNewsTitle',true),
                    'content' => $this->input->post('txtContent',true),
                    'created' => date('Y-m-d h.i.s a'),
                    'publish' => 1
                );
                $this->common_model->insert_record('ju_news',$data);
                $this->session->set_flashdata('success_message', 'Slider Insert Successfully');
                redirect('manage-news','refresh');
            }
            
            
        }
        $data = array(
            'title' => "Create News",
            'pageName' => 'ADD NEWS',
            'mainContent' => 'admin/add-edit-news-view'
        );
		$this->load->view('admin/layout/layout',$data);
    }


    // This function for delete Slider
    public function deleteNews($id)
    {
        $this->common_model->delete_record('id',$id,'ju_news');
        $this->session->set_flashdata('erro_message', 'News Deleted Successfully');
        redirect('manage-news','refresh');
    }

    public function changeNewsStatus($id,$status)
    {
        $object=array(
            'publish' => $status
        );
        $this->common_model->updateData($id,'id',$object,'ju_news');
        $this->session->set_flashdata('success_message', 'Status Update Successfully');
        redirect('manage-news','refresh');
    }


    // This Function For Add Slider
    public function editNews($id)
    {
        if($this->input->post('btnSubmit') == "submit"){
            $this->form_validation->set_rules('txtNewsTitle', 'News Title', 'trim|required');
            $this->form_validation->set_rules('txtContent', 'News Content', 'trim|required');

            
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error_message', validation_errors());
                redirect('home/editNews/'.$id,'refresh');
            } else {
                
                $data=array(
                    'title' => $this->input->post('txtNewsTitle',true),
                    'content' => $this->input->post('txtContent',true),
                    'created' => date('Y-m-d h.i.s a')
                );
                $this->common_model->updateData($id,'id',$data,'ju_news');
                $this->session->set_flashdata('success_message', 'News Edited Successfully');
                redirect('manage-news','refresh');
            }
            
            
        }
        $data = array(
            'title' => "Update News",
            'pageName' => 'EDIT NEWS',
            'mainContent' => 'admin/add-edit-news-view',
            'newsData' => $this->common_model->find_data(['name' => 'ju_news'],'row','',['id' => $id])
        );
		$this->load->view('admin/layout/layout',$data);
    }

    // This Function For Research   
    public function research(Type $var = null)
    {
        echo "Here";
    }

	
}
