
$( document ).ready(function(){
  $("body").hide();
  $("body").show(300);
});

$('.wrap').stellar();

var path = $.fn.scrollPath("getPath", {
    scrollSpeed: 80, // Default is 50
    rotationSpeed: Math.PI / 10 // Default is Math.PI / 15
});


$(".wrap").scrollPath({
    drawPath: true,
    wrapAround: true,
    scrollBar: false
});
// Use the various path drawing methods below on the path variable
