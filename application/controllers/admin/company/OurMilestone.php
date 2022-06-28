<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OurMilestone extends CI_Controller
{

    // ==============Start OurMilestone service===========
    public function create_milestone_banner($banner_id = null)
    {

        $data['mileston_heading'] = "";
        $data['mileston_banner_img'] = "";

        if ($banner_id) {
            $query = $this->db->query("select*from company where id = $banner_id limit 1 ");
            $banner = $query->row();

            if (!empty($banner)) {

                $data['mileston_heading'] = $banner->mileston_heading;
                $data['mileston_banner_img'] = $banner->mileston_banner_img;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/company/OurMilestone/milestone_banner_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('mileston_heading', 'Heading', 'required');

        if ($this->form_validation->run() == true) {
            $bannervalue['mileston_heading'] = ($this->input->post('mileston_heading', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('mileston_banner_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['mileston_banner_img']);
                $bannervalue['mileston_banner_img'] = $sdata['file_name'];
            }

            $bannervalue['type'] = 'milestone_banner';

            if ($banner_id) {
                $success = $this->db->update('company', $bannervalue, array('id' => $banner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/company/OurMilestone/milestone_banner_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('company', $bannervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/company/OurMilestone/milestone_banner_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/company/our_milestone/banner/create_milestone_banner', $data);
    }

    public function milestone_banner_list()
    {
        $data['result'] = $this->db->get_where('company', array('type' => 'milestone_banner'))->result_array();
        $this->load->view('admin-view/company/our_milestone/banner/milestone_banner_list', $data);
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
            redirect("admin/company/OurMilestone/milestone_banner_list"); // Redirecting To Other Page
        }
    }
    // ==============End OurMilestone section===========

    // =============Start Milestone Contant============
    public function create_milestone_calender($mileCalender_id = null)
    {

        $data['year_icon'] = "";
        $data['year_title'] = "";
        $data['year_contant'] = "";

        if ($mileCalender_id) {
            $query = $this->db->query("select*from company where id = $mileCalender_id limit 1 ");
            $mile = $query->row();

            if (!empty($mile)) {

                $data['year_icon'] = $mile->year_icon;
                $data['year_title'] = $mile->year_title;
                $data['year_contant'] = $mile->year_contant;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/company/OurMilestone/milestone_calender_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('year_icon', 'Icon', 'required');
        $this->form_validation->set_rules('year_title', 'Year', 'required');
        $this->form_validation->set_rules('year_contant', 'Year Contant', 'required');

        if ($this->form_validation->run() == true) {
            $milevalue['year_icon'] = ($this->input->post('year_icon', true));
            $milevalue['year_title'] = ($this->input->post('year_title', true));
            $milevalue['year_contant'] = ($this->input->post('year_contant', true));

            $milevalue['type'] = 'milestone_calender';

            if ($mileCalender_id) {
                $success = $this->db->update('company', $milevalue, array('id' => $mileCalender_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/company/OurMilestone/milestone_calender_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('company', $milevalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/company/OurMilestone/milestone_calender_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/company/our_milestone/calender/create_milestone_calender', $data);
    }

    public function milestone_calender_list()
    {
        $data['result'] = $this->db->get_where('company', array('type' => 'milestone_calender'))->result_array();
        $this->load->view('admin-view/company/our_milestone/calender/milestone_calender_list', $data);
    }

    public function delete_calender($dlt_calender)
    {
        if ($dlt_calender) {
            $this->db->delete('company', array('id' => $dlt_calender));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/company/OurMilestone/milestone_calender_list"); // Redirecting To Other Page
        }
    }
    // =============End Milestone Contant============
}