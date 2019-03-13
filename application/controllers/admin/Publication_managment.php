<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publication_managment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        if (!$this->session->userdata('adminlogin')) {
            redirect('manage-website', 'refresh');
        }
    }


    // This Function For Publication Listing View
    public function index()
    {
        $data = array(
            'title' => "Manage home page publication",
            'pageName' => 'PUBLICATION MANAGEMENT',
            'mainContent' => 'admin/publication-list-view',
            'publicationList' => $this->common_model->find_data(['name' => 'ju_publication'], 'array')
        );
        $this->load->view('admin/layout/layout', $data);
    }

    // This Function For Publication ADD View
    public function create()
    {
        if ($this->input->post('btnSubmit') == "submit") {
            $this->form_validation->set_rules('txtTitle', 'Publication Title', 'trim|required');
            $this->form_validation->set_rules('txtContent', 'Content Line 1', 'trim|required');


            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('error_message', validation_errors());
                redirect('create-publication', 'refresh');
            } else {
                $data = array(
                    'image' => $this->common_model->upload_image('imageFile', './assets/front/publication-image/', 'create-publication'),
                    'title' => $this->input->post('txtTitle', true),
                    'content' => $this->input->post('txtContent', true),
                    'created' => date('Y-m-d h.i.s a'),
                    'publisher' => 1
                );
                $this->common_model->insert_record('ju_publication', $data);
                $this->session->set_flashdata('success_message', 'Publication Insert Successfully');
                redirect('manage-publication', 'refresh');
            }
        }
        $data = array(
            'title' => "Create new publication",
            'pageName' => 'NEW PUBLICATION',
            'mainContent' => 'admin/add-edit-publication-view'
        );
        $this->load->view('admin/layout/layout', $data);
    }



    // This function for delete Publication
    public function deletePublication($id, $fileImage)
    {
        $fileName = urldecode($fileImage);
        $this->common_model->delete_record('id', $id, 'ju_publication');
        unlink("assets/front/publication-image/" . $fileName);
        $this->session->set_flashdata('error_message', 'Publication Image Deleted');
        redirect('manage-publication', 'refresh');
    }

    public function changePublicationStatus($id, $status)
    {
        $object = array(
            'publisher' => $status
        );
        $this->common_model->updateData($id, 'id', $object, 'ju_publication');
        $this->session->set_flashdata('success_message', 'Status Update Successfully');
        redirect('manage-publication', 'refresh');
    }

    // This Function For Add Publication
    public function editPublication($id)
    {
        if ($this->input->post('btnSubmit') == "submit") {
            $this->form_validation->set_rules('txtTitle', 'Publication Title', 'trim|required');
            $this->form_validation->set_rules('txtContent', 'Content Line 1', 'trim|required');



            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('error_message', validation_errors());
                redirect('home/editPublication/' . $id, 'refresh');
            } else {
                $image = $this->input->post('txtOldImage');
                if (!empty($_FILES['imageFile']['tmp_name'])) {
                    unlink("assets/front/publication-image/" . $image);
                    $image = $this->common_model->upload_image('imageFile', './assets/front/publication-image/', 'home/editPublication/' . $id);
                }
                $data = array(
                    'image' => $image,
                    'title' => $this->input->post('txtTitle', true),
                    'content' => $this->input->post('txtContent', true),
                    'created' => date('Y-m-d h.i.s a'),
                );
                $this->common_model->updateData($id, 'id', $data, 'ju_publication');
                $this->session->set_flashdata('success_message', 'Publication Edited Successfully');
                redirect('manage-publication', 'refresh');
            }
        }
        $data = array(
            'title' => "Update publication",
            'pageName' => 'EDIT PUBLICATION',
            'mainContent' => 'admin/add-edit-publication-view',
            'publicationData' => $this->common_model->find_data(['name' => 'ju_publication'], 'row', '', ['id' => $id])
        );
        $this->load->view('admin/layout/layout', $data);
    }
}
