<!DOCTYPE html>
<head>

<?php $actual_link = "http://$_SERVER[HTTP_HOST]";
echo $actual_link; ?>

<?php echo $actual_link;?>
<!-- Latest compiled and minified CSS -->



<script src="<?php echo $actual_link;?>/omri/mwEmbed/mwEmbedLoader.php/p/1763321/sp/176332100/embedIframeJs/uiconf_id/27033512/partner_id/1763321"></script>

<link href="<?php echo $actual_link;?>/omri/assets/css/jumbotron-narrow.css" rel="stylesheet">

<script src="<?php echo $actual_link;?>/omri/assets/js/kWidget.getSources.js"></script>


<script src="<?php echo $actual_link;?>/omri/assets/js/jquery-2.1.1.min.js"></script>

<script src="<?php echo $actual_link;?>/omri/assets/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="<?php echo $actual_link;?>/omri/assets/css/bootstrap.min.css">



<!-- Optional theme -->


</head>

<body>
<div class = "container">
	<div class="header">
        <nav>
          <ul class="nav nav-pills pull-left">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><br></h3>
	</div>



<div class ="jumbotron">
    <div class="container" id = "hello">

      <form class="form-signin" role="form">
	  <fieldset>
        <h2 class="form-signin-heading">Flavor Tester</h2>
		<div class="form-group">
			<label for="PartnerId">Partner ID:</label>
			<input type="text" id="PartnerId" class="form-control" placeholder="Partner Id" value = "1763321" required autofocus>
		</div>
		<div class="form-group">
			<label for="EntryId">Entry Id:</label>
			<input type="text" id="EntryId" class="form-control" value="0_hbfdx4uz" placeholder="Entry Id" required>
		</div>
        <button id ="getSources" class="btn btn-lg btn-primary btn-block" type="submit">Test Flavors</button>
		</fieldset>
      </form>

    </div> <!-- /container -->
</div>
</div>
<script>


  function loadSources(){
    kWidget.getSources({
      'partnerId': $('#PartnerId').val(),
      'entryId': $('#EntryId').val(),
      'callback': function(sourceSet){
        var o = '';
        for (var i in sourceSet){
			var source = sourceSet[i];
			var test = source.src;
			var flavorUrl = test.substring(0, test.indexOf('?'));
			var flavorId = flavorUrl.slice(flavorUrl.indexOf('flavorId')+9, flavorUrl.indexOf('format')-1);
			console.log(flavorUrl);
			console.log(flavorId);
			var $playerDiv = $("<div id='"+i+"'/>").addClass('players');
			var $titleDiv = $("<p id = '"+i+"title'>"+ source.type+"</p>");
			var $FlavorIdDiv = $("<p>"+ flavorId+"</p>");
			
			$( ".title").append($titleDiv, $FlavorIdDiv);
			$('.bottom').hide();
			if (source.type !== 'application/vnd.apple.mpegurl'){
				$( "#"+i+"title").replaceWith($titleDiv, $FlavorIdDiv);
				$("#hello").append($playerDiv);
				kWidget.embed({
					"targetId": i,
					"wid": "_1763321",
					"uiconf_id": 27033512,
					"flashvars": {
						"streamerType": "http"
					},
					"sourceType":"url",
					"entry_id": flavorUrl
				});
 			} else {
 				$('.notSupported').show();
 				return;
 			}
        }
      }
    })
  }

    $('#getSources').click(function(){
      console.log($('#partnerId').val());
      location.hash = '#__' +  $('#partnerId').val() + ',' + $('#entryId').val();
      loadSources();
    })


</script>

</body>

<footer>


<!-- Latest compiled and minified JavaScript -->



</footer>
<style>
	.form-control {
		text-transform: none !important;
	}
	#example_video_1 {
		padding-top:50px;
		margin-top:50px;
	}
	.notSupported{
		display:none;
	}
	
	.players {
		position:relative;
		padding: 20px;
		width: 600px;
		height: 400px;
	}
	.form-signin {
		max-width:330px;
		padding:15px;
		margin:0 auto;
	}
	.parent {
		width: 50%;
		height:50%;
	}

	.test {
		color: #fff;
		background-color: #337ab7;
		border-color: #2e6da4;
	}
	.form-group {
		width:50%
		
	}
	.test:hover {
		color: #fff;
		background-color: #286090;
		border-color: #204d74;
	}
</style> 
