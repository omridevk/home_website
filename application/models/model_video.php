<?php 
class Model_Video extends CI_Model {  
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();		
    }

    public function video_list($genre = 'action') {
		$directory = 'assets/video/'.$genre;
		$files = preg_grep('/^([^.])/', scandir($directory));		
		return($files);
	}		
	public function folder_list(){
		$directory = 'assets/video/';
		$folders = preg_grep('/^([^.])/', scandir($directory));
		return($folders);
	}

}