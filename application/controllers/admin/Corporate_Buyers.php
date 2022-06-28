<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Corporate_Buyers extends CI_Controller
{

    // ==============Start Our corporate banner service===========
    public function create_corporate_banner($banner_id = null)
    {

        $data['corporate_heading'] = "";
        $data['corporate_banner'] = "";

        if ($banner_id) {
            $query = $this->db->query("select*from corporate_buyers where id = $banner_id limit 1 ");
            $banner = $query->row();

            if (!empty($banner)) {

                $data['corporate_heading'] = $banner->corporate_heading;
                $data['corporate_banner'] = $banner->corporate_banner;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Corporate_Buyers/corporate_banner_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('corporate_heading', 'Heading', 'required');

        if ($this->form_validation->run() == true) {
            $bannervalue['corporate_heading'] = ($this->input->post('corporate_heading', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('corporate_banner')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['corporate_banner']);
                $bannervalue['corporate_banner'] = $sdata['file_name'];
            }

            $bannervalue['type'] = 'corporate_banner';

            if ($banner_id) {
                $success = $this->db->update('corporate_buyers', $bannervalue, array('id' => $banner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Corporate_Buyers/corporate_banner_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('corporate_buyers', $bannervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Corporate_Buyers/corporate_banner_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/corporate_buyers/banner/create_corporate_banner', $data);
    }

    public function corporate_banner_list()
    {
        $data['result'] = $this->db->get_where('corporate_buyers', array('type' => 'corporate_banner'))->result_array();
        $this->load->view('admin-view/corporate_buyers/banner/corporate_banner_list', $data);
    }

    public function delete_banner($dlt_banner)
    {
        if ($dlt_banner) {
            $this->db->delete('corporate_buyers', array('id' => $dlt_banner));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Corporate_Buyers/corporate_banner_list"); // Redirecting To Other Page
        }
    }
    // ==============End our corporate banner section===========

    // =============Start corporate corporate section=========
    public function create_corporate_contant($corporate_id = null)
    {
        $data['corporate_img'] = "";
        $data['corporate_contant'] = "";
        $data['button'] = "";
        $data['button_link'] = "";

        if ($corporate_id) {
            $query = $this->db->query("select*from corporate_buyers where id = $corporate_id limit 1 ");
            $corporate = $query->row();

            if (!empty($corporate)) {
                $data['corporate_img'] = $corporate->corporate_img;
                $data['corporate_contant'] = $corporate->corporate_contant;
                $data['button'] = $corporate->button;
                $data['button_link'] = $corporate->button_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Corporate_Buyers/corporate_contant_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('corporate_contant', 'corporate_contant', 'required');
        $this->form_validation->set_rules('button', ' Button', 'required');
        $this->form_validation->set_rules('button_link', 'Button Link', 'required');


        if ($this->form_validation->run() == true) {

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('corporate_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['corporate_img']);
                $corporatevalue['corporate_img'] = $sdata['file_name'];
            }
            $corporatevalue['corporate_contant'] = ($this->input->post('corporate_contant', true));
            $corporatevalue['button'] = ($this->input->post('button', true));
            $corporatevalue['button_link'] = ($this->input->post('button_link', true));
            $corporatevalue['type'] = 'corporate';

            if ($corporate_id) {
                $success = $this->db->update('corporate_buyers', $corporatevalue, array('id' => $corporate_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/corporate_buyers/corporate_contant_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('corporate_buyers', $corporatevalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Corporate_Buyers/corporate_contant_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/corporate_buyers/corporate_contant/create_corporate_contant', $data);
    }

    public function corporate_contant_list()
    {
        $data['result'] = $this->db->get_where('corporate_buyers', array('type' => 'corporate'))->result_array();
        $this->load->view('admin-view/corporate_buyers/corporate_contant/corporate_contant_list', $data);
    }

    public function delete_corporate($dlt_corporate)
    {
        if ($dlt_corporate) {
            $this->db->delete('corporate_buyers', array('id' => $dlt_corporate));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Corporate_Buyers/corporate_contant_list"); // Redirecting To Other Page
        }
    }
    // =============End corporate corporate section=========

}
