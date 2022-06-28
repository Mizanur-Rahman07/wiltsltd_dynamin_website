<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dairy extends CI_Controller
{

// ==============Start dairy banner service===========
    public function create_dairy_banner($banner_id = null)
    {

        $data['dairy_heading'] = "";
        $data['dairy_img'] = "";

        if ($banner_id) {
            $query = $this->db->query("select*from produtcs where id = $banner_id limit 1 ");
            $banner = $query->row();

            if (!empty($banner)) {

                $data['dairy_heading'] = $banner->dairy_heading;
                $data['dairy_img'] = $banner->dairy_img;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/produtcs/Dairy/dairy_banner_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('dairy_heading', 'Heading', 'required');

        if ($this->form_validation->run() == true) {
            $bannervalue['dairy_heading'] = ($this->input->post('dairy_heading', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('dairy_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['dairy_img']);
                $bannervalue['dairy_img'] = $sdata['file_name'];
            }

            $bannervalue['type'] = 'dairy_banner';

            if ($banner_id) {
                $success = $this->db->update('produtcs', $bannervalue, array('id' => $banner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/produtcs/Dairy/dairy_banner_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('produtcs', $bannervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/produtcs/Dairy/dairy_banner_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/produtcs/dairy/banner/create_dairy_banner', $data);
    }

    public function dairy_banner_list()
    {
        $data['result'] = $this->db->get_where('produtcs', array('type' => 'dairy_banner'))->result_array();
        $this->load->view('admin-view/produtcs/dairy/banner/dairy_banner_list', $data);
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
            redirect("admin/produtcs/Dairy/dairy_banner_list"); // Redirecting To Other Page
        }
    }
    // ==============End dairy banner section===========

    // =============Start dairy antiInjec section=========
    public function create_antiInjec($antiInjec_id = null)
    {

        $data['antiInjec_heading'] = "";
        $data['antiInjec_img'] = "";
        $data['antiInjec_img_title'] = "";
        $data['antiInjec_button'] = "";
        $data['antiInjec_button_link'] = "";

        if ($antiInjec_id) {
            $query = $this->db->query("select*from produtcs where id = $antiInjec_id limit 1 ");
            $antiInjec = $query->row();

            if (!empty($antiInjec)) {

                $data['antiInjec_heading'] = $antiInjec->antiInjec_heading;
                $data['antiInjec_img'] = $antiInjec->antiInjec_img;
                $data['antiInjec_img_title'] = $antiInjec->antiInjec_img_title;
                $data['antiInjec_button'] = $antiInjec->antiInjec_button;
                $data['antiInjec_button_link'] = $antiInjec->antiInjec_button_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/produtcs/Dairy/dairy_antiInjec_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('antiInjec_heading', 'Icon', 'required');
        $this->form_validation->set_rules('antiInjec_button', 'Year', 'required');
        $this->form_validation->set_rules('antiInjec_img_title', 'Year Contant', 'required');
        $this->form_validation->set_rules('antiInjec_button_link', 'Year', 'required');


        if ($this->form_validation->run() == true) {
            $antiInjecvalue['antiInjec_heading'] = ($this->input->post('antiInjec_heading', true));
           
            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('antiInjec_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['antiInjec_img']);
                $antiInjecvalue['antiInjec_img'] = $sdata['file_name'];
            }
            $antiInjecvalue['antiInjec_img_title'] = ($this->input->post('antiInjec_img_title', true));
            $antiInjecvalue['antiInjec_button'] = ($this->input->post('antiInjec_button', true));
            $antiInjecvalue['antiInjec_button_link'] = ($this->input->post('antiInjec_button_link', true));
            $antiInjecvalue['type'] = 'antiInjec';

            if ($antiInjec_id) {
                $success = $this->db->update('produtcs', $antiInjecvalue, array('id' => $antiInjec_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/produtcs/Dairy/dairy_antiInjec_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('produtcs', $antiInjecvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/produtcs/Dairy/dairy_antiInjec_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/produtcs/dairy/antiInjec/create_antiInjec', $data);
    }

    public function dairy_antiInjec_list()
    {
        $data['result'] = $this->db->get_where('produtcs', array('type' => 'antiInjec'))->result_array();
        $this->load->view('admin-view/produtcs/dairy/antiInjec/dairy_antiInjec_list', $data);
    }

    public function delete_antiInjec($dlt_antiInjec)
    {
        if ($dlt_antiInjec) {
            $this->db->delete('produtcs', array('id' => $dlt_antiInjec));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/produtcs/Dairy/dairy_antiInjec_list"); // Redirecting To Other Page
        }
    }
    // =============End dairy antiInjec section=========

  // ============Start  hormoniotic Section===============
  public function create_hormone($hormon_id = null)
  {

      $data['hormone_heading'] = "";
      $data['hormone_img'] = "";
      $data['hormone_img_title'] = "";
      $data['hormone_button'] = "";
      $data['hormone_button_link'] = "";

      if ($hormon_id) {
          $query = $this->db->query("select*from produtcs where id = $hormon_id limit 1 ");
          $hormon = $query->row();

          if (!empty($hormon)) {

              $data['hormone_heading'] = $hormon->hormone_heading;
              $data['hormone_img'] = $hormon->hormone_img;
              $data['hormone_img_title'] = $hormon->hormone_img_title;
              $data['hormone_button'] = $hormon->hormone_button;
              $data['hormone_button_link'] = $hormon->hormone_button_link;
          } else {
              $this->session->set_flashdata('error', "Something is wrong Please try again");
              redirect("admin/produtcs/Dairy/dairy_hormon_list"); // Redirecting To Other Page
          }
      }
      $this->form_validation->set_rules('hormone_heading', 'Icon', 'required');
      $this->form_validation->set_rules('hormone_button', 'Year', 'required');
      $this->form_validation->set_rules('hormone_img_title', 'Year Contant', 'required');
      $this->form_validation->set_rules('hormone_button_link', 'Year', 'required');


      if ($this->form_validation->run() == true) {
          $hormonvalue['hormone_heading'] = ($this->input->post('hormone_heading', true));
         
          $config['upload_path'] = 'backend_design/uploads/';
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('hormone_img')) {
              $data['img_up_errors'] = $this->upload->display_errors();
          } else {
              $sdata = $this->upload->data();
              unlink(FCPATH . 'backend_design/uploads/' . $data['hormone_img']);
              $hormonvalue['hormone_img'] = $sdata['file_name'];
          }
          $hormonvalue['hormone_img_title'] = ($this->input->post('hormone_img_title', true));
          $hormonvalue['hormone_button'] = ($this->input->post('hormone_button', true));
          $hormonvalue['hormone_button_link'] = ($this->input->post('hormone_button_link', true));
          $hormonvalue['type'] = 'hormoniotic';

          if ($hormon_id) {
              $success = $this->db->update('produtcs', $hormonvalue, array('id' => $hormon_id));    //**** (query Builders class)***

              if ($success) {
                  $this->session->set_flashdata('success', " Edited successfully");
                  redirect("admin/produtcs/Dairy/dairy_hormon_list"); // Redirecting To Other Page
              }
          } else {
              $success = $this->db->insert('produtcs', $hormonvalue);    //**** (query Builders class)***

              if ($success) {
                  $this->session->set_flashdata('success', " Added successfully");
                  redirect("admin/produtcs/Dairy/dairy_hormon_list"); // Redirecting To Other Page
              }
          }
      }

      $this->load->view('admin-view/produtcs/dairy/hormoniotic/create_hormone', $data);
  }

  public function dairy_hormon_list()
  {
      $data['result'] = $this->db->get_where('produtcs', array('type' => 'hormoniotic'))->result_array();
      $this->load->view('admin-view/produtcs/dairy/hormoniotic/dairy_hormon_list', $data);
  }

  public function delete_hormone($dlt_hormon)
  {
      if ($dlt_hormon) {
          $this->db->delete('produtcs', array('id' => $dlt_hormon));
          $suc = $this->db->affected_rows();
          if ($suc) {
              $this->session->set_flashdata('success', " Delete successfull");
          } else {
              $this->session->set_flashdata('error', " Delete is unsuccessfull");
          }
          redirect("admin/produtcs/Dairy/dairy_hormon_list"); // Redirecting To Other Page
      }
  }
  // ============End  hormoniotic Section===============

   // ============Start  nsaidInjection Section===============
   public function create_nsaidInjec($nsaidInjec_id = null)
   {

       $data['nsaidInjec_heading'] = "";
       $data['nsaidInjec_img'] = "";
       $data['nsaidInjec_img_title'] = "";
       $data['nsaidInjec_button'] = "";
       $data['nsaidInjec_button_link'] = "";

       if ($nsaidInjec_id) {
           $query = $this->db->query("select*from produtcs where id = $nsaidInjec_id limit 1 ");
           $nsaidInjec = $query->row();

           if (!empty($nsaidInjec)) {

               $data['nsaidInjec_heading'] = $nsaidInjec->nsaidInjec_heading;
               $data['nsaidInjec_img'] = $nsaidInjec->nsaidInjec_img;
               $data['nsaidInjec_img_title'] = $nsaidInjec->nsaidInjec_img_title;
               $data['nsaidInjec_button'] = $nsaidInjec->nsaidInjec_button;
               $data['nsaidInjec_button_link'] = $nsaidInjec->nsaidInjec_button_link;
           } else {
               $this->session->set_flashdata('error', "Something is wrong Please try again");
               redirect("admin/produtcs/Dairy/dairy_nsaidInjec_list"); // Redirecting To Other Page
           }
       }
       $this->form_validation->set_rules('nsaidInjec_heading', 'Icon', 'required');
       $this->form_validation->set_rules('nsaidInjec_button', 'Year', 'required');
       $this->form_validation->set_rules('nsaidInjec_img_title', 'Year Contant', 'required');
       $this->form_validation->set_rules('nsaidInjec_button_link', 'Year', 'required');


       if ($this->form_validation->run() == true) {
           $nsaidInjecvalue['nsaidInjec_heading'] = ($this->input->post('nsaidInjec_heading', true));
          
           $config['upload_path'] = 'backend_design/uploads/';
           $config['allowed_types'] = 'gif|jpg|png|jpeg';
           $this->load->library('upload', $config);
           if (!$this->upload->do_upload('nsaidInjec_img')) {
               $data['img_up_errors'] = $this->upload->display_errors();
           } else {
               $sdata = $this->upload->data();
               unlink(FCPATH . 'backend_design/uploads/' . $data['nsaidInjec_img']);
               $nsaidInjecvalue['nsaidInjec_img'] = $sdata['file_name'];
           }
           $nsaidInjecvalue['nsaidInjec_img_title'] = ($this->input->post('nsaidInjec_img_title', true));
           $nsaidInjecvalue['nsaidInjec_button'] = ($this->input->post('nsaidInjec_button', true));
           $nsaidInjecvalue['nsaidInjec_button_link'] = ($this->input->post('nsaidInjec_button_link', true));
           $nsaidInjecvalue['type'] = 'nsaidInjection';

           if ($nsaidInjec_id) {
               $success = $this->db->update('produtcs', $nsaidInjecvalue, array('id' => $nsaidInjec_id));    //**** (query Builders class)***

               if ($success) {
                   $this->session->set_flashdata('success', " Edited successfully");
                   redirect("admin/produtcs/Dairy/dairy_nsaidInjec_list"); // Redirecting To Other Page
               }
           } else {
               $success = $this->db->insert('produtcs', $nsaidInjecvalue);    //**** (query Builders class)***

               if ($success) {
                   $this->session->set_flashdata('success', " Added successfully");
                   redirect("admin/produtcs/Dairy/dairy_nsaidInjec_list"); // Redirecting To Other Page
               }
           }
       }

       $this->load->view('admin-view/produtcs/dairy/nsaidInjection/create_nsaidInjec', $data);
   }

   public function dairy_nsaidInjec_list()
   {
       $data['result'] = $this->db->get_where('produtcs', array('type' => 'nsaidInjection'))->result_array();
       $this->load->view('admin-view/produtcs/dairy/nsaidInjection/dairy_nsaidInjec_list', $data);
   }

   public function delete_nsaidInjec($dlt_nsaidInjec)
   {
       if ($dlt_nsaidInjec) {
           $this->db->delete('produtcs', array('id' => $dlt_nsaidInjec));
           $suc = $this->db->affected_rows();
           if ($suc) {
               $this->session->set_flashdata('success', " Delete successfull");
           } else {
               $this->session->set_flashdata('error', " Delete is unsuccessfull");
           }
           redirect("admin/produtcs/Dairy/dairy_nsaidInjec_list"); // Redirecting To Other Page
       }
   }
   // ============End  nsaidInjection Section===============

      // ============Start  vitamin Section===============
    public function create_vitamin($vitamin_id = null)
    {

        $data['vitamin_heading'] = "";
        $data['vitamin_img'] = "";
        $data['vitamin_img_title'] = "";
        $data['vitamin_button'] = "";
        $data['vitamin_button_link'] = "";

        if ($vitamin_id) {
            $query = $this->db->query("select*from produtcs where id = $vitamin_id limit 1 ");
            $vitamin = $query->row();

            if (!empty($vitamin)) {

                $data['vitamin_heading'] = $vitamin->vitamin_heading;
                $data['vitamin_img'] = $vitamin->vitamin_img;
                $data['vitamin_img_title'] = $vitamin->vitamin_img_title;
                $data['vitamin_button'] = $vitamin->vitamin_button;
                $data['vitamin_button_link'] = $vitamin->vitamin_button_link;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/produtcs/Dairy/dairy_vitamin_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('vitamin_heading', 'Icon', 'required');
        $this->form_validation->set_rules('vitamin_button', 'Year', 'required');
        $this->form_validation->set_rules('vitamin_img_title', 'Year Contant', 'required');
        $this->form_validation->set_rules('vitamin_button_link', 'Year', 'required');


        if ($this->form_validation->run() == true) {
            $vitaminvalue['vitamin_heading'] = ($this->input->post('vitamin_heading', true));
           
            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('vitamin_img')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['vitamin_img']);
                $vitaminvalue['vitamin_img'] = $sdata['file_name'];
            }
            $vitaminvalue['vitamin_img_title'] = ($this->input->post('vitamin_img_title', true));
            $vitaminvalue['vitamin_button'] = ($this->input->post('vitamin_button', true));
            $vitaminvalue['vitamin_button_link'] = ($this->input->post('vitamin_button_link', true));
            $vitaminvalue['type'] = 'vitamin';

            if ($vitamin_id) {
                $success = $this->db->update('produtcs', $vitaminvalue, array('id' => $vitamin_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/produtcs/Dairy/dairy_vitamin_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('produtcs', $vitaminvalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/produtcs/Dairy/dairy_vitamin_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/produtcs/dairy/vitamin/create_vitamin', $data);
    }

    public function dairy_vitamin_list()
    {
        $data['result'] = $this->db->get_where('produtcs', array('type' => 'vitamin'))->result_array();
        $this->load->view('admin-view/produtcs/dairy/vitamin/dairy_vitamin_list', $data);
    }

    public function delete_vitamin($dlt_vitamin)
    {
        if ($dlt_vitamin) {
            $this->db->delete('produtcs', array('id' => $dlt_vitamin));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/produtcs/Dairy/dairy_vitamin_list"); // Redirecting To Other Page
        }
    }
    // ============End  vitamin Section===============

     // ============Start  feedpre Section===============
     public function create_feedpre($feedpre_id = null)
     {
 
         $data['feedpre_heading'] = "";
         $data['feedpre_img'] = "";
         $data['feedpre_img_title'] = "";
         $data['feedpre_button'] = "";
         $data['feedpre_button_link'] = "";
 
         if ($feedpre_id) {
             $query = $this->db->query("select*from produtcs where id = $feedpre_id limit 1 ");
             $feedpre = $query->row();
 
             if (!empty($feedpre)) {
 
                 $data['feedpre_heading'] = $feedpre->feedpre_heading;
                 $data['feedpre_img'] = $feedpre->feedpre_img;
                 $data['feedpre_img_title'] = $feedpre->feedpre_img_title;
                 $data['feedpre_button'] = $feedpre->feedpre_button;
                 $data['feedpre_button_link'] = $feedpre->feedpre_button_link;
             } else {
                 $this->session->set_flashdata('error', "Something is wrong Please try again");
                 redirect("admin/produtcs/Dairy/dairy_feedpre_list"); // Redirecting To Other Page
             }
         }
         $this->form_validation->set_rules('feedpre_heading', 'Icon', 'required');
         $this->form_validation->set_rules('feedpre_button', 'Year', 'required');
         $this->form_validation->set_rules('feedpre_img_title', 'Year Contant', 'required');
         $this->form_validation->set_rules('feedpre_button_link', 'Year', 'required');
 
 
         if ($this->form_validation->run() == true) {
             $feedprevalue['feedpre_heading'] = ($this->input->post('feedpre_heading', true));
            
             $config['upload_path'] = 'backend_design/uploads/';
             $config['allowed_types'] = 'gif|jpg|png|jpeg';
             $this->load->library('upload', $config);
             if (!$this->upload->do_upload('feedpre_img')) {
                 $data['img_up_errors'] = $this->upload->display_errors();
             } else {
                 $sdata = $this->upload->data();
                 unlink(FCPATH . 'backend_design/uploads/' . $data['feedpre_img']);
                 $feedprevalue['feedpre_img'] = $sdata['file_name'];
             }
             $feedprevalue['feedpre_img_title'] = ($this->input->post('feedpre_img_title', true));
             $feedprevalue['feedpre_button'] = ($this->input->post('feedpre_button', true));
             $feedprevalue['feedpre_button_link'] = ($this->input->post('feedpre_button_link', true));
             $feedprevalue['type'] = 'feedpre';
 
             if ($feedpre_id) {
                 $success = $this->db->update('produtcs', $feedprevalue, array('id' => $feedpre_id));    //**** (query Builders class)***
 
                 if ($success) {
                     $this->session->set_flashdata('success', " Edited successfully");
                     redirect("admin/produtcs/Dairy/dairy_feedpre_list"); // Redirecting To Other Page
                 }
             } else {
                 $success = $this->db->insert('produtcs', $feedprevalue);    //**** (query Builders class)***
 
                 if ($success) {
                     $this->session->set_flashdata('success', " Added successfully");
                     redirect("admin/produtcs/Dairy/dairy_feedpre_list"); // Redirecting To Other Page
                 }
             }
         }
 
         $this->load->view('admin-view/produtcs/dairy/feedpre/create_feedpre', $data);
     }
 
     public function dairy_feedpre_list()
     {
         $data['result'] = $this->db->get_where('produtcs', array('type' => 'feedpre'))->result_array();
         $this->load->view('admin-view/produtcs/dairy/feedpre/dairy_feedpre_list', $data);
     }
 
     public function delete_feedpre($dlt_feedpre)
     {
         if ($dlt_feedpre) {
             $this->db->delete('produtcs', array('id' => $dlt_feedpre));
             $suc = $this->db->affected_rows();
             if ($suc) {
                 $this->session->set_flashdata('success', " Delete successfull");
             } else {
                 $this->session->set_flashdata('error', " Delete is unsuccessfull");
             }
             redirect("admin/produtcs/Dairy/dairy_feedpre_list"); // Redirecting To Other Page
         }
     }
     // ============End  feedpre Section===============

   
}