<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    // ==============Start Contact banner service===========
    public function create_contact_banner($banner_id = null)
    {

        $data['contact_heading'] = "";
        $data['contact_banner'] = "";

        if ($banner_id) {
            $query = $this->db->query("select*from contact where id = $banner_id limit 1 ");
            $banner = $query->row();

            if (!empty($banner)) {

                $data['contact_heading'] = $banner->contact_heading;
                $data['contact_banner'] = $banner->contact_banner;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Contact/contact_banner_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('contact_heading', 'Heading', 'required');

        if ($this->form_validation->run() == true) {
            $bannervalue['contact_heading'] = ($this->input->post('contact_heading', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('contact_banner')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['contact_banner']);
                $bannervalue['contact_banner'] = $sdata['file_name'];
            }

            $bannervalue['type'] = 'contact_banner';

            if ($banner_id) {
                $success = $this->db->update('contact', $bannervalue, array('id' => $banner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Contact/contact_banner_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('contact', $bannervalue);    //**** (query Builders class)***

                if ($success) {                                              
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Contact/contact_banner_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/contact/banner/create_contact_banner', $data);
    }

    public function contact_banner_list()
    {
        $data['result'] = $this->db->get_where('contact', array('type' => 'contact_banner'))->result_array();
        $this->load->view('admin-view/contact/banner/contact_banner_list', $data);
    }

    public function delete_banner($dlt_banner)
    {
        if ($dlt_banner) {
            $this->db->delete('contact', array('id' => $dlt_banner));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Contact/contact_banner_list"); // Redirecting To Other Page
        }
    }
    // ==============End our Contact banner section===========

    // ==============Start Contact contact service===========

    public function create_contact($contact_id = null)
    {

        $data['icon'] = "";
        $data['icon_heading'] = "";
        $data['icon_contant'] = "";
        $data['sub_contant'] = "";

        if ($contact_id) {
            $query = $this->db->query("select*from contact where id = $contact_id limit 1 ");
            $contact = $query->row();

            if (!empty($contact)) {

                $data['icon'] = $contact->icon;
                $data['icon_heading'] = $contact->icon_heading;
                $data['icon_contant'] = $contact->icon_contant;
                $data['sub_contant'] = $contact->sub_contant;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Contact/contact_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('icon_heading', 'Heading', 'required');
        $this->form_validation->set_rules('icon_contant', 'Contant', 'required');
        $this->form_validation->set_rules('sub_contant', 'Sub Contant', 'required');

        if ($this->form_validation->run() == true) {
            $contactvalue['icon'] = ($this->input->post('icon', true));
            $contactvalue['icon_heading'] = ($this->input->post('icon_heading', true));
            $contactvalue['icon_contant'] = ($this->input->post('icon_contant', true));
            $contactvalue['sub_contant'] = ($this->input->post('sub_contant', true));

            $contactvalue['type'] = 'contact';

            if ($contact_id) {
                $success = $this->db->update('contact', $contactvalue, array('id' => $contact_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Contact/contact_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('contact', $contactvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Contact/contact_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/contact/contact_section/create_contact', $data);
    }

    public function contact_list()
    {
        $data['result'] = $this->db->get_where('contact', array('type' => 'contact'))->result_array();
        $this->load->view('admin-view/contact/contact_section/contact_list', $data);
    }

    public function delete_contact($dlt_contact)
    {
        if ($dlt_contact) {
            $this->db->delete('contact', array('id' => $dlt_contact));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Contact/contact_list"); // Redirecting To Other Page
        }
    }
    // ==============End our Contact contact section===========
}