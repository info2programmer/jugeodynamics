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
      'groupList' => $this->common_model->find_data(['name' => 'ju_group'], 'array')
    );
    $this->load->view('admin/layout/layout', $data);
  }

  // This Function For Group ADD View
  public function create()
  {
    if ($this->input->post('btnSubmit') == "submit") {
      $this->form_validation->set_rules('name', 'Group Member Name', 'trim|required');


      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('error_message', validation_errors());
        redirect('create-group', 'refresh');
      } else {
        $data = array(
          'name' => $this->input->post('name', true),
          'memberType' => $this->input->post('memberType', true),
          'image' => $this->common_model->upload_image('imageFile', './assets/front/group-image/', 'create-group'),
          'about' => $this->input->post('about'),
          'link1' => $this->input->post('link1', true),
          'link2' => $this->input->post('link2', true),
          'publisher' => 1
        );
        $this->common_model->insert_record('ju_group', $data);
        $this->session->set_flashdata('success_message', 'Group Insert Successfully');
        redirect('manage-group', 'refresh');
      }
    }
    $data = array(
      'title' => "Create new group",
      'pageName' => 'NEW GROUP MEMBER',
      'mainContent' => 'admin/add-edit-group-view',
      'memberType' => $this->db->query("SELECT * FROM `ju_grouptype`")->result(),
    );
    $this->load->view('admin/layout/layout', $data);
  }



  // This function for delete Group
  public function deleteGroup($id, $image)
  {
    $this->common_model->delete_record('id', $id, 'ju_group');
    unlink("assets/front/group-image/" . $image);
    $this->session->set_flashdata('error_message', 'Group Image Deleted');
    redirect('manage-group', 'refresh');
  }

  public function changeGroupStatus($id, $status)
  {
    $object = array(
      'publisher' => $status
    );
    $this->common_model->updateData($id, 'id', $object, 'ju_group');
    $this->session->set_flashdata('success_message', 'Status Update Successfully');
    redirect('manage-group', 'refresh');
  }

  // This Function For Add Group
  public function editGroup($id)
  {
    if ($this->input->post('btnSubmit') == "submit") {
      $this->form_validation->set_rules('name', 'Group Member Name', 'trim|required');



      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('error_message', validation_errors());
        redirect('home/editGroup/' . $id, 'refresh');
      } else {
        $image = $this->input->post('txtOldImage');
        if (!empty($_FILES['imageFile']['tmp_name'])) {
          unlink("assets/front/group-image/" . $image);
          $image = $this->common_model->upload_image('imageFile', './assets/front/group-image/', 'home/editGroup/' . $id);
        }

        $data = array(
          'name' => $this->input->post('name', true),
          'memberType' => $this->input->post('memberType', true),
          'image' =>  $image,
          'about' => $this->input->post('about'),
          'link1' => $this->input->post('link1', true),
          'link2' => $this->input->post('link2', true),
          'publisher' => 1,

        );
        $this->common_model->updateData($id, 'id', $data, 'ju_group');
        $this->session->set_flashdata('success_message', 'Group Edited Successfully');
        redirect('manage-group', 'refresh');
      }
    }
    $data = array(
      'title' => "Update group",
      'pageName' => 'EDIT GROUP',
      'mainContent' => 'admin/add-edit-group-view',
      'groupData' => $this->common_model->find_data(['name' => 'ju_group'], 'row', '', ['id' => $id]),

      'memberType' => $this->db->query("SELECT * FROM `ju_grouptype`")->result(),
    );
    $this->load->view('admin/layout/layout', $data);
  }
}
