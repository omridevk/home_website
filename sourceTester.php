<!DOCTYPE html>
<html>
<head>
 
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

<div><input type="button" id="generate" value="Generate" /></div>
<input type="text" id="url" value="http://cdnbakmi.kaltura.com/p/1763321/sp/176332100/serveFlavor/entryId/1_zyxufp0c/v/11/flavorId/1_7vgtpmrv/name/a.mp4"></input>

<script src="http://cdnapi.kaltura.com/p/1763321/sp/176332100/embedIframeJs/uiconf_id/27561182/partner_id/1763321"></script>
<div id="test" style="width: 400px; height: 333px;"></div>
<script>



	$('#generate').click( function() {
		mw.setConfig('EmbedPlayer.ReplaceSources', [
			{
				'type' : 'video/h264',
				'src' : $('#url').val()
			}
		]);
		kWidget.embed({
			"targetId": "test",
			"wid": "_1763321",
			"uiconf_id": 27561182,
			"flashvars": {
				
			},
			"cache_st": 1387835968
		});
	});

function jsCallbackReady(objectId) {
    window.kdp = document.getElementById(objectId);

}   

$('#button').click(function() {
	 
});



</script>
</body>

</html>
