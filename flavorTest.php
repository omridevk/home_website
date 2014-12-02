Partner Id:<input id="PartnerId" type="text" value="1763321" size="5">
Entry Id: <input id="EntryId" type="text" value="0_hbfdx4uz" size="5">
<input id="getSources" type="button" value="get sources"/>
</div>
<div class = "parent container">
	<div class = "title"></div>
</div>
<div class = "notSupported">
	<p>HDS is not supported yet</p>
</div>


<style>
.parent {
	width: 50%;
	height:50%;
}

</style>
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
			var $playerDiv = $("<div id='"+i+"'/>").css('padding','50px');
			var $titleDiv = $("<p id = '"+i+"title'>"+ source.type+"</p>");
			var $FlavorIdDiv = $("<p>"+ flavorId+"</p>");
			
			$( ".title").append($titleDiv, $FlavorIdDiv);
			$('.bottom').hide();
			if (source.type !== 'application/vnd.apple.mpegurl'){
				$( "#"+i+"title").replaceWith($titleDiv, $FlavorIdDiv);
				$( ".parent").append($playerDiv);
				kWidget.embed({
					"targetId": i,
					"wid": "_1763321",
					"uiconf_id": 27053901,
					"flashvars": {
						"streamerType": "http"
					},
					"sourceType":"url",
					"cache_st": 1416961666,
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

	.notSupported{
		display:none;
	}
</style> 
