<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_us extends CI_Controller
{

    // ==============Start About Banner service===========
    public function create_about_banner($banner_id = null)
    {

        $data['about_heding'] = "";
        $data['about_banner_img'] = "";

        if ($banner_id) {
            $query = $this->db->query("select*from company where id = $banner_id limit 1 ");
            $banner = $query->row();

            if (!empty($banner)) {

                $data['about_heding'] = $banner->about_heding;
                $data['about_banner_img'] = $banner->about_banner_img;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/company/About_us/about_banner_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('about_heding', 'Heading', 'required');

        if ($this->form_validation->run() == true) {
            $bannervalue['about_heding'] = ($this->input->post('about_heding', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('about_banner_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['about_banner_img']);
                $bannervalue['about_banner_img'] = $sdata['file_name'];
            }

            $bannervalue['type'] = 'about_banner';

            if ($banner_id) {
                $success = $this->db->update('company', $bannervalue, array('id' => $banner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/company/About_us/about_banner_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('company', $bannervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/company/About_us/about_banner_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/company/about_us/banner/create_about_banner', $data);
    }

    public function about_banner_list()
    {
        $data['result'] = $this->db->get_where('company', array('type' => 'about_banner'))->result_array();
        $this->load->view('admin-view/company/about_us/banner/about_banner_list', $data);
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
            redirect("admin/company/About_us/about_banner_list"); // Redirecting To Other Page
        }
    }
    // ==============End About Banner section===========

    // ==============Start About Us section==============
    public function create_about_us($about_us_id = null)
    {

        $data['about_us_title'] = "";
        $data['about_contant'] = "";
        $data['video_link'] = "";
        $data['phone_icon'] = "";
        $data['phone_no'] = "";

        if ($about_us_id) {
            $query = $this->db->query("select*from company where id = $about_us_id limit 1 ");
            $aboutUs = $query->row();

            if (!empty($aboutUs)) {

                $data['about_us_title'] = $aboutUs->about_us_title;
                $data['about_contant'] = $aboutUs->about_contant;
                $data['video_link'] = $aboutUs->video_link;
                $data['phone_icon'] = $aboutUs->phone_icon;
                $data['phone_no'] = $aboutUs->phone_no;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/company/About_us/about_us_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('about_us_title', 'Heading', 'required');
        $this->form_validation->set_rules('about_contant', 'About Contant', 'required');
        $this->form_validation->set_rules('video_link', 'Video Link', 'required');
        $this->form_validation->set_rules('phone_icon', 'Icon', 'required');
        $this->form_validation->set_rules('phone_no', 'Phone No', 'required');

        if ($this->form_validation->run() == true) {
            $usvalue['about_us_title'] = ($this->input->post('about_us_title', true));
            $usvalue['about_contant'] = ($this->input->post('about_contant', true));
            $usvalue['video_link'] = ($this->input->post('video_link', true));
            $usvalue['phone_icon'] = ($this->input->post('phone_icon', true));
            $usvalue['phone_no'] = ($this->input->post('phone_no', true));

            $usvalue['type'] = 'about_us';

            if ($about_us_id) {
                $success = $this->db->update('company', $usvalue, array('id' => $about_us_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/company/About_us/about_us_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('company', $usvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/company/About_us/about_us_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/company/about_us/about/create_about_us', $data);
    }

    public function about_us_list()
    {
        $data['result'] = $this->db->get_where('company', array('type' => 'about_us'))->result_array();
        $this->load->view('admin-view/company/about_us/about/about_us_list', $data);
    }

    public function delete_aboutUs($dlt_us)
    {
        if ($dlt_us) {
            $this->db->delete('company', array('id' => $dlt_us));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/company/About_us/about_us_list"); // Redirecting To Other Page
        }
    }
    // ==============End About Us section================

    // ==============Start Our Mission Section==============
    public function create_mission($mission_id = null)
    {

        $data['mission_heading'] = "";
        $data['mission_icon'] = "";
        $data['icon_contant'] = "";

        if ($mission_id) {
            $query = $this->db->query("select*from company where id = $mission_id limit 1 ");
            $mission = $query->row();

            if (!empty($mission)) {

                $data['mission_heading'] = $mission->mission_heading;
                $data['mission_icon'] = $mission->mission_icon;
                $data['icon_contant'] = $mission->icon_contant;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/company/About_us/mission_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('mission_heading', 'Heading', 'required');
        $this->form_validation->set_rules('mission_icon', 'Mission Icon', 'required');
        $this->form_validation->set_rules('icon_contant', 'Icon Contant', 'required');

        if ($this->form_validation->run() == true) {
            $missionvalue['mission_heading'] = ($this->input->post('mission_heading', true));
            $missionvalue['mission_icon'] = ($this->input->post('mission_icon', true));
            $missionvalue['icon_contant'] = ($this->input->post('icon_contant', true));
            $missionvalue['type'] = 'mission';

            if ($mission_id) {
                $success = $this->db->update('company', $missionvalue, array('id' => $mission_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/company/About_us/mission_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('company', $missionvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/company/About_us/mission_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/company/about_us/mission/create_mission', $data);
    }

    public function mission_list()
    {
        $data['result'] = $this->db->get_where('company', array('type' => 'mission'))->result_array();
        $this->load->view('admin-view/company/about_us/mission/mission_list', $data);
    }

    public function delete_mission($dlt_mission)
    {
        if ($dlt_mission) {
            $this->db->delete('company', array('id' => $dlt_mission));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/company/About_us/mission_list"); // Redirecting To Other Page
        }
    }
    // ==============End Our Mission Section==============

    
}