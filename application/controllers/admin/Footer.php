<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Footer extends CI_Controller
{

	// =================About Section Start==================
	public function create_about($about_id = null)
	{
		$data['footer_img'] = "";
		$data['left_contant'] = "";
		$data['left_about_us'] = "";
		$data['fb_icon'] = "";
		$data['fb_icon_link'] = "";
		$data['twit_icon'] = "";
		$data['twit_icon_link'] = "";
		$data['insta_icon'] = "";
		$data['insta_icon_link'] = "";
		$data['ytube_icon'] = "";
		$data['ytube_icon_link'] = "";

		if ($about_id) {
			$query = $this->db->query(" select*from footer where id = $about_id limit 1 ");
			$footer = $query->row();

			if (!empty($footer)) {

				$data['footer_img'] = $footer->footer_img;
				$data['left_contant'] = $footer->left_contant;
				$data['left_about_us'] = $footer->left_about_us;
				$data['fb_icon'] = $footer->fb_icon;
				$data['fb_icon_link'] = $footer->fb_icon_link;
				$data['twit_icon'] = $footer->twit_icon;
				$data['twit_icon_link'] = $footer->twit_icon_link;
				$data['insta_icon'] = $footer->insta_icon;
				$data['insta_icon_link'] = $footer->insta_icon_link;
				$data['ytube_icon'] = $footer->ytube_icon;
				$data['ytube_icon_link'] = $footer->ytube_icon_link;
			} else {
				$this->session->set_flashdata('error', "Something is wrong Please try again");
				redirect("admin/Footer/about_list"); // Redirecting To Other Page
			}
		}

		$this->form_validation->set_rules('left_contant', 'Image contant', 'required');
		$this->form_validation->set_rules('left_about_us', 'About Us', 'required');
		$this->form_validation->set_rules('fb_icon', 'Facebook Icon', 'required');
		$this->form_validation->set_rules('fb_icon_link', 'Fb Icon Link', 'required');
		$this->form_validation->set_rules('twit_icon', 'Twiter Icon', 'required');
		$this->form_validation->set_rules('twit_icon_link', 'Twiter Icon Link', 'required');
		$this->form_validation->set_rules('insta_icon', 'Instagram Icon', 'required');
		$this->form_validation->set_rules('insta_icon_link', 'Insta Icon Link', 'required');
		$this->form_validation->set_rules('ytube_icon', 'Youtube Icon', 'required');
		$this->form_validation->set_rules('ytube_icon_link', 'Youtube Icon Link', 'required');

		if ($this->form_validation->run() == true) {

			$config['upload_path'] = 'backend_design/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('footer_img')) {
				$data['img_up_errors'] = $this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				unlink(FCPATH . 'backend_design/uploads/' . $data['footer_img']);
				$instcr['footer_img'] = $sdata['file_name'];
			}

			$instcr['left_contant'] = ($this->input->post('left_contant', true));
			$instcr['left_about_us'] = ($this->input->post('left_about_us', true));
			$instcr['fb_icon'] = ($this->input->post('fb_icon', true));
			$instcr['fb_icon_link'] = ($this->input->post('fb_icon_link', true));
			$instcr['twit_icon'] = ($this->input->post('twit_icon', true));
			$instcr['twit_icon_link'] = ($this->input->post('twit_icon_link', true));
			$instcr['insta_icon'] = ($this->input->post('insta_icon', true));
			$instcr['insta_icon_link'] = ($this->input->post('insta_icon_link', true));
			$instcr['ytube_icon'] = ($this->input->post('ytube_icon', true));
			$instcr['ytube_icon_link'] = ($this->input->post('ytube_icon_link', true));
			$instcr['type'] = 'about';

			if ($about_id) {
				$success = $this->db->update('footer', $instcr, array('id' => $about_id));    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Edited successfully");
					redirect("admin/Footer/about_list"); // Redirecting To Other Page
				}
			} else {
				$success = $this->db->insert('footer', $instcr);    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Added successfully");
					redirect("admin/Footer/about_list"); // Redirecting To Other Page
				}
			}
		}
		$this->load->view('admin-view/footer/about/create_about', $data);
	}

	public function about_list()
	{
		$data['result'] = $this->db->get_where('footer', array('type' => 'about'))->result_array();
		$this->load->view('admin-view/footer/about/about_list', $data);
	}

	public function delete_about($dlt_footer)
	{
		if ($dlt_footer) {
			$this->db->delete('footer', array('id' => $dlt_footer));
			$suc = $this->db->affected_rows();
			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}
			redirect("admin/Footer/footer_list"); // Redirecting To Other Page

		}
	}
	// =================About Section End==================


	// =================Company Section Start==================
	public function create_company($company_id = null)
	{
		$data['company'] = "";
		$data['about_us'] = "";
		$data['team_organogram'] = "";
		$data['our_team'] = "";
		$data['our_milestone'] = "";
		$data['our_coverage'] = "";

		if ($company_id) {
			$query = $this->db->query(" select*from footer where id = $company_id limit 1 ");
			$footer = $query->row();

			if (!empty($footer)) {

				$data['company'] = $footer->company;
				$data['about_us'] = $footer->about_us;
				$data['team_organogram'] = $footer->team_organogram;
				$data['our_team'] = $footer->our_team;
				$data['our_milestone'] = $footer->our_milestone;
				$data['our_coverage'] = $footer->our_coverage;
			} else {
				$this->session->set_flashdata('error', "Something is wrong Please try again");
				redirect("admin/Footer/company_list"); // Redirecting To Other Page
			}
		}

		$this->form_validation->set_rules('company', 'Company Heading', 'required');
		$this->form_validation->set_rules('about_us', 'About Us', 'required');
		$this->form_validation->set_rules('team_organogram', 'Team Organogram', 'required');
		$this->form_validation->set_rules('our_team', 'Our Team', 'required');
		$this->form_validation->set_rules('our_milestone', 'Our Milestone', 'required');
		$this->form_validation->set_rules('our_coverage', 'Our Coverage', 'required');

		if ($this->form_validation->run() == true) {

			$instcr['company'] = ($this->input->post('company', true));
			$instcr['about_us'] = ($this->input->post('about_us', true));
			$instcr['team_organogram'] = ($this->input->post('team_organogram', true));
			$instcr['our_team'] = ($this->input->post('our_team', true));
			$instcr['our_milestone'] = ($this->input->post('our_milestone', true));
			$instcr['our_coverage'] = ($this->input->post('our_coverage', true));
			$instcr['type'] = 'company';

			if ($company_id) {
				$success = $this->db->update('footer', $instcr, array('id' => $company_id));    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Edited successfully");
					redirect("admin/Footer/company_list"); // Redirecting To Other Page
				}
			} else {
				$success = $this->db->insert('footer', $instcr);    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Added successfully");
					redirect("admin/Footer/company_list"); // Redirecting To Other Page
				}
			}
		}
		$this->load->view('admin-view/footer/company/create_company', $data);
	}

	public function company_list()
	{
		$data['result'] = $this->db->get_where('footer', array('type' => 'company'))->result_array();
		$this->load->view('admin-view/footer/comapny/company_list', $data);
	}

	public function delete_company($dlt_footer)
	{
		if ($dlt_footer) {
			$this->db->delete('footer', array('id' => $dlt_footer));
			$suc = $this->db->affected_rows();
			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}
			redirect("admin/Footer/footer_list"); // Redirecting To Other Page

		}
	}
	// =================About Section End==================


	// =================Contact Section End==================
	public function create_contact($contact_id = null)
	{
		$data['contact_us'] = "";
		$data['right_contant'] = "";
		$data['phone_no'] = "";
		$data['mobile_no'] = "";
		$data['email'] = "";

		if ($contact_id) {
			$query = $this->db->query(" select*from footer where id = $contact_id limit 1 ");
			$footer = $query->row();

			if (!empty($footer)) {
				$data['contact_us'] = $footer->contact_us;
				$data['right_contant'] = $footer->right_contant;
				$data['phone_no'] = $footer->phone_no;
				$data['mobile_no'] = $footer->mobile_no;
				$data['email'] = $footer->email;
			} else {
				$this->session->set_flashdata('error', "Something is wrong Please try again");
				redirect("admin/Footer/company_list"); // Redirecting To Other Page
			}
		}
		$this->form_validation->set_rules('contact_us', 'Contact Us Heding', 'required');
		$this->form_validation->set_rules('right_contant', 'Contact contant', 'required');
		$this->form_validation->set_rules('phone_no', 'Phone No', 'required');
		$this->form_validation->set_rules('mobile_no', 'Mobile No', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == true) {
			$instcr['contact_us'] = ($this->input->post('contact_us', true));
			$instcr['right_contant'] = ($this->input->post('right_contant', true));
			$instcr['phone_no'] = ($this->input->post('phone_no', true));
			$instcr['mobile_no'] = ($this->input->post('mobile_no', true));
			$instcr['email'] = ($this->input->post('email', true));
			$instcr['type'] = 'contact';

			if ($contact_id) {
				$success = $this->db->update('footer', $instcr, array('id' => $contact_id));    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Edited successfully");
					redirect("admin/Footer/company_list"); // Redirecting To Other Page
				}
			} else {
				$success = $this->db->insert('footer', $instcr);    //**** (query Builders class)***

				if ($success) {
					$this->session->set_flashdata('success', " Added successfully");
					redirect("admin/Footer/contact_list"); // Redirecting To Other Page
				}
			}
		}

		$this->load->view('admin-view/footer/contact/create_contact', $data);
	}

	public function contact_list()
	{
		$data['result'] = $this->db->get_where('footer', array('type' => 'contact'))->result_array();
		$this->load->view('admin-view/footer/contact/contact_list', $data);
	}

	public function delete_contact($dlt_footer)
	{

		if ($dlt_footer) {
			$this->db->delete('footer', array('id' => $dlt_footer));
			$suc = $this->db->affected_rows();

			if ($suc) {
				$this->session->set_flashdata('success', " Delete successfull");
			} else {
				$this->session->set_flashdata('error', " Delete is unsuccessfull");
			}

			redirect("admin/Footer/footer_list"); // Redirecting To Other Page

		}
	}




}
