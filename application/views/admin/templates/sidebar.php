<?php ?>
<div class="sidebar">
<ul id="sidebar" class="sm sm-vertical sm-blue sm-blue-vertical">
  <li><a href="#">Item 1</a></li>
  <li><a href="#">Item 2</a>
    <ul>
      <li><a href="#">Item 2-1</a></li>
      <li><a href="#">Item 2-2</a></li>
      <li><a href="#">Item 2-3</a></li>
    </ul>
  </li>
  <li><a href="#">Item 3</a></li>
</ul>
</div>

<script>
	$(function() {
	  $('#sidebar').smartmenus();
	});

</script>


