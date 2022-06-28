<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TeamOrganogram extends CI_Controller
{

// ==============Start TeamOrganogram service===========
    public function create_organogram_banner($banner_id = null)
    {

        $data['organogram_heading'] = "";
        $data['organogram_banner_img'] = "";

        if ($banner_id) {
            $query = $this->db->query("select*from company where id = $banner_id limit 1 ");
            $banner = $query->row();

            if (!empty($banner)) {

                $data['organogram_heading'] = $banner->organogram_heading;
                $data['organogram_banner_img'] = $banner->organogram_banner_img;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/company/TeamOrganogram/organogram_banner_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('organogram_heading', 'Heading', 'required');

        if ($this->form_validation->run() == true) {
            $bannervalue['organogram_heading'] = ($this->input->post('organogram_heading', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('organogram_banner_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['organogram_banner_img']);
                $bannervalue['organogram_banner_img'] = $sdata['file_name'];
            }

            $bannervalue['type'] = 'organogram_banner';

            if ($banner_id) {
                $success = $this->db->update('company', $bannervalue, array('id' => $banner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/company/TeamOrganogram/organogram_banner_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('company', $bannervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/company/TeamOrganogram/organogram_banner_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/company/team_organogram/banner/create_organogram_banner', $data);
    }

    public function organogram_banner_list()
    {
        $data['result'] = $this->db->get_where('company', array('type' => 'organogram_banner'))->result_array();
        $this->load->view('admin-view/company/team_organogram/banner/organogram_banner_list', $data);
    }

    public function delete_banner($dlt_banner)
    {
        if ($dlt_banner) {
            $this->db->delete('company', array('id' => $dlt_banner));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/company/TeamOrganogram/organogram_banner_list"); // Redirecting To Other Page
        }
    }
    // ==============End TeamOrganogram section===========

      // ==============Start chart Img Section==============
      public function create_organogram_chart($member_chart_id = null)
      {
  
          $data['member_plan_img'] = "";
  
          if ($member_chart_id) {
              $query = $this->db->query("select*from company where id = $member_chart_id limit 1 ");
              $chart = $query->row();
  
              if (!empty($chart)) {
  
                  $data['member_plan_img'] = $chart->member_plan_img;
              } else {
                  $this->session->set_flashdata('error', "Something is wrong Please try again");
                  redirect("admin/company/TeamOrganogram/organogram_chart_list"); // Redirecting To Other Page
              }
          }
          // $this->form_validation->set_rules('member_plan_img', 'Banner Img', 'required');
  
          // if ($this->form_validation->run() == true) {
          if (!empty($_FILES['member_plan_img']['name'])) {
  
              $config['upload_path'] = 'backend_design/uploads/';
              $config['allowed_types'] = 'gif|jpg|png|jpeg';
              $this->load->library('upload', $config);
              if (!$this->upload->do_upload('member_plan_img')) {
                  $data['img_up_errors'] = $this->upload->display_errors();
              } else {
                  $sdata = $this->upload->data();
                  unlink(FCPATH . 'backend_design/uploads/' . $data['member_plan_img']);
                  $chartvalue['member_plan_img'] = $sdata['file_name'];
              }
  
              $chartvalue['type'] = 'plan_chart';
  
              if ($member_chart_id) {
                  $success = $this->db->update('company', $chartvalue, array('id' => $member_chart_id));    //**** (query Builders class)***
  
                  if ($success) {
                      $this->session->set_flashdata('success', " Edited successfully");
                      redirect("admin/company/TeamOrganogram/organogram_chart_list"); // Redirecting To Other Page
                  }
              } else {
                  $success = $this->db->insert('company', $chartvalue);    //**** (query Builders class)***
  
                  if ($success) {
                      $this->session->set_flashdata('success', " Added successfully");
                      redirect("admin/company/TeamOrganogram/organogram_chart_list"); // Redirecting To Other Page
                  }
              }
          }
  
          $this->load->view('admin-view/company/team_organogram/member_chart/create_organogram_chart', $data);
      }
  
      public function organogram_chart_list()
      {
          $data['result'] = $this->db->get_where('company', array('type' => 'plan_chart'))->result_array();
          $this->load->view('admin-view/company/team_organogram/member_chart/organogram_chart_list', $data);
      }
  
      public function delete_plan($dlt_plan)
      {
          if ($dlt_plan) {
              $this->db->delete('company', array('id' => $dlt_plan));
              $suc = $this->db->affected_rows();
              if ($suc) {
                  $this->session->set_flashdata('success', " Delete successfull");
              } else {
                  $this->session->set_flashdata('error', " Delete is unsuccessfull");
              }
              redirect("admin/company/TeamOrganogram/organogram_chart_list"); // Redirecting To Other Page
          }
      }
      // ==============End chart Img Section==============
}