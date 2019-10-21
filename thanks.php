<!DOCTYPE html>
<html>
<head>
	<title>
		Thanks
	</title>
	<link rel="stylesheet" type="text/css" href="config.css">
</head>
<body>
	<p class="message">
		<?php
			try {
				$bdd=new PDO('mysql:host=localhost;dbname:mashapp_bd','root','');
				$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//pour pouvoir afficher les erreurs
				$name=$_POST["name"];
				$surname=$_POST["surname"];
				$language=$_POST["language"];
				$date=$_POST["date"];
				//changer ceci par une requête preparée : NEVER TRUST USER INPUT
				$donnees=$bdd->query('INSERT INTO mashapp_bd.parrains(name,surname,birthday) VALUES ("'.$name.'","'.$surname.'",STR_TO_DATE("'.$date.'", "%Y-%m-%d"))');
			} catch (Exception $e) {
				die("ERREUR !".$e->getMessage());
			}
		 ?>
		Thanks for your participation  <?php echo $_POST["surname"]; ?> !!<br>
		Your informations have been registered!
	</p>
	<footer>Mashapp 2019 copyright</footer>
</body>
</html>