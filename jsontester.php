<script src = "/assets/mwEmbed/mwEmbedLoader.php/p/1763321/sp/176332100/embedIframeJs/uiconf_id/27531761/partner_id/1763321"></script>
<script src="/assets/js/ace.js" type="text/javascript" charset="utf-8"></script>
<div class ="middle">
  <div class ="container" style = "margin-top:50px;">
     <div class ="row">
      <h1> JSON Tester</h1>
        <div id="editor" class ="col-md-4">
           Insert JSON
        </div>
        <div  id="kaltura_player" style = "height:40%;"class ="col-md-6"></div>
     </div>
     <button type="" class="btn btn-lg btn-success" id ="jsonBtn">Test JSON</button>
  </div>
</div> <!-- End of middle -->

<!-- Site footer -->
<div class="bottom">
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
    </div>
</div>
</body>
<script>
$('body').css('min-height', $(window).height() - parseInt( $('body').css('padding-bottom') ) + 150 );
kWidget.embed({
   'targetId': 'kaltura_player',
   'wid': '_1763321',
   'uiconf_id' : '27531761',
   'flashvars': {},
   "entry_id": "1_91do9jzq" // Entry with captions
});

$('#jsonBtn').click(function() {
   $('#kaltura_player').hide();
   var jsonConfig = editor.getValue();
   kWidget.embed({
      'targetId': 'kaltura_player',
      'wid': '_1763321',
      'uiconf_id' : '27531761',
      'flashvars': {
         "jsonConfig": jsonConfig
      },
   "entry_id": "1_91do9jzq" // Entry with captions
   }); 
$('#kaltura_player').show(1000);

});


$('#test').click(function() {
  var kdp = document.getElementById('kaltura_player');
  //kdp.sendNotification("enableGui", false);
  var test = kdp.evaluate('{mediaProxy.entry.name}');
  console.log(test);
});

var editor = ace.edit("editor");
editor.setTheme("ace/theme/monokai");
editor.getSession().setMode("ace/mode/json");

</script>

<style type="text/css" media="screen">

body {
  padding-top:70px;
}

#editor { 
position:relative;
width:50%;
height:52%;    
}

.btn-lg {
margin-top:10px;
position:relative;
left:21%;
}


.bottom {
   
    background-color: #eee;
}
.bottom .container {
    background-color: #eee;
    min-height: 200px;
}
.bottom .container h3 {
    color: #999;
}
.bottom .container p {
    color: #666;
}

.middle .container {
  background-color: #eee;
}
.middle {
  padding-bottom:100px;
  background-color: eee;
}

</style>
