<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Poultry extends CI_Controller
{

// ==============Start poultry banner service===========
    public function create_poultry_banner($banner_id = null)
    {

        $data['poultry_heading'] = "";
        $data['poultry_img'] = "";

        if ($banner_id) {
            $query = $this->db->query("select*from produtcs where id = $banner_id limit 1 ");
            $banner = $query->row();

            if (!empty($banner)) {

                $data['poultry_heading'] = $banner->poultry_heading;
                $data['poultry_img'] = $banner->poultry_img;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/produtcs/Poultry/poultry_banner_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('poultry_heading', 'Heading', 'required');

        if ($this->form_validation->run() == true) {
            $bannervalue['poultry_heading'] = ($this->input->post('poultry_heading', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('poultry_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['poultry_img']);
                $bannervalue['poultry_img'] = $sdata['file_name'];
            }

            $bannervalue['type'] = 'poultry_banner';

            if ($banner_id) {
                $success = $this->db->update('produtcs', $bannervalue, array('id' => $banner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/produtcs/Poultry/poultry_banner_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('produtcs', $bannervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/produtcs/Poultry/poultry_banner_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/produtcs/poultry/banner/create_poultry_banner', $data);
    }

    public function poultry_banner_list()
    {
        $data['result'] = $this->db->get_where('produtcs', array('type' => 'poultry_banner'))->result_array();
        $this->load->view('admin-view/produtcs/poultry/banner/poultry_banner_list', $data);
    }

    public function delete_banner($dlt_banner)
    {
        if ($dlt_banner) {
            $this->db->delete('produtcs', array('id' => $dlt_banner));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/produtcs/Poultry/poultry_banner_list"); // Redirecting To Other Page
        }
    }
    // ==============End poultry banner section===========

    // =============Start poultry anti section=========
    public function create_anti($anti_id = null)
    {

        $data['anti_heading'] = "";
        $data['anti_img'] = "";
        $data['anti_img_title'] = "";
        $data['anti_button'] = "";
        $data['anti_button_link'] = "";

        if ($anti_id) {
            $query = $this->db->query("select*from produtcs where id = $anti_id limit 1 ");
            $anti = $query->row();

            if (!empty($anti)) {

                $data['anti_heading'] = $anti->anti_heading;
                $data['anti_img'] = $anti->anti_img;
                $data['anti_img_title'] = $anti->anti_img_title;
                $data['anti_button'] = $anti->anti_button;
                $data['anti_button_link'] = $anti->anti_button_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/produtcs/Poultry/poultry_anti_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('anti_heading', 'Icon', 'required');
        $this->form_validation->set_rules('anti_button', 'Year', 'required');
        $this->form_validation->set_rules('anti_img_title', 'Year Contant', 'required');
        $this->form_validation->set_rules('anti_button_link', 'Year', 'required');


        if ($this->form_validation->run() == true) {
            $antivalue['anti_heading'] = ($this->input->post('anti_heading', true));
           
            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('anti_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['anti_img']);
                $antivalue['anti_img'] = $sdata['file_name'];
            }
            $antivalue['anti_img_title'] = ($this->input->post('anti_img_title', true));
            $antivalue['anti_button'] = ($this->input->post('anti_button', true));
            $antivalue['anti_button_link'] = ($this->input->post('anti_button_link', true));
            $antivalue['type'] = 'antibiotic';

            if ($anti_id) {
                $success = $this->db->update('produtcs', $antivalue, array('id' => $anti_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/produtcs/Poultry/poultry_anti_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('produtcs', $antivalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/produtcs/Poultry/poultry_anti_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/produtcs/poultry/antibiotic/create_anti', $data);
    }

    public function poultry_anti_list()
    {
        $data['result'] = $this->db->get_where('produtcs', array('type' => 'antibiotic'))->result_array();
        $this->load->view('admin-view/produtcs/poultry/antibiotic/poultry_anti_list', $data);
    }

    public function delete_anti($dlt_anti)
    {
        if ($dlt_anti) {
            $this->db->delete('produtcs', array('id' => $dlt_anti));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/produtcs/Poultry/poultry_anti_list"); // Redirecting To Other Page
        }
    }
    // =============End poultry Antibiotic section=========

    // ============Start  Probiotic Section===============
    public function create_probiotic($prob_id = null)
    {

        $data['pro_heading'] = "";
        $data['pro_img'] = "";
        $data['pro_img_title'] = "";
        $data['pro_button'] = "";
        $data['pro_button_link'] = "";

        if ($prob_id) {
            $query = $this->db->query("select*from produtcs where id = $prob_id limit 1 ");
            $anti = $query->row();

            if (!empty($anti)) {

                $data['pro_heading'] = $anti->pro_heading;
                $data['pro_img'] = $anti->pro_img;
                $data['pro_img_title'] = $anti->pro_img_title;
                $data['pro_button'] = $anti->pro_button;
                $data['pro_button_link'] = $anti->pro_button_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/produtcs/Poultry/poultry_prob_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('pro_heading', 'Icon', 'required');
        $this->form_validation->set_rules('pro_button', 'Year', 'required');
        $this->form_validation->set_rules('pro_img_title', 'Year Contant', 'required');
        $this->form_validation->set_rules('pro_button_link', 'Year', 'required');


        if ($this->form_validation->run() == true) {
            $antivalue['pro_heading'] = ($this->input->post('pro_heading', true));
           
            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('pro_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['pro_img']);
                $antivalue['pro_img'] = $sdata['file_name'];
            }
            $antivalue['pro_img_title'] = ($this->input->post('pro_img_title', true));
            $antivalue['pro_button'] = ($this->input->post('pro_button', true));
            $antivalue['pro_button_link'] = ($this->input->post('pro_button_link', true));
            $antivalue['type'] = 'probiotic';

            if ($prob_id) {
                $success = $this->db->update('produtcs', $antivalue, array('id' => $prob_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/produtcs/Poultry/poultry_prob_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('produtcs', $antivalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/produtcs/Poultry/poultry_prob_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/produtcs/poultry/probiotic/create_probiotic', $data);
    }

    public function poultry_prob_list()
    {
        $data['result'] = $this->db->get_where('produtcs', array('type' => 'probiotic'))->result_array();
        $this->load->view('admin-view/produtcs/poultry/probiotic/poultry_prob_list', $data);
    }

    public function delete_prob($dlt_prob)
    {
        if ($dlt_prob) {
            $this->db->delete('produtcs', array('id' => $dlt_prob));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/produtcs/Poultry/poultry_prob_list"); // Redirecting To Other Page
        }
    }
    // ============End  Probiotic Section===============

    // ===========Start Water Solution section==========
    public function create_water_solution($water_id = null)
    {

        $data['water_heading'] = "";
        $data['water_img'] = "";
        $data['water_img_title'] = "";
        $data['water_img_button'] = "";
        $data['water_button_link'] = "";

        if ($water_id) {
            $query = $this->db->query("select*from produtcs where id = $water_id limit 1 ");
            $water = $query->row();

            if (!empty($water)) {

                $data['water_heading'] = $water->water_heading;
                $data['water_img'] = $water->water_img;
                $data['water_img_title'] = $water->water_img_title;
                $data['water_img_button'] = $water->water_img_button;
                $data['water_button_link'] = $water->water_button_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/produtcs/Poultry/poultry_water_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('water_heading', 'Icon', 'required');
        $this->form_validation->set_rules('water_img_button', 'Year', 'required');
        $this->form_validation->set_rules('water_img_title', 'Year Contant', 'required');
        $this->form_validation->set_rules('water_button_link', 'Year', 'required');


        if ($this->form_validation->run() == true) {
            $watervalue['water_heading'] = ($this->input->post('water_heading', true));
           
            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('water_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['water_img']);
                $watervalue['water_img'] = $sdata['file_name'];
            }
            $watervalue['water_img_title'] = ($this->input->post('water_img_title', true));
            $watervalue['water_img_button'] = ($this->input->post('water_img_button', true));
            $watervalue['water_button_link'] = ($this->input->post('water_button_link', true));
            $watervalue['type'] = 'water';

            if ($water_id) {
                $success = $this->db->update('produtcs', $watervalue, array('id' => $water_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/produtcs/Poultry/poultry_water_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('produtcs', $watervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/produtcs/Poultry/poultry_water_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/produtcs/poultry/water_solution/create_water_solution', $data);
    }

    public function poultry_water_list()
    {
        $data['result'] = $this->db->get_where('produtcs', array('type' => 'water'))->result_array();
        $this->load->view('admin-view/produtcs/poultry/water_solution/poultry_water_list', $data);
    }

    public function delete_water($dlt_water)
    {
        if ($dlt_water) {
            $this->db->delete('produtcs', array('id' => $dlt_water));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/produtcs/Poultry/poultry_water_list"); // Redirecting To Other Page
        }
    }
    // ===========End Water Solution section==========

    // ==========Start Nsaid Solution section===========
    public function create_nsaid_solution($nsaid_id = null)
    {

        $data['nsaid_heading'] = "";
        $data['nsaid_img'] = "";
        $data['nsaid_img_title'] = "";
        $data['nsaid_button'] = "";
        $data['nsaid_button_link'] = "";

        if ($nsaid_id) {
            $query = $this->db->query("select*from produtcs where id = $nsaid_id limit 1 ");
            $nsaid = $query->row();

            if (!empty($nsaid)) {

                $data['nsaid_heading'] = $nsaid->nsaid_heading;
                $data['nsaid_img'] = $nsaid->nsaid_img;
                $data['nsaid_img_title'] = $nsaid->nsaid_img_title;
                $data['nsaid_button'] = $nsaid->nsaid_button;
                $data['nsaid_button_link'] = $nsaid->nsaid_button_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/produtcs/Poultry/poultry_nsaid_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('nsaid_heading', 'Icon', 'required');
        $this->form_validation->set_rules('nsaid_button', 'Year', 'required');
        $this->form_validation->set_rules('nsaid_img_title', 'Year Contant', 'required');
        $this->form_validation->set_rules('nsaid_button_link', 'Year', 'required');


        if ($this->form_validation->run() == true) {
            $nsaidvalue['nsaid_heading'] = ($this->input->post('nsaid_heading', true));
           
            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('nsaid_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['nsaid_img']);
                $nsaidvalue['nsaid_img'] = $sdata['file_name'];
            }
            $nsaidvalue['nsaid_img_title'] = ($this->input->post('nsaid_img_title', true));
            $nsaidvalue['nsaid_button'] = ($this->input->post('nsaid_button', true));
            $nsaidvalue['nsaid_button_link'] = ($this->input->post('nsaid_button_link', true));
            $nsaidvalue['type'] = 'nsaid';

            if ($nsaid_id) {
                $success = $this->db->update('produtcs', $nsaidvalue, array('id' => $nsaid_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/produtcs/Poultry/poultry_nsaid_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('produtcs', $nsaidvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/produtcs/Poultry/poultry_nsaid_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/produtcs/poultry/nsaid_solution/create_nsaid_solution', $data);
    }

    public function poultry_nsaid_list()
    {
        $data['result'] = $this->db->get_where('produtcs', array('type' => 'nsaid'))->result_array();
        $this->load->view('admin-view/produtcs/poultry/nsaid_solution/poultry_nsaid_list', $data);
    }

    public function delete_nsaid($dlt_nsaid)
    {
        if ($dlt_nsaid) {
            $this->db->delete('produtcs', array('id' => $dlt_nsaid));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/produtcs/Poultry/poultry_nsaid_list"); // Redirecting To Other Page
        }
    }
    // ==========End Nsaid Solution section===========

    // ===========Satrt Feed Premix section=================
    public function create_feed_premix($premix_id = null)
    {

        $data['premix_heading'] = "";
        $data['premix_img'] = "";
        $data['premix_img_title'] = "";
        $data['premix_button'] = "";
        $data['premix_button_link'] = "";

        if ($premix_id) {
            $query = $this->db->query("select*from produtcs where id = $premix_id limit 1 ");
            $premix = $query->row();

            if (!empty($premix)) {

                $data['premix_heading'] = $premix->premix_heading;
                $data['premix_img'] = $premix->premix_img;
                $data['premix_img_title'] = $premix->premix_img_title;
                $data['premix_button'] = $premix->premix_button;
                $data['premix_button_link'] = $premix->premix_button_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/produtcs/Poultry/poultry_premix_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('premix_heading', 'Icon', 'required');
        $this->form_validation->set_rules('premix_button', 'Year', 'required');
        $this->form_validation->set_rules('premix_img_title', 'Year Contant', 'required');
        $this->form_validation->set_rules('premix_button_link', 'Year', 'required');


        if ($this->form_validation->run() == true) {
            $premixvalue['premix_heading'] = ($this->input->post('premix_heading', true));
           
            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('premix_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['premix_img']);
                $premixvalue['premix_img'] = $sdata['file_name'];
            }
            $premixvalue['premix_img_title'] = ($this->input->post('premix_img_title', true));
            $premixvalue['premix_button'] = ($this->input->post('premix_button', true));
            $premixvalue['premix_button_link'] = ($this->input->post('premix_button_link', true));
            $premixvalue['type'] = 'premix';

            if ($premix_id) {
                $success = $this->db->update('produtcs', $premixvalue, array('id' => $premix_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/produtcs/Poultry/poultry_premix_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('produtcs', $premixvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/produtcs/Poultry/poultry_premix_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/produtcs/poultry/feed_premix/create_feed_premix', $data);
    }

    public function poultry_premix_list()
    {
        $data['result'] = $this->db->get_where('produtcs', array('type' => 'premix'))->result_array();
        $this->load->view('admin-view/produtcs/poultry/feed_premix/poultry_premix_list', $data);
    }

    public function delete_premix($dlt_premix)
    {
        if ($dlt_premix) {
            $this->db->delete('produtcs', array('id' => $dlt_premix));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/produtcs/Poultry/poultry_premix_list"); // Redirecting To Other Page
        }
    }
    // ===========End Feed Premix section=================

    // ===========Start Disinfectant section=============
    public function create_disinfectant($disi_id = null)
    {

        $data['disi_heading'] = "";
        $data['disi_img'] = "";
        $data['disi_img_title'] = "";
        $data['disi_button'] = "";
        $data['disi_button_link'] = "";

        if ($disi_id) {
            $query = $this->db->query("select*from produtcs where id = $disi_id limit 1 ");
            $disi = $query->row();

            if (!empty($disi)) {

                $data['disi_heading'] = $disi->disi_heading;
                $data['disi_img'] = $disi->disi_img;
                $data['disi_img_title'] = $disi->disi_img_title;
                $data['disi_button'] = $disi->disi_button;
                $data['disi_button_link'] = $disi->disi_button_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/produtcs/Poultry/poultry_disi_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('disi_heading', 'Icon', 'required');
        $this->form_validation->set_rules('disi_button', 'Year', 'required');
        $this->form_validation->set_rules('disi_img_title', 'Year Contant', 'required');
        $this->form_validation->set_rules('disi_button_link', 'Year', 'required');


        if ($this->form_validation->run() == true) {
            $disivalue['disi_heading'] = ($this->input->post('disi_heading', true));
           
            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('disi_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['disi_img']);
                $disivalue['disi_img'] = $sdata['file_name'];
            }
            $disivalue['disi_img_title'] = ($this->input->post('disi_img_title', true));
            $disivalue['disi_button'] = ($this->input->post('disi_button', true));
            $disivalue['disi_button_link'] = ($this->input->post('disi_button_link', true));
            $disivalue['type'] = 'disi';

            if ($disi_id) {
                $success = $this->db->update('produtcs', $disivalue, array('id' => $disi_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/produtcs/Poultry/poultry_disi_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('produtcs', $disivalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/produtcs/Poultry/poultry_disi_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/produtcs/poultry/disinfectant/create_disinfectant', $data);
    }

    public function poultry_disi_list()
    {
        $data['result'] = $this->db->get_where('produtcs', array('type' => 'disi'))->result_array();
        $this->load->view('admin-view/produtcs/poultry/disinfectant/poultry_disi_list', $data);
    }

    public function delete_disi($dlt_disi)
    {
        if ($dlt_disi) {
            $this->db->delete('produtcs', array('id' => $dlt_disi));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/produtcs/Poultry/poultry_disi_list"); // Redirecting To Other Page
        }
    }
    // ===========End Disinfectant section=============
}