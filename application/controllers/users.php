<?php 

Class Users Extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_userlogin');
		$this->load->view('css_login');
		$this->load->view('css_scripts');
	}

	function login() {
		$data['error']= 0;
		if($_POST){
			$username= $this->input->post('username',true);
			$password= $this->input->post('password',true);
			$user= $this->model_userlogin->login($username, $password);
			if(!$user){
				$data['error']=1;
			} else {
				$this->session->set_userdata('userID',$user['userID']);
				$this->session->set_userdata('user_type',$user['user_type']);
				redirect(base_url().'posts/index');
			}
		}
				$this->session->set_userdata('username',$username);
				redirect(base_url().'posts/blog');
	}
	
	function logout() {
		$this->session->sess_destroy();
		redirect('/');
	}

}
