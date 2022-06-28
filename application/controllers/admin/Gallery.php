<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    // ==============Start Our corporate banner service===========
    public function create_gallery_banner($banner_id = null)
    {

        $data['gallery_heading'] = "";
        $data['gallery_title'] = "";

        if ($banner_id) {
            $query = $this->db->query("select*from gallery where id = $banner_id limit 1 ");
            $banner = $query->row();

            if (!empty($banner)) {

                $data['gallery_heading'] = $banner->gallery_heading;
                $data['gallery_title'] = $banner->gallery_title;
            } else {
                $this->session->set_flashdata('error', "Something is wrong Please try again");
                redirect("admin/Gallery/gallery_banner_list"); // Redirecting To Other Page
            }
        }
        $this->form_validation->set_rules('gallery_heading', 'Heading', 'required');

        if ($this->form_validation->run() == true) {
            $bannervalue['gallery_heading'] = ($this->input->post('gallery_heading', true));

            $config['upload_path'] = 'backend_design/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gallery_title')) {
                $data['img_up_errors'] = $this->upload->display_errors();
            } else {
                $sdata = $this->upload->data();
                unlink(FCPATH . 'backend_design/uploads/' . $data['gallery_title']);
                $bannervalue['gallery_title'] = $sdata['file_name'];
            }

            $bannervalue['type'] = 'gallery_banner';

            if ($banner_id) {
                $success = $this->db->update('gallery', $bannervalue, array('id' => $banner_id));    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Edited successfully");
                    redirect("admin/Gallery/gallery_banner_list"); // Redirecting To Other Page
                }
            } else {
                $success = $this->db->insert('gallery', $bannervalue);    //**** (query Builders class)***

                if ($success) {
                    $this->session->set_flashdata('success', " Added successfully");
                    redirect("admin/Gallery/gallery_banner_list"); // Redirecting To Other Page
                }
            }
        }

        $this->load->view('admin-view/gallery/banner/create_gallery_banner', $data);
    }

    public function gallery_banner_list()
    {
        $data['result'] = $this->db->get_where('gallery', array('type' => 'gallery_banner'))->result_array();
        $this->load->view('admin-view/gallery/banner/gallery_banner_list', $data);
    }

    public function delete_banner($dlt_banner)
    {
        if ($dlt_banner) {
            $this->db->delete('gallery', array('id' => $dlt_banner));
            $suc = $this->db->affected_rows();
            if ($suc) {
                $this->session->set_flashdata('success', " Delete successfull");
            } else {
                $this->session->set_flashdata('error', " Delete is unsuccessfull");
            }
            redirect("admin/Gallery/gallery_banner_list"); // Redirecting To Other Page
        }
    }
    // ==============End our corporate banner section===========

   // ==============Start Our  gallery service===========
   public function create_gallery($gallery_id = null)
   {

       $data['image_heading'] = "";
       $data['gallery_img'] = "";

       if ($gallery_id) {
           $query = $this->db->query("select*from gallery where id = $gallery_id limit 1 ");
           $gallery = $query->row();

           if (!empty($gallery)) {

               $data['image_heading'] = $gallery->image_heading;
               $data['gallery_img'] = $gallery->gallery_img;
           } else {
               $this->session->set_flashdata('error', "Something is wrong Please try again");
               redirect("admin/Gallery/gallery_list"); // Redirecting To Other Page
           }
       }
       $this->form_validation->set_rules('image_heading', 'Heading', 'required');

       if ($this->form_validation->run() == true) {
           $galleryvalue['image_heading'] = ($this->input->post('image_heading', true));

           $config['upload_path'] = 'backend_design/uploads/';
           $config['allowed_types'] = 'gif|jpg|png|jpeg';
           $this->load->library('upload', $config);
           if (!$this->upload->do_upload('gallery_img')) {
               $data['img_up_errors'] = $this->upload->display_errors();
           } else {
               $sdata = $this->upload->data();
               unlink(FCPATH . 'backend_design/uploads/' . $data['gallery_img']);
               $galleryvalue['gallery_img'] = $sdata['file_name'];
           }

           $galleryvalue['type'] = 'gallery';

           if ($gallery_id) {
               $success = $this->db->update('gallery', $galleryvalue, array('id' => $gallery_id));    //**** (query Builders class)***

               if ($success) {
                   $this->session->set_flashdata('success', " Edited successfully");
                   redirect("admin/Gallery/gallery_list"); // Redirecting To Other Page
               }
           } else {
               $success = $this->db->insert('gallery', $galleryvalue);    //**** (query Builders class)***

               if ($success) {
                   $this->session->set_flashdata('success', " Added successfully");
                   redirect("admin/Gallery/gallery_list"); // Redirecting To Other Page
               }
           }
       }

       $this->load->view('admin-view/gallery/gallery_img/create_gallery', $data);
   }

   public function gallery_list()
   {
       $data['result'] = $this->db->get_where('gallery', array('type' => 'gallery'))->result_array();
       $this->load->view('admin-view/gallery/gallery_img/gallery_list', $data);
   }

   public function delete_gallery($dlt_gallery)
   {
       if ($dlt_gallery) {
           $this->db->delete('gallery', array('id' => $dlt_gallery));
           $suc = $this->db->affected_rows();
           if ($suc) {
               $this->session->set_flashdata('success', " Delete successfull");
           } else {
               $this->session->set_flashdata('error', " Delete is unsuccessfull");
           }
           redirect("admin/Gallery/gallery_list"); // Redirecting To Other Page
       }
   }
   // ==============End our gallery section===========
}