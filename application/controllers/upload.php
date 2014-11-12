<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		redirect(base_url().'posts/index');
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$config['max_size']	= '2000000';
		$config['max_width']  = '5000';
		$config['max_height']  = '5000';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array(
				'upload_data' => $this->upload->data(),
				'error' => ' '
				);
			$this->session->set_userdata($data);
			redirect(base_url().'posts/index');
			//$this->load->view('upload_success', $data);
		}
	}
}
?>