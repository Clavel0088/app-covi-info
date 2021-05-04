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
		    				<form class="form" action="<?php echo base_url('actus/save'); ?>" method="POST">
		    					<h3 class="text-center text-info">Registration</h3>
		    					<div class="form-group">
                                
                                    <label class="navLink" for="motcle" style="color: #f9b507;">Mot(s) clé(s)</label>
		    						<input class="form-control" type="text" name="mot_cle" id="mot_cle" required/>
                                    <input class="btn btn-info b
		    						tn-md" type="button" value="ajouter" onclick="ajoutMotCle()" />
                                    <input id="inputMotCle" name="motCle" type="hidden"/>
                                    <div id="motCleContainer"></div>
                                    

		    						<label class="navLink" for="titre" style="color: #f9b507;">Titre</label>
		    						<input class="form-control" type="text" name="titre" required>
		    		
		    						<label class="navLink" for="soustitre" style="color: #f9b507;">Sous-Titre</label>
		    						<input class="form-control" type="text" name="soustitre" required>
		    						
                                    <label class="navLink" for="description" style="color: #f9b507;">Description</label>
		    						<textarea class="form-control" type="text" name="description" required></textarea>

                                    <label class="navLink" for="image" style="color: #f9b507;">Image</label>
		    						<input class="form-control" type="file" name="image" required>
		    						
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

        <script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('asset/js/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('asset/js/validate.js'); ?>"></script>
	</body>
</html>
