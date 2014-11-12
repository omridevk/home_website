<!--

footer.php

footer, to close the site

Omri Katz
-->
<!-- Site footer -->


<div>
<a class ="scroll-top" id = "toTop" style="display:inline"> 
			<span class = "glyphicon glyphicon-chevron-up" style = "padding:8px; margin-left:2px;"></span>
			</a>
</div>


<script>
   $("#toTop").click(function () {
   //1 second of animation time
   //html works for FFX but not Chrome
   //body works for Chrome but not FFX
   //This strange selector seems to work universally
		$("html, body").animate({scrollTop: 0}, 1000);
	});
</script>




    <div class="bottom">
		<hr class="featurette-divider">
   <hr class="featurette-divider">
        <div class="container">
            <div class="col-md-4">
                <h3><span class="glyphicon glyphicon-heart"></span> Footer section 1</h3>
                <p>Content for the first footer section.</p>
            </div>
            <div class="col-md-4">
                <h3><span class="glyphicon glyphicon-star"></span> Footer section 2</h3>
                <p>Content for the second footer section.</p>
            </div>
            <div class="col-md-4">
                <h3><span class="glyphicon glyphicon-music"></span> Footer section 3</h3>
                <p>Content for the third footer section.</p>
            </div>
            </br>
		<h6 style ="margin-top: 100px;"></br>&copy; Omri Katz</h6>
        </div>
    
    </div>
    
    
    




<?php
  $this->load->helper('url');
?>


<script src="/assets/video-js/video.js"></script>



<script src="/assets/tinymce/tinymce.min.js"></script>  

<script src="/assets/js/jquery.smartmenus.js" type="text/javascript"></script>

<script src="/assets/js/bootstrap.js"></script>  
<!--
<script type="text/javascript" src="/assets/js/jquery.leanModal.min.js"></script>

<script src="/assets/js/ie-emulation-modes-warning.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

<script src="/assets/js/ie10-viewport-bug-workaround.js"></script>

<!--<script src="/assets/js/fileinput.min.js"></script>  -->



<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="/assets/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="/assets/js/jquery.iframe-transport.js"></script>

<!-- The main application script -->


</body>
