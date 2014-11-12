<div class = "container">
<?php 
	header('X-Frame-Options: GOFORIT'); 
	foreach ($files as $file){
		$ext = pathinfo($file, PATHINFO_EXTENSION);
		$video = '/assets/video/'. $genre . '/' . $file; 
?>
		<h3><?=$file?></h3>
			<video id="example_video_1" class="video-js vjs-default-skin test"
				controls preload="auto" width="640" height="264"
				poster=""
				data-setup='{"example_option":true}'>
				<source src="<?=$video;?>" type='video/<?=$ext;?>' />
				<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
			</video>
	<?php }?>
</div>


<style>
	#example_video_1 {
		padding-top:50px;
		margin-top:50px;
	}
	.test {
		-webkit-box-shadow: 0 0 10px rgba(34,44,55,0.3);
		-moz-box-shadow: 0 0 10px rgba(34,44,55,0.3);
		box-shadow: 0 0 10px rgba(34,44,55,0.3);
	}
</style> 


	
