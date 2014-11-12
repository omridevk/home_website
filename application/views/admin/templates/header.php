<head>
	


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">
<? $this->load->helper('url'); ?>

</head>
  <body>


<div id = "header" class = "navbar-fixed-top ">
<ul id="main-menu" style = "border-radius:0" class="sm sm-blue top">

  <li><a href="/">Home</a></li>
  <li><?php echo anchor('posts/blog', 'Blog'); ?></li>
  <li><a href="#">Add</a>
    <ul id = "sub-menu">
      <li><?php echo anchor('posts/new_post', 'Post'); ?></li>
    </ul>
  </li>
  <li><a href="/phpmyadmin">phpMyAdmin</a></li>
  <li><a href="#about">About</a></li>

  <li class = "move"><a href="#contact">Contact</a></li>
	<li style = "float:right">
	<?php if(!$this->session->userdata('userID')) { ?>
		<a href="/users/login">Log In</a></li>
		<?php } else { ?>
		<a href="/users/logout">Log Out</a></li>
		<?}?>
	
</ul>
</div>	

	<script>
		
$(function() {
  $('#main-menu').smartmenus();
});

	

</script>
