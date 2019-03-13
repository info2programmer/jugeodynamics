<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reseach_managment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        if (!$this->session->userdata('adminlogin')) {
            redirect('manage-website', 'refresh');
        }
    }


    // This Function For Research Listing View
    public function index()
    {
        $data = array(
            'title' => "Manage home page research",
            'pageName' => 'RESEARCH MANAGEMENT',
            'mainContent' => 'admin/research-list-view',
            'researchList' => $this->common_model->find_data(['name' => 'ju_research'], 'array')
        );
        $this->load->view('admin/layout/layout', $data);
    }

    // This Function For Research ADD View
    public function create()
    {
        if ($this->input->post('btnSubmit') == "submit") {
            $this->form_validation->set_rules('txtTitle', 'Research Title', 'trim|required');
            $this->form_validation->set_rules('txtContent', 'Content Line 1', 'trim|required');


            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('error_message', validation_errors());
                redirect('create-research', 'refresh');
            } else {
                $data = array(
                    'image' => $this->common_model->upload_image('imageFile', './assets/front/research-image/', 'create-research'),
                    'title' => $this->input->post('txtTitle', true),
                    'content' => $this->input->post('txtContent', true),
                    'created' => date('Y-m-d h.i.s a'),
                    'publisher' => 1
                );
                $this->common_model->insert_record('ju_research', $data);
                $this->session->set_flashdata('success_message', 'Research Insert Successfully');
                redirect('manage-research', 'refresh');
            }
        }
        $data = array(
            'title' => "Create new research",
            'pageName' => 'NEW RESEARCH',
            'mainContent' => 'admin/add-edit-research-view'
        );
        $this->load->view('admin/layout/layout', $data);
    }



    // This function for delete Research
    public function deleteResearch($id, $fileImage)
    {
        $fileName = urldecode($fileImage);
        $this->common_model->delete_record('id', $id, 'ju_research');
        unlink("assets/front/research-image/" . $fileName);
        $this->session->set_flashdata('error_message', 'Research Image Deleted');
        redirect('manage-research', 'refresh');
    }

    public function changeResearchStatus($id, $status)
    {
        $object = array(
            'publisher' => $status
        );
        $this->common_model->updateData($id, 'id', $object, 'ju_research');
        $this->session->set_flashdata('success_message', 'Status Update Successfully');
        redirect('manage-research', 'refresh');
    }

    // This Function For Add Research
    public function editResearch($id)
    {
        if ($this->input->post('btnSubmit') == "submit") {
            $this->form_validation->set_rules('txtTitle', 'Research Title', 'trim|required');
            $this->form_validation->set_rules('txtContent', 'Content Line 1', 'trim|required');



            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('error_message', validation_errors());
                redirect('home/editResearch/' . $id, 'refresh');
            } else {
                $image = $this->input->post('txtOldImage');
                if (!empty($_FILES['imageFile']['tmp_name'])) {
                    unlink("assets/front/research-image/" . $image);
                    $image = $this->common_model->upload_image('imageFile', './assets/front/research-image/', 'home/editResearch/' . $id);
                }
                $data = array(
                    'image' => $image,
                    'title' => $this->input->post('txtTitle', true),
                    'content' => $this->input->post('txtContent', true),
                    'created' => date('Y-m-d h.i.s a'),
                );
                $this->common_model->updateData($id, 'id', $data, 'ju_research');
                $this->session->set_flashdata('success_message', 'Research Edited Successfully');
                redirect('manage-research', 'refresh');
            }
        }
        $data = array(
            'title' => "Update research",
            'pageName' => 'EDIT RESEARCH',
            'mainContent' => 'admin/add-edit-research-view',
            'researchData' => $this->common_model->find_data(['name' => 'ju_research'], 'row', '', ['id' => $id])
        );
        $this->load->view('admin/layout/layout', $data);
    }
}
