<?php
class Posts extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->view('load_css');	
		$this->load->model('blog');
		$this->load->model('model_video');
		$this->load->helper(array('form', 'url'));
	}	

	public function index(){
		if(!$this->correct_permissions('admin')){
			$this->blog->get_posts();
			$this->load->view('templates/header');
			$data = array(
				'posts' => $this->blog->get_posts(),
				'upload_data' => $this->session->userdata('upload_data'),
				'error' => $this->session->userdata('error'),
				);
			$this->load->view('pages/home',$data);
			$this->load->view('templates/footer');
		}
		else {
			$this->load->view('admin/templates/header');
			$data['posts'] = $this->blog->get_posts();
			$this->load->view('pages/home',$data);
			$this->load->view('templates/footer');
			
		}
	}

	public function video($genre = 'action'){
		$data = array('folder' => $this->model_video->folder_list(),
						'files' => $this->model_video->video_list($genre),
						'genre' => $genre);
		if(!$this->correct_permissions('admin')){
			$this->load->view('templates/header', $data);
			$this->load->view('pages/videos',$data);
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
	
	public function blog() {
		if(!$this->correct_permissions('admin')){
			$this->load->view('templates/header');
			$data['posts'] = $this->blog->get_posts();
			$this->load->view('pages/home',$data);
			$this->load->view('templates/footer');
		}
		else {
			$this->load->view('admin/templates/header');
			$data['posts'] = $this->blog->get_posts();
			$this->load->view('admin/home',$data);
			$this->load->view('templates/footer');
		}
	}

	
	public function post($id)
	{
		if($this->correct_permissions('admin')){
			$this->load->view('admin/templates/header');
			$data['post']=$this->blog->get_post($id);
			$this->load->view('view_post',$data);
			$this->load->view('templates/footer');
		}
		else {
			$this->load->view('templates/header');
			$data['post']=$this->blog->get_post($id);
			$this->load->view('view_post',$data);
			$this->load->view('templates/footer');
		}
		
	}
	
	public function new_post(){
		if($_POST){
			$data = array(
				'title'=>$_POST['title'],
				'body'=>$_POST['body'],
				'active'=>1,
				'author'=>$this->session->userdata('userID')
				);
				$this->blog->insert_post($data);
				redirect(base_url().'posts/index');
		} else {
			$this->load->view('admin/templates/header');
			$this->load->view('view_addpost');
			$this->load->view('templates/footer');
		}
	}
	
	public function edit_post($id){
		$data['success']=0;
		if($_POST){
			$data_post=array(
				'title'=>$_POST['title'],
				'body'=>$_POST['body'],
				'active'=>1
				);
				$this->blog->update_post($id,$data_post);
				$data['success']=1;
		}
		$this->load->view('admin/templates/header');
		$data['post']=$this->blog->get_post($id);
		$this->load->view('view_editpost',$data);
		$this->load->view('templates/footer');
	}
	
	function deletepost($id){
		$this->blog->delete_post($id);
		redirect(base_url());			
	}		
}
