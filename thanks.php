<!DOCTYPE html>
<html>
<head>
	<title>
		Thanks
	</title>
	<link rel="stylesheet" type="text/css" href="config.css">
</head>
<body>
	<div style="margin:0 auto">
	<p class="message">
		<?php
			try
			{
				$path="mashapp_bd";
				$bdd=new PDO("sqlite:".$path);
				//$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//pour pouvoir afficher les erreurs
				//NEVER TRUST USER INPUT
				$name=isset($_POST["nom"])?$_POST["nom"]:"null";
				$surname=isset($_POST["prenom"])?$_POST["prenom"]:"null";
				$language=isset($_POST["langues"])?implode(',',$_POST["langues"]):"null";
				$date=isset($_POST["date"])?$date=$_POST["date"]:"null";
				$region=isset($_POST["region"])?$_POST["region"]:"null";
				$sports=(isset($_POST["sports"]))?implode(',',$_POST["sports"]):"null";
				//end
				$statement=$bdd->prepare('INSERT INTO tabletest(nom,prenom,region,sports,langue,date_de_naissance) VALUES (?, ?,?,?,?,?)');				
				$statement->bindParam(1,$name);
				$statement->bindParam(2,$surname);
				$statement->bindParam(3,$region);
				$statement->bindParam(4,$sports);
				$statement->bindParam(5,$language);
				$statement->bindParam(6,$date);
				$statement->execute();
				//fin
			}
			catch (Exception $e) 
			{
				die("ERREUR !".$e->getMessage());
			}
		 ?>
		Thanks for your participation  <?php echo $_POST["prenom"]; ?> !!<br>
		Your informations have been registered!
	</p>
	<br>
	<br>
	<a href="echo.php">Throw a glance at the database</a><br>
	<footer>Mashapp 2019 copyright</footer>
	<div>

</body>
</html>