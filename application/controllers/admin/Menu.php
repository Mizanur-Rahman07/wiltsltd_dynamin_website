<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{


	public function add_menu()
	{
		
		$data['menuName'] = "";
		$data['parentId'] = "";
		$data['page_link'] = "";
		$this->form_validation->set_rules('menuName', 'Menu project', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['menuName'] = $this->input->post('menuName');
			$data['parentId'] = $this->input->post('parentId');
			$data['page_link'] = $this->input->post('page_link');
			$success = $this->db->insert('menu', $data);
			if ($success) {
				$this->session->set_flashdata('success', " Added successfully");
			}
			redirect('admin/Menu/menu_list'); // Redirecting To Other Page

		}
		$this->load->view('admin-view/navberMenu/add_menu', $data);
	}


	public function edit_menu($ID = null)
	{
		$r = $this->db->query("select * FROM menu where id = $ID ");
		$user = $r->row();
		$data['menuName'] = $user->menuName;
		$data['parentId'] = $user->parentId;
		$data['page_link'] = $user->page_link;
		$data['btn_txt'] = $user->btn_txt;
		$data['btn_icon'] = $user->btn_icon;
		$this->form_validation->set_rules('menuName', 'Menu project', 'trim|required');
		if ($this->form_validation->run() == true) {
			$idata['menuName'] = $this->input->post('menuName');
			$idata['parentId'] = $this->input->post('parentId');
			$idata['page_link'] = $this->input->post('page_link');
			$idata['btn_txt'] = $this->input->post('btn_txt');
			$idata['btn_icon'] = $this->input->post('btn_icon');

			$success = $this->db->update('menu', $idata, array('id' => $ID));
			if ($success) {
				$this->session->set_flashdata('success', " Update successfully");
				redirect('admin/Menu/menu_list');
			}
		}
		$this->load->view('admin-view/navberMenu/edit_menu', $data);
	}

	public function menu_list()
	{

		$data['result'] = $this->db->get('menu')->result_array();

		$this->load->view('admin-view/navberMenu/menu_list', $data);
	}


	public function delete($dlt_tsk)
	{

		if ($dlt_tsk) {
			$this->db->delete('menu', array('id' => $dlt_tsk));
			$sucs = $this->db->affected_rows();

			if ($sucs > 0) {
				$this->session->set_flashdata('success', " Delete successfully");
			} else {
				$this->session->set_flashdata('error', "Delete unsuccessfully");
			}
			redirect('admin/Menu/menu_list'); // Redirecting To Other Page
		}
	}



	public function homeDiscription()
	{

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('discription', 'Discription ', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');

		if ($this->form_validation->run() == true) {
			$reg['name'] = $this->input->post('name', true);
			$reg['title'] = $this->input->post('title', true);
			$reg['discription'] = $this->input->post('discription', true);
			$reg['date'] = ($this->input->post('date', true));

			 $this->db->insert('home_menu', $reg);    //**** (query Builders class)***

		}

		$this->load->view('home_discription');
	}



	public function showDetails()
	{

		$data['result'] = $this->db->get('home_menu')->result_array();


		$this->load->view('show_details', $data);
	}
}
