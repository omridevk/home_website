<?php 
class Model_blog extends CI_Model {  
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
		
    }
    
	public function display_posts($postsnumber)
    {

        $this->load->database();
        $query = $this->db->get('posts', $postsnumber);
        return($query);
    }

    public function get_posts($id = FALSE)
    {
    	if ($id === FALSE)
    	{
    		$query = $this->db->get('posts');
    		return ($query);
    	}
    	$this->db->where('id',$id);
        $this->db->from('posts');
        $this->db->limit(1);
        $query = $this->db->get();
    	return ($query);
    }
    
    public function add_post($data)
    {
		$post = array('title' => $data['title'], 'body'=> $data['body']);
		$this->db->insert('posts',$post);	
	}


    public function delete_post($id)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('posts');
            return ($query);
        }

    $this->db->where('id',$id);
    $this->db->delete('posts');
    $this->db->limit(1);
    }
}
