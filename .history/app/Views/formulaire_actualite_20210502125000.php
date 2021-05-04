<!DOCTYPE html>
<html>
	<head>
		<title>inscription</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
	  	<link rel="stylesheet" href="<?php echo base_url('asset/css/login.css'); ?>">
	</head>
	<body  style="background-color: #9c9893;">
		<div class="container-fluid ">
			<div class="container">
				<div class="d-flex justify-content-center align-items-center">
		    		<div class=" col-md-6 block-center" style="background-image: url('<?php echo base_url('asset/virus1.jpg'); ?>'); margin-top: 60px;">
		    			<div class="col-md-12">
		    				<form class="form" action="<?php echo base_url('loginPage'); ?>" method="POST">
		    					<h3 class="text-center text-info">Registration</h3>
		    					<div class="form-group">
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3">Lieu</label>
                                    <div class="col-md-4">
                                    <label class="navLink" for="username" style="color: #f9b507;">Name</label>
                                
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" class="" data-toggle="modal" data-target="#modallieu">Nouveau lieu</button>
                                    </div>
                                    </div>
                                                            

                                    <label class="navLink" for="username" style="color: #f9b507;">Mot(s) clé(s)</label>
		    						<input class="form-control" type="text" name="mot_cle" required>

		    						<label class="navLink" for="username" style="color: #f9b507;">Name</label>
		    						<input class="form-control" type="text" name="name" required>
		    		
		    						<label class="navLink" for="passwd" style="color: #f9b507;">Login</label>
		    						<input class="form-control" type="text" name="login" required>
		    						
		    						<label class="navLink" for="password" style="color: #f9b507;">Password</label>
		    						<input class="form-control" type="password" name="passwd" required>
		    						<br>
		    						<input class="btn btn-info b
		    						tn-md" type="submit" value="register">
		    					</div>
		    				</form>
		    			</div>
		    		</div>    
				</div>
			</div>
		</div>
	</body>
</html>
