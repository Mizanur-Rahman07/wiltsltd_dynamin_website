<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OurCoverage extends CI_Controller
{

// ==============Start OurCoverage service===========
    public function create_coverage_banner($banner_id = null)
    {

        $data['coverage_heading'] = "";
        $data['coverage_banner_img'] = "";

        if ($banner_id) {
            $query = $this->db->query("select*from company where id = $banner_id limit 1 ");
            $banner = $query->row();

            if (!empty($banner)) {

                $data['coverage_heading'] = $banner->coverage_heading;
                $data['coverage_banner_img'] = $banner->coverage_banner_img;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/company/OurCoverage/coverage_banner_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('coverage_heading', 'Heading', 'required');

        if ($this->form_validation->run() == true) {
            $bannervalue['coverage_heading'] = ($this->input->post('coverage_heading', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('coverage_banner_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['coverage_banner_img']);
                $bannervalue['coverage_banner_img'] = $sdata['file_name'];
            }

            $bannervalue['type'] = 'coverage_banner';

            if ($banner_id) {
                $success = $this->db->update('company', $bannervalue, array('id' => $banner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/company/OurCoverage/coverage_banner_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('company', $bannervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/company/OurCoverage/coverage_banner_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/company/our_coverage/banner/create_coverage_banner', $data);
    }

    public function coverage_banner_list()
    {
        $data['result'] = $this->db->get_where('company', array('type' => 'coverage_banner'))->result_array();
        $this->load->view('admin-view/company/our_coverage/banner/coverage_banner_list', $data);
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
            redirect("admin/company/OurCoverage/coverage_banner_list"); // Redirecting To Other Page
        }
    }
    // ==============End OurCoverage section===========

      // ==============Start Map Img Section==============
      public function create_coverage_map($map_id = null)
      {
  
          $data['map_img'] = "";
  
          if ($map_id) {
              $query = $this->db->query("select*from company where id = $map_id limit 1 ");
              $map = $query->row();
  
              if (!empty($map)) {
  
                  $data['map_img'] = $map->map_img;
              } else {
                  $this->session->set_flashdata('error', "Something is wrong Please try again");
                  redirect("admin/company/OurCoverage/coverage_map_list"); // Redirecting To Other Page
              }
          }
          // $this->form_validation->set_rules('map_img', 'Banner Img', 'required');
  
          // if ($this->form_validation->run() == true) {
          if (!empty($_FILES['map_img']['name'])) {
  
              $config['upload_path'] = 'backend_design/uploads/';
              $config['allowed_types'] = 'gif|jpg|png|jpeg';
              $this->load->library('upload', $config);
              if (!$this->upload->do_upload('map_img')) {
                  $data['img_up_errors'] = $this->upload->display_errors();
              } else {
                  $sdata = $this->upload->data();
                  unlink(FCPATH . 'backend_design/uploads/' . $data['map_img']);
                  $mapvalue['map_img'] = $sdata['file_name'];
              }
  
              $mapvalue['type'] = 'coverage_map';
  
              if ($map_id) {
                  $success = $this->db->update('company', $mapvalue, array('id' => $map_id));    //**** (query Builders class)***
  
                  if ($success) {
                      $this->session->set_flashdata('success', " Edited successfully");
                      redirect("admin/company/OurCoverage/coverage_map_list"); // Redirecting To Other Page
                  }
              } else {
                  $success = $this->db->insert('company', $mapvalue);    //**** (query Builders class)***
  
                  if ($success) {
                      $this->session->set_flashdata('success', " Added successfully");
                      redirect("admin/company/OurCoverage/coverage_map_list"); // Redirecting To Other Page
                  }
              }
          }
  
          $this->load->view('admin-view/company/our_coverage/coverage_map/create_coverage_map', $data);
      }
  
      public function coverage_map_list()
      {
          $data['result'] = $this->db->get_where('company', array('type' => 'coverage_map'))->result_array();
          $this->load->view('admin-view/company/our_coverage/coverage_map/coverage_map_list', $data);
      }
  
      public function delete_map($dlt_map)
      {
          if ($dlt_map) {
              $this->db->delete('company', array('id' => $dlt_map));
              $suc = $this->db->affected_rows();
              if ($suc) {
                  $this->session->set_flashdata('success', " Delete successfull");
              } else {
                  $this->session->set_flashdata('error', " Delete is unsuccessfull");
              }
              redirect("admin/company/OurCoverage/coverage_map_list"); // Redirecting To Other Page
          }
      }
      // ==============End map Img Section==============
}