<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Guestbook Using Codeignite</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css">
    <style>
        .error{
  		color: red;
  	}
    </style>
</head>
<body>
    <div class="container">
        <h2>Guestbook <a href="<?php echo base_url(); ?>contact/displayguest" class="btn btn-success">Display all Guests</a></h2>
        <div class="error"><?php echo validation_errors(); ?></div>
        <div>
            <form method="post" action="<?php echo base_url('contact/index'); ?>">
                <div class=form-group>
                <input type="text" class="form-control" value="" name="lastname" placeholder="Enter First name" id="lastname">
                    <?php echo form_error('lastname'); ?>
                </div>
                <div class=form-group>
                <input type="text" class="form-control" value="" name="firstname" placeholder="Enter Surname" id="firstname">
                    <?php echo form_error('firstname');?>
                </div>
                <div class=form-group>
                <input type="text" class="form-control" value="" name="phonenumber" placeholder="Enter Phone Number" id="phonenumber">
                </div>
                <div class=form-group>
                <input type="email" class="form-control" value="" name="emailaddress" placeholder="Enter Email address" id="emailaddress">
                    <?php echo form_error('emailaddress'); ?>
                </div>
                <div class=form-group>
                <textarea class="form-control" value="" name="homeaddress" placeholder="Enter home address" rows="5" id="contactaddress"></textarea>
                </div>               
                
                <div class=form-group>
                <input type="submit" value="Save Contact" class="btn btn-success" name="submit">
                <input type="submit" value="Clear form" class="btn btn-info" name="reset">
                </div>
            </form>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
</body>
    
	

</body>
</html>