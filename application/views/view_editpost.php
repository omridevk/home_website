<div class = "middle">
<div class= "container">
	<?php if ($success == 1) { ?>
		<h1>Post updated successfully...</h1>
	<?}?>

<form class="form-horizontal" role="form" method="post" action ="/posts/edit_post/<?=$post['id']?>">
<fieldset>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?=$post['title']?>" name = "title" id="title" placeholder="Title">
    </div>
  </div>
  <div style = "max-width:945px;">
	<textarea name= "body" class="form-control"  style = "width:100%; height:70%;" rows="30"><?=$post['body']?></textarea>
  </div>
  <div class="form-group">
    <div class="col-md-4 col-md-offset-2">
      <div class="checkbox">
        <label>
          <input type="checkbox" name= "checkbox" required> Public
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    
      <button type="submit" class="btn btn-default col-md-4 col-md-offset-2">Submit</button>
    </div>
 
  
  
  
</form>

</div>

</div>


<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>


