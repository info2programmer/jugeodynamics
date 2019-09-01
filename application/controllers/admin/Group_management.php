<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Group_managment extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Kolkata');
    if (!$this->session->userdata('adminlogin')) {
      redirect('manage-website', 'refresh');
    }
  }


  // This Function For Group Listing View
  public function index()
  {
    $data = array(
      'title' => "Manage home page group",
      'pageName' => 'GROUP MANAGEMENT',
      'mainContent' => 'admin/group-list-view',
      'publicationList' => $this->common_model->find_data(['name' => 'ju_group'], 'array')
    );
    $this->load->view('admin/layout/layout', $data);
  }

  // This Function For Group ADD View
  public function create()
  {
    if ($this->input->post('btnSubmit') == "submit") {
      $this->form_validation->set_rules('txtTitle', 'Group Title', 'trim|required');
      $this->form_validation->set_rules('txtContent', 'Content', 'trim|required');
      $this->form_validation->set_rules('txtDate', 'Date', 'trim|required');
      $this->form_validation->set_rules('ddlType', 'Type', 'trim|required');


      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('error_message', validation_errors());
        redirect('create-group', 'refresh');
      } else {
        $data = array(
          'date' => $this->input->post('txtDate', true),
          'title' => $this->input->post('txtTitle', true),
          'content' => $this->input->post('txtContent', true),
          'categoy' => $this->input->post('ddlType', true),
          'created' => date('Y-m-d h.i.s a'),
          'publisher' => 1
        );
        $this->common_model->insert_record('ju_publication', $data);
        $this->session->set_flashdata('success_message', 'Group Insert Successfully');
        redirect('manage-group', 'refresh');
      }
    }
    $data = array(
      'title' => "Create new group",
      'pageName' => 'NEW GROUP',
      'mainContent' => 'admin/add-edit-group-view'
    );
    $this->load->view('admin/layout/layout', $data);
  }



  // This function for delete Group
  public function deletePublication($id)
  {
    $this->common_model->delete_record('id', $id, 'ju_publication');
    $this->session->set_flashdata('error_message', 'Group Image Deleted');
    redirect('manage-group', 'refresh');
  }

  public function changePublicationStatus($id, $status)
  {
    $object = array(
      'publisher' => $status
    );
    $this->common_model->updateData($id, 'id', $object, 'ju_publication');
    $this->session->set_flashdata('success_message', 'Status Update Successfully');
    redirect('manage-group', 'refresh');
  }

  // This Function For Add Group
  public function editPublication($id)
  {
    if ($this->input->post('btnSubmit') == "submit") {
      $this->form_validation->set_rules('txtTitle', 'Group Title', 'trim|required');
      $this->form_validation->set_rules('txtContent', 'Content', 'trim|required');
      $this->form_validation->set_rules('txtDate', 'Date', 'trim|required');
      $this->form_validation->set_rules('ddlType', 'Type', 'trim|required');



      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('error_message', validation_errors());
        redirect('home/editPublication/' . $id, 'refresh');
      } else {

        $data = array(
          'date' => $this->input->post('txtDate', true),
          'title' => $this->input->post('txtTitle', true),
          'content' => $this->input->post('txtContent', true),
          'categoy' => $this->input->post('ddlType', true),
          'created' => date('Y-m-d h.i.s a')
        );
        $this->common_model->updateData($id, 'id', $data, 'ju_publication');
        $this->session->set_flashdata('success_message', 'Group Edited Successfully');
        redirect('manage-group', 'refresh');
      }
    }
    $data = array(
      'title' => "Update group",
      'pageName' => 'EDIT GROUP',
      'mainContent' => 'admin/add-edit-group-view',
      'publicationData' => $this->common_model->find_data(['name' => 'ju_publication'], 'row', '', ['id' => $id])
    );
    $this->load->view('admin/layout/layout', $data);
  }
}
