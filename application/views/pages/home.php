   <!-- Carousel
    ================================================== -->
<div class = "container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="/assets/images/background.png" alt="First slide">
          
          <div class="container">
            <div class="carousel-caption">
				<img class= "balloon" src="/assets/images/balloon.png" alt="Hello">
				
              <h1>Example headline.</h1>
              <img class= "silver-balloon animated bounceInUp" src="/assets/images/magento-balloon.png" alt="Hello">
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/assets/images/park.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


 <!-- second carousel start here -->

 <hr class="featurette-divider">

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
<hr class="featurette-divider">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
        

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
         <input id="" type="file" class="file">
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-lg btn-primary" id = "" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <!-- START THE FEATURETTES -->
       <hr class="featurette-divider">
	</div>
	


<div class="container marketing">
	<div class = "container col-md-11 col-md-offset-1">
		<div class="row featurette">
			<?php
			if(!isset($posts))
			{ ?>
			<p>There are no posts to display...</p>
			<?php 
			}
			else {
		
				$this->load->helper('url');
				foreach($posts as $row){ ?>
					
					<div class="col-md-7">
						<h2  class="featurette-heading"><a class = "featurette-heading" style = "text-decoration:none; color: inherit;"href ="<?=base_url()?>posts/post/<?=$row['id']?>"><?=$row['title']?><span class="text-muted"></span></a></h2>
						
						<p class="lead">
							<?=substr(strip_tags($row['body']),0,200).".."?>
						</p>
							<a href = "<?=base_url()?>posts/post/<?=$row['id']?>">Read More...</a>
					</div>
					<div class="col-md-5">

					</div>


<?php }
}

 ?>
 

		</div>
	</div>	

</div>

	




<style>

.balloon {
	position:absolute;
	top:-1000px;
	left:-200px;
	padding: 10px;
	width:600px;
	height:auto !important;
	/* Shorthand syntax */
	-webkit-animation: movearound 1s ease 2 normal;
}


@-webkit-keyframes movearound {
	from {
		left:-750;
		top:-500px;
		opacity: 0.5;

	}
	to {
		
		left:-200px;
		opacity: 1;

	}
}	


.silver-balloon {
	position:absolute;
	top:-700px;
	left: 500px;
	padding: 10px;
	width:300px;
	height:auto !important;
	/* Shorthand syntax */

}


@-webkit-keyframes movetoround {
	from {
		left: 1000px;
		top:-5200px;
		opacity: 0.5;

	}
	to {
		top: -700px;
		left:500px;
		opacity: 1;

	}
}	


.green-hills {
	
	
	
  -vendor-animation-duration: 3s;
  -vendor-animation-delay: 2s;
  -vendor-animation-iteration-count: infinite;
}

</style>
    
      <!-- /END THE FEATURETTES -->


