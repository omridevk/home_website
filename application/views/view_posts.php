<div class="container marketing">
	<div class="row featurette">		
	<?php
		$this->load->helper('url');
		foreach ($query->result() as $posts ){  ?>

			<div class="col-md-7">
				<h2 class="featurette-heading"><?php echo $posts->title;?><span class="text-muted"></span></h2>
				<?php $stripped = substr($posts->body, 0 , 200);?>
				<p class="lead"><?php echo $stripped;?>
					<a href = "/pages/post/<?php echo ($posts->id)?>">Read More...</a>
				</p>
				<a href = "/pages/delete_post/<?php echo ($posts->id)?>">Delete</a>
			</div>
			<div class="col-md-5">
				<img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
				
			</div>


<?php } ?>

	</div>
</div>

