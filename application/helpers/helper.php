<?php 
	public function authen {
		if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		$this->load->library('session');
		$this->session->all_userdata();
		print_r($check); 
		return($check);
	}
