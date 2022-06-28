<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Our_Team extends CI_Controller
{

    // ==============Start Team Banner service===========
    public function create_team_banner($banner_id = null)
    {

        $data['team_heading'] = "";
        $data['team_banner_img'] = "";

        if ($banner_id) {
            $query = $this->db->query("select*from company where id = $banner_id limit 1 ");
            $banner = $query->row();

            if (!empty($banner)) {

                $data['team_heading'] = $banner->team_heading;
                $data['team_banner_img'] = $banner->team_banner_img;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/company/Our_Team/team_banner_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('team_heading', 'Heading', 'required');

        if ($this->form_validation->run() == true) {
            $bannervalue['team_heading'] = ($this->input->post('team_heading', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('team_banner_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['team_banner_img']);
                $bannervalue['team_banner_img'] = $sdata['file_name'];
            }

            $bannervalue['type'] = 'team_banner';

            if ($banner_id) {
                $success = $this->db->update('company', $bannervalue, array('id' => $banner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/company/Our_Team/team_banner_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('company', $bannervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/company/Our_Team/team_banner_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/company/our_team/banner/create_team_banner', $data);
    }

    public function team_banner_list()
    {
        $data['result'] = $this->db->get_where('company', array('type' => 'team_banner'))->result_array();
        $this->load->view('admin-view/company/our_team/banner/team_banner_list', $data);
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
            redirect("admin/company/Our_Team/team_banner_list"); // Redirecting To Other Page
        }
    }
    // ==============End Team Banner section===========

    // ==============Start Team Image Section==========
    public function create_team_member($member_id = null)
    {

        $data['team_member_img'] = "";
        $data['member_name'] = "";
        $data['member_surname'] = "";

        if ($member_id) {
            $query = $this->db->query("select*from company where id = $member_id limit 1 ");
            $member = $query->row();

            if (!empty($member)) {

                $data['team_member_img'] = $member->team_member_img;
                $data['member_name'] = $member->member_name;
                $data['member_surname'] = $member->member_surname;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/company/Our_Team/team_member_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('member_name', 'Member Name', 'required');
        $this->form_validation->set_rules('member_surname', 'SurName', 'required');

        if ($this->form_validation->run() == true) {
           
            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('team_member_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['team_member_img']);
                $membervalue['team_member_img'] = $sdata['file_name'];
            }
            
            $membervalue['member_name'] = ($this->input->post('member_name', true));
            $membervalue['member_surname'] = ($this->input->post('member_surname', true));
            $membervalue['type'] = 'team_member';

            if ($member_id) {
                $success = $this->db->update('company', $membervalue, array('id' => $member_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/company/Our_Team/team_member_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('company', $membervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/company/Our_Team/team_member_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/company/our_team/team_member/create_team_member', $data);
    }

    public function team_member_list()
    {
        $data['result'] = $this->db->get_where('company', array('type' => 'team_member'))->result_array();
        $this->load->view('admin-view/company/our_team/team_member/team_member_list', $data);
    }

    public function delete_member($dlt_member)
    {
        if ($dlt_member) {
            $this->db->delete('company', array('id' => $dlt_member));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/company/Our_Team/team_member_list"); // Redirecting To Other Page
        }
    }
    // ==============End Team Image Section==========
}