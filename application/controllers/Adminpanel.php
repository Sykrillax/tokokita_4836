<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function login()
	{
		$this->load->model('Madmin');
		$u= $this->input->post('username');
		$p= $this->input->post('password');

		$cek = $this->Madmin->cek_login($u, $p)->num_rows();

		if($cek==1){
			$data_session = array(
				'username' => $u,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect('adminpanel/dashboard');
		} else {
			redirect('adminpanel');
		}
	}

	public function dashboard()
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/templates/footer');
		
	}
}
