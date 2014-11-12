<?php
class Model_Checklogin extends CI_Model {  
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
	public function checklogin(){
	$this->load->library('session');
	$myusername = $this->input->post('username');
	$mypassword = $this->input->post('password');
	$this->load->database();
	$this->db->select('*');
	$this->db->from('users');
	$this->db->where('username', $myusername);
	$this->db->where('password', $mypassword);
	$query = $this->db->get();
	$query = count($query->result());
	return ($query);
	}
}

?>
