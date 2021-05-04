<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
	  	<link rel="stylesheet" href="<?php echo base_url('asset/css/login.css'); ?>">
	</head>
	<body style="background-color: #9c9893; ">
		<div class="container-fluid " >
			<div class="container">
				<div class="d-flex justify-content-center align-items-center">
		    		<div class=" col-md-6 block-center" style="background-image: url('<?php echo base_url('asset/img/virus1.jpg'); ?>'); ?>); margin-top: 60px;">
		    			<div class="col-md-12">
		    				<form class="form" action="<?php echo base_url('login'); ?>" method="POST">
		    					<h3 class="text-center text-info">Login</h3>
		    					<div class="form-group">
		    						<label class="navLink" style="color: #f9b507;">Identifiant</label>
		    						<input class="form-control" type="text" name="login">
		 
		    						<label  class="navLink" for="password" style="color: #f9b507;">Mot de passe</label>
		    						<input class="form-control" type="password" name="mdp">
		    						<br>
		    						<input class="btn btn-info btn-md" type="submit" value="connect">
		    						<br>
		    						<label class="navLink" for="registration" style="color: #f9b507;"><a href="<?php echo base_url('inscriptionPage'); ?>"> Registration </a></label><br>
		    						<?php if ($message!=null) { ?>
		    						<label  class="navLink" for="password" style="color: #f9b507;"><?= $message ?></label>
		    					<?php  } ?>
		    					</div>
		    				</form>
		    			</div>
		    		</div>    
				</div>
			</div>
		</div>
	</body>
</html>
