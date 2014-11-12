<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>

<input id="input-1" class="file" type="file" name="userfile" size="20" />

<br /><br />


<input type="submit" value="upload" />

</form>

<script type="text/javascript">
		$("#input-1").fileinput();
</script>


</body>
</html>