<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin');
	}

	public function index()
	{
		$this->load->view("/admin/admin_login");
	}
//-----------------------------ADMIN LOGIN
	public function enter()
	{
		$this->Admin->login_user($this->input->post());
		$results = $this->Admin->login_user($this->input->post());
// VALIDATION STARTS
		$this->load->library("form_validation");
		$this->form_validation->set_rules('log_email', 'Login Email', 'required|valid_email');
		$this->form_validation->set_rules('log_password', 'Login Password', 'required');
		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata("errors", validation_errors());
			redirect('/');
		}
// VALIDATION ENDS
		else
		{
			$this->load->model('Admin');
			$post = $this->input->post();
			$info = $this->Admin->login_user_reg($post['log_email']);

			if($info && $post['log_password'] == $info['password'])
			{
				$orders=$this->Admin->get_orders();
				$this->load->view('admin/admin_orders', array('orders'=>$orders));
			}
			else
			{
				$this->session->set_flashdata("errors", "WRONG");
				redirect('/');
			}

			// $this->load->view('welcome', array('results'=>$results));
		}
	}
//-----------------------------ADMIN LOGIN

	public function search_orders(){
		if($this->input->post('status')!=='show_all'){
			$status=$this->input->post('status');
			$result=$this->Admin->get_orders_by_status($status);
			$this->load->view('admin/admin_orders', array('orders'=>$result,'status'=>$status));
		}
		else{
		$search=$this->input->post('search');
		$result=$this->Admin->search_orders($search);
		$this->load->view('admin/admin_orders', array('orders'=>$result));
		// var_dump($result);
		}


	}

	public function show_order($id){
		$result=$this->Admin->show_order($id);
		$this->load->view('admin/admin_orders_show',array('result'=>$result));
	}








}