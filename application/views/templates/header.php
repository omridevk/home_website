<head>

<?php if(!$this->session->userdata('userID')){ ?>  	
<script type="text/javascript">
   /* $(window).load(function(){
        $('#basicModal').modal('show');
    });*/
</script>
<?php }?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">
<? $this->load->helper('url'); ?>

</head>
<body data-target =#text" id ="content" id = "hello">
	  
	<div id = "header" class = "navbar-fixed-top">
		<ul  class="sm sm-blue" style = "width:250px;">
			<a style = "width:100%;" id="menu-button"></a>
		</ul>
		<ul id="main-menu" class="sm sm-blue top collapsed">
				<li><a class = "home" href="/">Home</a></li>
				<li><?php echo anchor('posts/blog', 'Blog'); ?></li>
				<li><a href="#">Video</a>
					<ul id = "sub-menu">
						<?php
							$directory = 'assets/video/';
							$folders = preg_grep('/^([^.])/', scandir($directory));
							foreach ($folders as $folder) { 
								$link = '/posts/video/' . $folder; 
						?>
								<li class = "menuNew"><a href="<?=$link?>"><?=$folder?></a></li>
						<?php 
				
							}?>
					</ul>
				</li>
				<li><a href="#about">About</a></li>
				<li class = "move"><a href="#contact">Contact</a></li>
				<li style = "float:right">
				<?php if(!$this->session->userdata('userID')) { ?>
							<a href = "#" data-toggle="modal" data-target="#basicModal">Log In</a></li>
				<?php } else { ?>
							<a href="/users/logout">Log Out</a></li>
					<?}?>
		</ul>
</div>
	   <div class="modal fade in"  id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
			<div class="modal-dialog" style = "max-width:250px;">
				<div class="modal-content">
					<div class="modal-body">
					
					   <form class="form-signin" role="form" method="post" action ="<?php echo base_url();?>users/login">
							<h2 class="form-signin-heading">Please sign in</h2>
							<input type="text" class="form-control" 
							<?php if($this->session->userdata('username')) { ?>
							value="<?=$this->session->userdata('username'); 
							}?>" placeholder="User Name" name="username" id="username" required autofocus >
							<input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
					<?php if($this->session->userdata('username')) : ?>
								<div class="alert alert-danger" role="alert">
								<p><strong>Wrong</strong> Username or Password!<p>
								</div>
					<?php
						endif; 
					?>
			 
					</div>
					<div class="modal-footer">
						<button type="button" class="btn" data-dismiss="modal">Close</button>
						<button type="submit" class="btn">Log in</button>
					</div>
				</form>
				</div>
			</div>
		</div>

	<script>

$(function() {
	var $targetElm = $('#hello'),
    targetOffset = $targetElm.offset();
  $('#main-menu').smartmenus('popupHide', true);
});


$(function() {
  $('#menu-button').click(function() {
    var $this = $(this),
        $menu = $('#main-menu');
    if (!$this.hasClass('collapsed')) {
      $menu.addClass('collapsed');
      $this.addClass('collapsed');
      $('body').removeClass('body-padding');
    } else {
      $menu.removeClass('collapsed');
      $this.removeClass('collapsed');
      $('body').addClass('body-padding');
    }
    return false;
  }).click();
});

$(function() {
  $('#main-menu').smartmenus();
});

</script>

<style>
	.bs-glyphicons li:hover {
color: #fff;
background-color: #563d7c;
}
.bs-glyphicons li {
float: left;
width: 25%;
height: 115px;
padding: 10px;
font-size: 10px;
line-height: 1.4;
text-align: center;
background-color: #f9f9f9;
border: 1px solid #fff;
}
	
	
.menuNew {
    text-transform: capitalize;
}
	
	
.home {
	text-align:center;
	font-size:0.9em;
}

.body-padding {
	padding-top:400px;
	-webkit-animation: myfirst 0.5s;
	animation: myfirst 0.5s;
	
}

@-webkit-keyframes myfirst {
	from {padding-top:0px;}
	to {padding-top:400px;}
}

@keyframes myfirst {
	from {padding-top:0px;}
	to {padding-top:400px;}
}
#menu-button {
  display:none;
  /* style it as you like... */
}
#menu-button:before {
  content:'Menu -';
}
#menu-button.collapsed:before {
  content:'Menu +';
}
@media screen and (max-width: 640px) {
  /* show the button on small screens */
  #menu-button {
    display:inline-block;
  }
  /* hide the menu when it has the "collapsed" class set by the script */
  #main-menu.collapsed {
    display:none;
  }
}
</style>
