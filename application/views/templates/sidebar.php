<div class = "container col-md-1 sidebar">
	<ul id="sidebar" style = "border-radius:0" class="sm sm-blue top">
		<?php if($this->session->userdata('user_type')) { ?>
		<li style = "margin-top:10px;"><?php echo anchor('pages/index/torrent', 'uTorrent'); ?></li>
	<?}?>
		<li><a href="#about">About</a></li>
		<li class = "move"><a href="#contact">Contact</a></li>
	</ul>
</div>

<style>
	
	.sidebar ul li {
		width:100px;
	}
	.sidebar {
		display:inline !important;
		border-color:none;
		
	}
	
	.top {
		border-color:none !important;
		
		-webkit-box-shadow:none !important;
		box-shadow:none !important;
	}

</style>
