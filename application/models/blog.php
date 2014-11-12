<?php 

class Blog extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	
	
	
	function get_posts($num=20, $start =0)
	{
		$this->db->select()->from('posts')->where('active',1)->order_by('date_added','desc')->limit($num,$start);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	function get_post($id){
		$this->db->select()->from('posts')->where(array('active'=>1,'id'=>$id))->order_by('date_added','desc');
		$query = $this->db->get();
		return $query->first_row('array');
	}
	
	function insert_post($data){
		$this->db->insert('posts',$data);
		return $this->db->insert_id();
	}
	
	function update_post($id, $data){
		$this->db->where('id', $id);
		$this->db->update('posts',$data);
	}
	
	function delete_post($id){
		$this->db->where('id', $id);
		$this->db->delete('posts');
	}
	

}
