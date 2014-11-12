<!--

footer.php

footer, to close the site

Omri Katz
-->
<!-- Site footer -->




<a class ="scroll-top" id = "toTop" style="display:inline"> 
			<span class = "glyphicon glyphicon-chevron-up" style = "padding:8px; margin-left:2px;"</span>
			</a>


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
</body>


