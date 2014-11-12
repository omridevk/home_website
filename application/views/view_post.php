<!DOCTYPE html>
<!-- Display single post in a page view -->
<div class= "middle">
	<div class= "container">
		<div class= "col-md-7 content">
		
			<div class="jumbotron">
<?

$this->load->helper('url');
	if(!isset($post)){ ?>
				<div class ="container">
			<p>This page was accessed incorrectly.</p>
				</div>
			</div>
		</div>
	</div>
</div>
	<? }else { ?>
				<div class ="container">
					<h2><?=$post['title']?></h2>
					<?=$post['body']?>
				</div>
				<?}?>
			</div>
		</div>
	</div>
</div>
