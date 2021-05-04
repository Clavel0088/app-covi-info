<!DOCTYPE html>
<html>
	<head>
		<title>Ajout actualité</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
	  	<link rel="stylesheet" href="<?php echo base_url('asset/css/login.css'); ?>">
	  	<link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.css'); ?>">
	</head>
	<body>
		<?php if($actubyId!=null){ ?>
		<div class="container-fluid ">
				<div class="row" >
					<div class="col-md-2"></div>
		    		<div class="col-md-8 block-center" style="background-color:white;border-radius:2%;margin-right:3%;" >
		    				<form class="form" action="<?php echo base_url('update?id='.$actubyId['id']); ?>" method="POST">
		    					<h3 class="text-center text-info">Ajout nouveau</h3>
		    					<div class="form-group">
                                
                                    <label class="navLink" for="motcle" style="color: #f9b507;">Mot(s) clé(s)</label>
		    						<input class="form-control" type="text" name="mot_cle" id="mot_cle"  required/>
                                    <input class="btn btn-info b
		    						tn-md" type="button" value="ajouter" onclick="ajoutMotCle()" />
                                    <input id="inputMotCle" name="motsCles" type="hidden"/>
                                    <div id="motCleContainer"></div>
                                    

		    						<label class="navLink" for="titre" style="color: #f9b507;">Titre</label>
		    						<input class="form-control" type="text" name="titre" value="<?= $actubyId['titre'] ?>" required>
		    		
		    						<label class="navLink" for="soustitre" style="color: #f9b507;">Sous-Titre</label>
		    						<input class="form-control" type="text" name="soustitre" value="<?= $actubyId['sousTitre'] ?>" required>
		    						
                                    <label class="navLink" for="description" style="color: #f9b507;">Description</label>

		    						<input class="form-control" type="text" name="description" value="<?= $actubyId['description'] ?>" required/>

                                    <label class="navLink" for="descriptionimage" style="color: #f9b507;">Description Image</label>
		    						<input class="form-control" type="text" name="descriptionimage" value="<?= $actubyId['descriptionimage'] ?>" required>
		    						
                                    <label class="navLink" for="image" style="color: #f9b507;">Image</label>
		    						<input class="form-control" type="file" name="image" value="<?= $actubyId['image'] ?>" required>
		    						
		    					 	<br>
		    						<input class="btn btn-info b
		    						tn-md" type="submit" value="Enregistrer">
                                    <p><?php echo $message;?></p>
		    					</div>
		    				</form>
		    			</div>
		    			<div class="col-md-2"></div>
		    		</div> 
		</div>
	<?php } else{?>
		<div class="container-fluid ">
				<div class="row">
					<div class="col-md-2"></div>
		    		<div class="col-md-8 block-center" style="background-color:white;border-radius:2%;margin-right:3%;" >
		    				<form class="form" action="<?php echo base_url('/actus-save'); ?>" method="POST">
		    					<h3 class="text-center text-info">Ajout nouveau</h3>
		    					<div class="form-group">
                                
                                    <label class="navLink" for="motcle" style="color: #f9b507;">Mot(s) clé(s)</label>
		    						<input class="form-control" type="text" name="mot_cle" id="mot_cle" required/>
                                    <input class="btn btn-info b
		    						tn-md" type="button" value="ajouter" onclick="ajoutMotCle()" />
                                    <input id="inputMotCle" name="motsCles" type="hidden"/>
                                    <div id="motCleContainer"></div>
                                    

		    						<label class="navLink" for="titre" style="color: #f9b507;">Titre</label>
		    						<input class="form-control" type="text" name="titre" required>
		    		
		    						<label class="navLink" for="soustitre" style="color: #f9b507;">Sous-Titre</label>
		    						<input class="form-control" type="text" name="soustitre" required>
		    						
                                    <label class="navLink" for="description" style="color: #f9b507;">Description</label>
		    						<input class="form-control" type="text" name="description" required/>

                                    <label class="navLink" for="descriptionimage" style="color: #f9b507;">Description Image</label>
		    						<input class="form-control" type="text" name="descriptionimage" required>
		    						
                                    <label class="navLink" for="image" style="color: #f9b507;">Image</label>
		    						<input class="form-control" type="file" name="image" required>
		    						
		    					 	<br>
		    						<input class="btn btn-info b
		    						tn-md" type="submit" value="Enregistrer">
                                    <p><?php echo $message;?></p>
		    					</div>
		    				</form>
		    			</div>
		    			<div class="col-md-2"></div>
		    		</div> 
		    		<div class="row" style="margin-top: 5%;">
		    		<div class="col-md-2"></div> 
					<div class="col-md-8 block-center" style="background-color:white;border-radius:2%;">
					<h3 class="text-center text-info">Liste des actualités</h3>
					<table class="table">
						<th>Titre</th>
						<th>Sous-titre</th>
						<th>Description image</th>
						<th>Mot clés</th>
						<?php if($listeActus != null){
							foreach($listeActus as $row){?>
						<tr>
							<td><?php echo $row['titre'];?></td>
							<td><?php echo $row['sousTitre'];?></td>
							<td><?php echo $row['descriptionimage'];?></td>
							<td><?php echo $motCles;?></td>
							<td><a href="<?php echo base_url('/updatePage?id='.$row['id']); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a></td>
							<td><button class="btn btn-danger btn-xs" onclick="return deleteActu(<?=$row['id'];?>);"><i class="fa fa-trash-o "></i></button></td>
						<tr>
						<?php } } ?>
					</table>			  
					</div>
					<div class="col-md-2"></div>    
				</div>	
		</div>	
	<?php }?>


         <script src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('asset/js/jquery.js'); ?>"></script>
		<script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('asset/js/validate.js'); ?>"></script>

		<script>
			
			$( document ).ready(function() {
				//priceBanniere = <?php echo $keyWords; ?>;
				<?php if(!empty($keyWords)){ ?> 

					//alert("misy ----------");
					var jArray = <?php echo json_encode($keyWords); ?>;

					//alert("222 ----------");
						for(var i=0; i<jArray.length; i++){
							//alert("boucle ----------");
							
							motCleArray.push(jArray[i].mot);
							initMotcleInput();
    						initMotCleContainer();
						}
				<?php
				}?>;
			});
		</script>
	</body>
</html>
