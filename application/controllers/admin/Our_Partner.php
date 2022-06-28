<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Our_Partner extends CI_Controller
{

// ==============Start Our Partner banner service===========
    public function create_partner_banner($banner_id = null)
    {

        $data['partner_heading'] = "";
        $data['partner_banner'] = "";

        if ($banner_id) {
            $query = $this->db->query("select*from our_partners where id = $banner_id limit 1 ");
            $banner = $query->row();

            if (!empty($banner)) {

                $data['partner_heading'] = $banner->partner_heading;
                $data['partner_banner'] = $banner->partner_banner;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Our_Partner/partner_banner_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('partner_heading', 'Heading', 'required');

        if ($this->form_validation->run() == true) {
            $bannervalue['partner_heading'] = ($this->input->post('partner_heading', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('partner_banner')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['partner_banner']);
                $bannervalue['partner_banner'] = $sdata['file_name'];
            }

            $bannervalue['type'] = 'partner_banner';

            if ($banner_id) {
                $success = $this->db->update('our_partners', $bannervalue, array('id' => $banner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Our_Partner/partner_banner_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('our_partners', $bannervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Our_Partner/partner_banner_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/our_partner/banner/create_partner_banner', $data);
    }

    public function partner_banner_list()
    {
        $data['result'] = $this->db->get_where('our_partners', array('type' => 'partner_banner'))->result_array();
        $this->load->view('admin-view/our_partner/banner/partner_banner_list', $data);
    }

    public function delete_banner($dlt_banner)
    {
        if ($dlt_banner) {
            $this->db->delete('our_partners', array('id' => $dlt_banner));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Our_Partner/partner_banner_list"); // Redirecting To Other Page
        }
    }
    // ==============End our Partner banner section===========

    // =============Start partner partner section=========
    public function create_contant($partner_id = null)
    {

        $data['contant_title'] = "";
        $data['contant'] = "";
        $data['contant_img'] = "";
        $data['button'] = "";
        $data['button_link'] = "";

        if ($partner_id) {
            $query = $this->db->query("select*from our_partners where id = $partner_id limit 1 ");
            $partner = $query->row();

            if (!empty($partner)) {

                $data['contant_title'] = $partner->contant_title;
                $data['contant'] = $partner->contant;
                $data['contant_img'] = $partner->contant_img;
                $data['button'] = $partner->button;
                $data['button_link'] = $partner->button_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Our_Partner/partner_contant_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('contant_title', 'Icon', 'required');
        $this->form_validation->set_rules('button', 'Year', 'required');
        $this->form_validation->set_rules('contant', 'Year Contant', 'required');
        $this->form_validation->set_rules('button_link', 'Year', 'required');


        if ($this->form_validation->run() == true) {
            $partnervalue['contant_title'] = ($this->input->post('contant_title', true));
            $partnervalue['contant'] = ($this->input->post('contant', true));
           
            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('contant_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['contant_img']);
                $partnervalue['contant_img'] = $sdata['file_name'];
            }
            $partnervalue['button'] = ($this->input->post('button', true));
            $partnervalue['button_link'] = ($this->input->post('button_link', true));
            $partnervalue['type'] = 'contant';

            if ($partner_id) {
                $success = $this->db->update('our_partners', $partnervalue, array('id' => $partner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Our_Partner/partner_contant_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('our_partners', $partnervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Our_Partner/partner_contant_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/Our_Partner/partner_contant/create_contant', $data);
    }

    public function partner_contant_list()
    {
        $data['result'] = $this->db->get_where('our_partners', array('type' => 'contant'))->result_array();
        $this->load->view('admin-view/Our_Partner/partner_contant/partner_contant_list', $data);
    }

    public function delete_partner($dlt_partner)
    {
        if ($dlt_partner) {
            $this->db->delete('our_partners', array('id' => $dlt_partner));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Our_Partner/partner_contant_list"); // Redirecting To Other Page
        }
    }
    // =============End partner partner section=========

}