<?php	if (base_url() == "http://192.168.1.21/") { 
				$torrentwebsite = "http://192.168.1.31:8081/gui" ?>
			<div class  = "middle">
				<div class = "container-fluid">
					<iframe class="col-md-9 content iframe;" height ="600" src="<?=$torrentwebsite?>"></iframe>	
			</div>
			</div>
					
		<?}		
			$host = $_SERVER['HTTP_HOST'];
			$site = 'http://'.$host.':8081/gui';?>
		
			<div class  = "middle">
				<div class = "container-fluid">
					<iframe class="col-md-9 content iframe;" height ="600" src="<?=$site?>"></iframe>	
			</div>
			</div>
