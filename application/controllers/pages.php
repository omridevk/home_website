<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	
	    public function __construct()
	{
		parent::__construct();
		$this->load->model('model_blog');
		$this->load->view('css_scripts');
		$this->load->helper(array('form', 'url'));
	}
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($page = 'home')
	{
		
		if ($page == 'torrent' && $this->correct_permissions('admin'))
		{
			$this->load->view('admin/templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/torrent');
			$this->load->view('templates/footer');
		}
			
	}
	

	public function correct_permissions($required){
		$user_type = $this->session->userdata('user_type');
		if($required == "user"){
			if($user_type){
				return true;
			}
		}else if($required == "auther"){
			if($user_type == "auther" || $user_type == "admin"){
			
				return true;
			}
		}else if($required == "admin"){
			if($user_type == "admin"){
				return true;
			}
		}
	}	
}
/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
