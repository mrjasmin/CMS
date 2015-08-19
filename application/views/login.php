<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

	<style>
		 
		.center {width: 800px; margin: 0px auto; }
		 .panel.panel-default {   width: 60%; margin: 200px auto; }
		 .panel.panel-default label { margin-right: 6px; }
		 .panel.panel-default input { padding: 4px; border: 1px solid #C4C4C4; }
	</style>
	
    <!-- Bootstrap -->
    <link href="<?php echo site_url('css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="center">
  

	<div class="panel panel-default">
	<div class="panel-heading"><b>| CMS | </b>  User login</div>
	<div class="panel-body">
	
	
		<?php if(isset($error)){
				echo "Wrong username or password!<br></br>"; 
		}
		?>
		
		<?php echo validation_errors(); ?>

		<?php echo form_open('users/login_'); ?>
		
		<?php
		$data = array(
              'name'        => 'username',
              'id'          => 'username',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:40%',
            );
		
		echo form_label('Username', 'username');		
		echo form_input($data);	
		
		?><br></br><?php
		
		$pw = array(
              'name'        => 'password',
              'id'          => 'password',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:40%',
            );
		
		echo form_label('Password', 'password');		
		echo form_password($pw);	
		
		?>
	
		<br></br>
		
		<?php echo form_submit('mysubmit', 'Login');?>

		
    </div>
	</div>

	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo site_url('js/bootstrap.min.js');?>"></script>
  </body>
</html>