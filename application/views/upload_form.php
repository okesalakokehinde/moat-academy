<html>
<head>
<title>Upload Form</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css">
</head>
<body>
    
<div class="container">

<?php echo $error;?>
<!--this is code igniter way to write form-->
<?php echo form_open_multipart('upload/do_upload');?>

<div class="form-group">
<input type="text" name="lastname" placeholder="Enter Last name" id="lastname" class="form-control">
</div>
<div class="form-group">
<input type="text" name="firstname" placeholder="Enter first name" id="firstname" class="form-control">
</div>                                                                                       
    
<div class="form-group">
    <label class="label-control">Upload Photograph</label> <input type="file" name="userfile" size="20" />
</div>

<br />
<div class="form-group">
<input type="submit" value="upload" class="btn btn-success" />
</div>

</form>
</div>
    


</body>
</html>