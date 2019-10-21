<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="config.css"/>
	<title>
		titre <?php echo "test"; ?>
	</title>
</head>
<body>
	<h1 style="text-align: center;font-size: 450%;">MASHAPP</h1>
	<form class='superform centered' action="thanks.php" method="post" enctype="multipart/form-data">
		<h2>Informations parrains</h2>
		Enter your name: *<br>
		<input type="text" name="name" class="inputtext required" /><br>
		Enter your surname:*<br>
		<input type="text" name="surname" class="inputtext required" /><br>
		Enter your birth day: <br>
		<input type="date" name="date"><br>
		What is your language of expression ?<br>
		<input type="radio" name="language" >English<br>
		<input type="radio" name="language">French<br>
		Which is the region where you studied ?
		<select name="choix">
    		<option value="Center">Center</option>
    		<option value="Littoral">Littoral</option>
    		<option value="Adamaoua">Adamaoua</option>
    		<option value="North">North</option>
    		<option value="Far North">Far North</option>
    		<option value="East">East</option>
    		<option value="South East">South East</option>
    		<option value="West">West</option>
    		<option value="South West">South West</option>
    		<option value="North West">North West</option>
		</select>
		<br>
		What are your favorite sports?
		<br>
		<input type="checkbox" name="case" id="case" value="Football" /> Football <br>
		<input type="checkbox" name="case" id="case" value="Basketball" /> Basketball <br>
		<input type="checkbox" name="case" id="case" value="Echecs" />Echecs<br>
		<input type="checkbox" name="case" id="case" value="Volley" />  Volley<br>
		<br>
		Please provide a picture of you *<br>
		<input type="file" name="picture"><br><br><br>
		<input type="submit" name="submit" value="valider" style="font-size: 150%">
	</form> </p>
</body>
</html>