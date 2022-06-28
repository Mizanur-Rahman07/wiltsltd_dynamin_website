<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    // =================Slider Section Start==================
    public function create_slider($slide_id = null)
    {
        $data['slide_img'] = "";
        $data['slide_heading_title'] = "";
        $data['slide_title'] = "";

        if ($slide_id) {
            $query = $this->db->query(" select*from home where id = $slide_id limit 1 ");
            $slide = $query->row();

            if (!empty($slide)) {

                $data['slide_img'] = $slide->slide_img;
                $data['slide_heading_title'] = $slide->slide_heading_title;
                $data['slide_title'] = $slide->slide_title;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/slider_list"); // Redirecting To Other Page
            }
        }
        // $this->form_validation->set_rules('slide_img', 'Slide Img', 'required');
        $this->form_validation->set_rules('slide_heading_title', 'Title', 'required');
        $this->form_validation->set_rules('slide_title', 'Sub Title', 'required');

        if ($this->form_validation->run() == true) {

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('slide_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
                // echo $data['img_up_errors'];
                // exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['slide_img']);
                $insvalue['slide_img'] = $sdata['file_name'];
            }

            $insvalue['slide_heading_title'] = ($this->input->post('slide_heading_title', true));
            $insvalue['slide_title'] = ($this->input->post('slide_title', true));
            $insvalue['type'] = 'slider';

            if ($slide_id) {
                $success = $this->db->update('home', $insvalue, array('id' => $slide_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/slider_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $insvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/slider_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/1st_slide/create_slide', $data);
    }

    public function slider_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'slider'))->result_array();
        $this->load->view('admin-view/home/1st_slide/slide_list', $data);
    }

    public function delete_slider($dlt_slider)
    {
        if ($dlt_slider) {
            $this->db->delete('home', array('id' => $dlt_slider));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/slider_list"); // Redirecting To Other Page
        }
    }
    // =================Slider Section End==================

    // ==================start celebrate section==================
    public function create_celebrate($celebrate_id = null)
    {
        $data['celebrating_img'] = "";
        $data['celebrating_title'] = "";
        $data['celebrating_paragraph'] = "";
        $data['celebrating_button'] = "";
        $data['celebrating_button_link'] = "";

        if ($celebrate_id) {
            $query = $this->db->query("select*from home where id = $celebrate_id limit 1 ");
            $cel = $query->row();

            // $cel = $this->db->get_where('home', array('id' => '$celebrate_id'));

            if (!empty($cel)) {

                $data['celebrating_img'] = $cel->celebrating_img;
                $data['celebrating_title'] = $cel->celebrating_title;
                $data['celebrating_paragraph'] = $cel->celebrating_paragraph;
                $data['celebrating_button'] = $cel->celebrating_button;
                $data['celebrating_button_link'] = $cel->celebrating_button_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/celebrate_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('celebrating_title', 'Title', 'required');
        $this->form_validation->set_rules('celebrating_paragraph', 'Text Area', 'required');
        $this->form_validation->set_rules('celebrating_button', 'Button', 'required');
        $this->form_validation->set_rules('celebrating_button_link', 'Button Link', 'required');

        if ($this->form_validation->run() == true) {

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('celebrating_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
                // echo $data['img_up_errors'];
                // exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['celebrating_img']);
                $celvalue['celebrating_img'] = $sdata['file_name'];
            }

            $celvalue['celebrating_title'] = ($this->input->post('celebrating_title', true));
            $celvalue['celebrating_paragraph'] = ($this->input->post('celebrating_paragraph', true));
            $celvalue['celebrating_button'] = ($this->input->post('celebrating_button', true));
            $celvalue['celebrating_button_link'] = ($this->input->post('celebrating_button_link', true));
            $celvalue['type'] = 'celebrate';

            if ($celebrate_id) {
                $success = $this->db->update('home', $celvalue, array('id' => $celebrate_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/celebrate_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $celvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/celebrate_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/celebrate/create_celebrate', $data);
    }
    public function celebrate_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'celebrate'))->result_array();
        $this->load->view('admin-view/home/celebrate/celebrate_list', $data);
    }

    public function delete_celebrate($dlt_celebrate)
    {
        if ($dlt_celebrate) {
            $this->db->delete('home', array('id' => $dlt_celebrate));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/celebrate_list"); // Redirecting To Other Page
        }
    }
    // ==================End celebrate section==================

    // =================Start Product section================
    public function create_production($production_id = null)
    {

        $data['product_title'] = "";
        $data['product_img'] = "";
        $data['product_img_title'] = "";


        if ($production_id) {
            $query = $this->db->query("select*from home where id = $production_id limit 1 ");
            $pro = $query->row();

            if (!empty($pro)) {

                $data['product_title'] = $pro->product_title;
                $data['product_img'] = $pro->product_img;
                $data['product_img_title'] = $pro->product_img_title;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/production_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('product_title', 'Title', 'required');
        $this->form_validation->set_rules('product_img_title', 'Image Title', 'required');

        if ($this->form_validation->run() == true) {
            $provalue['product_title'] = ($this->input->post('product_title', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('product_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
                // echo $data['img_up_errors'];
                // exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['product_img']);
                $provalue['product_img'] = $sdata['file_name'];
            }

            $provalue['product_img_title'] = ($this->input->post('product_img_title', true));
            $provalue['type'] = 'production';

            if ($production_id) {
                $success = $this->db->update('home', $provalue, array('id' => $production_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/production_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $provalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/production_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/production/create_producton', $data);
    }

    public function production_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'production'))->result_array();
        $this->load->view('admin-view/home/production/production_list', $data);
    }

    public function delete_production($dlt_production)
    {
        if ($dlt_production) {
            $this->db->delete('home', array('id' => $dlt_production));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/celebrate_list"); // Redirecting To Other Page
        }
    }
    // =================End Product section================

    // ===============Start Capabilities service============
    public function create_capabilities($capabil_id = null)
    {

        $data['capabilities_title'] = "";
        $data['capabilities_icon'] = "";
        $data['capabilities_icon_paragraph'] = "";


        if ($capabil_id) {
            $query = $this->db->query("select*from home where id = $capabil_id limit 1 ");
            $cap = $query->row();

            if (!empty($cap)) {

                $data['capabilities_title'] = $cap->capabilities_title;
                $data['capabilities_icon'] = $cap->capabilities_icon;
                $data['capabilities_icon_paragraph'] = $cap->capabilities_icon_paragraph;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/capabilities_list"); // Redirecting To Other Page
            }
        }
        // $this->form_validation->set_rules('capabilities_title', 'Title', 'required');
        $this->form_validation->set_rules('capabilities_icon', 'Image Title', 'required');
        $this->form_validation->set_rules('capabilities_icon_paragraph', 'Image Title', 'required');

        if ($this->form_validation->run() == true) {

            $capvalue['capabilities_title'] = ($this->input->post('capabilities_title', true));
            $capvalue['capabilities_icon'] = ($this->input->post('capabilities_icon', true));
            $capvalue['capabilities_icon_paragraph'] = ($this->input->post('capabilities_icon_paragraph', true));
            $capvalue['type'] = 'capabilities';

            if ($capabil_id) {
                $success = $this->db->update('home', $capvalue, array('id' => $capabil_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/capabilities_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $capvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/capabilities_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/capabilities/create_capabilities', $data);
    }

    public function capabilities_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'capabilities'))->result_array();
        $this->load->view('admin-view/home/capabilities/capabilities_list', $data);
    }

    public function delete_capabilities($dlt_capabil)
    {
        if ($dlt_capabil) {
            $this->db->delete('home', array('id' => $dlt_capabil));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/capabilities_list"); // Redirecting To Other Page
        }
    }

    // ===============End Capabilities service============

    // ==============Start Current Offer service===========
    public function create_current_offer($current_offer_id = null)
    {

        $data['current_title'] = "";
        $data['current_img'] = "";
        $data['current_img_paragraph'] = "";


        if ($current_offer_id) {
            $query = $this->db->query("select*from home where id = $current_offer_id limit 1 ");
            $offer = $query->row();

            if (!empty($offer)) {

                $data['current_title'] = $offer->current_title;
                $data['current_img'] = $offer->current_img;
                $data['current_img_paragraph'] = $offer->current_img_paragraph;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/current_offer_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('current_title', 'Title', 'required');
        $this->form_validation->set_rules('current_img_paragraph', 'Image Title', 'required');

        if ($this->form_validation->run() == true) {
            $cOffervalue['current_title'] = ($this->input->post('current_title', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('current_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
                // echo $data['img_up_errors'];
                // exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['current_img']);
                $cOffervalue['current_img'] = $sdata['file_name'];
            }

            $cOffervalue['current_img_paragraph'] = ($this->input->post('current_img_paragraph', true));
            $cOffervalue['type'] = 'current_ffer';

            if ($current_offer_id) {
                $success = $this->db->update('home', $cOffervalue, array('id' => $current_offer_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/current_offer_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $cOffervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/current_offer_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/current_offer/create_current_offer', $data);
    }

    public function current_offer_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'current_ffer'))->result_array();
        $this->load->view('admin-view/home/current_offer/current_offer_list', $data);
    }

    public function delete_cOffer($dlt_cOffer)
    {
        if ($dlt_cOffer) {
            $this->db->delete('home', array('id' => $dlt_cOffer));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/current_offer_list"); // Redirecting To Other Page
        }
    }
    // ==============End Current Offer service===========

    // ==============Start Our Partners service ===========
    public function create_partner($partner_id = null)
    {

        $data['partner_title'] = "";
        $data['partner_slide_img'] = "";

        if ($partner_id) {
            $query = $this->db->query("select*from home where id = $partner_id limit 1 ");
            $partner = $query->row();

            if (!empty($partner)) {

                $data['partner_title'] = $partner->partner_title;
                $data['partner_slide_img'] = $partner->partner_slide_img;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/partner_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('partner_title', 'Title', 'required');

        if ($this->form_validation->run() == true) {
            $partnervalue['partner_title'] = ($this->input->post('partner_title', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('partner_slide_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
                // echo $data['img_up_errors'];
                // exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['partner_slide_img']);
                $partnervalue['partner_slide_img'] = $sdata['file_name'];
            }

            $partnervalue['type'] = 'partner';

            if ($partner_id) {
                $success = $this->db->update('home', $partnervalue, array('id' => $partner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/partner_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $partnervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/partner_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/partner/create_partner', $data);
    }

    public function partner_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'partner'))->result_array();
        $this->load->view('admin-view/home/partner/partner_list', $data);
    }

    public function delete_partner($dlt_partner)
    {
        if ($dlt_partner) {
            $this->db->delete('home', array('id' => $dlt_partner));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/partner_list"); // Redirecting To Other Page
        }
    }

    // ==============End Our Partners service ===========

    // ==============Start Banner Section==============
    public function create_banner($banner_id = null)
    {

        $data['banner_img'] = "";

        if ($banner_id) {
            $query = $this->db->query("select*from home where id = $banner_id limit 1 ");
            $banner = $query->row();

            if (!empty($banner)) {

                $data['banner_img'] = $banner->banner_img;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Home/banner_list"); // Redirecting To Other Page
            }
        }
        // $this->form_validation->set_rules('banner_img', 'Banner Img', 'required');

        // if ($this->form_validation->run() == true) {
        if (!empty($_FILES['banner_img']['name'])) {

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('banner_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
                // echo $data['img_up_errors'];
                // exit;
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['banner_img']);
                $bannervalue['banner_img'] = $sdata['file_name'];
            }

            $bannervalue['type'] = 'banner';

            if ($banner_id) {
                $success = $this->db->update('home', $bannervalue, array('id' => $banner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Home/banner_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('home', $bannervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Home/banner_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/home/banner/create_banner', $data);
    }

    public function banner_list()
    {
        $data['result'] = $this->db->get_where('home', array('type' => 'banner'))->result_array();
        $this->load->view('admin-view/home/banner/banner_list', $data);
    }

    public function delete_banner($dlt_banner)
    {
        if ($dlt_banner) {
            $this->db->delete('home', array('id' => $dlt_banner));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Home/banner_list"); // Redirecting To Other Page
        }
    }
    // ==============End Banner Section==============
}
