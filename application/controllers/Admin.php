<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin/login');
	}
	public function login(){
		$result=$this->db->where('password',$this->input->post('password'))
		->get('admin')->row();

		if(!empty($result)){
			$userdata= array('userid' =>$result->id,'userEmail'=>$result->email );
			$this->session->set_userdata($userdata);
			redirect(base_url('index.php/blog'));
		}else{
			$this->session->set_flashdata('message','<div class=" alert alert-danger"> invalid Credential</div>');
			redirect (base_url());
		}


	}
}
