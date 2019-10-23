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
			try
			{
				$path="mashapp_bd";
				$bdd=new PDO("sqlite:".$path);
				//$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//pour pouvoir afficher les erreurs
				$name=$_POST["name"];
				$surname=$_POST["surname"];
				$language=$_POST["language"];
				$date=$_POST["date"];
				//NEVER TRUST USER INPUT
				$statement=$bdd->prepare('INSERT INTO parrains(name,surname,birthday) VALUES ( ?,?,?)');				
				$statement->bindParam(1,$_POST['name']);
				$statement->bindParam(2,$_POST['surname']);
				$statement->bindParam(3,$_POST['date']);
				$statement->execute();
				//fin
			}
			catch (Exception $e) 
			{
				die("ERREUR !".$e->getMessage());
			}
		 ?>
		Thanks for your participation  <?php echo $_POST["surname"]; ?> !!<br>
		Your informations have been registered!
	</p>
	<br>
	<a href="echo.php">see my bd</a> 
	<footer>Mashapp 2019 copyright</footer>
</body>
</html>