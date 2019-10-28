<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="config.css"/>
	<title>
		MASHAPP
	</title>
</head>
<body>
	<div style="margin:0 auto">
	<h1 style="text-align: center;font-size: 450%;">MASHAPP</h1>
	<br>
	<form class='superform centered' action="thanks.php" method="post" enctype="multipart/form-data">
		<h2>Informations parrains</h2>
		Enter your name: *<br>
		<input type="text" name="nom" class="inputtext required" /><br>
		Enter your surname:*<br>
		<input type="text" name="prenom" class="inputtext required" /><br>
		Enter your birth day: <br>
		<input type="date" name="date"><br>
		What is(are) your language(s) of expression ?<br>
		<input type="checkbox" name="langues[]" value="anglais" >English<br>
		<input type="checkbox" name="langues[]" value ="francais">French<br>
		Which is the region where you studied ?
		<select name="region">
    		<option name="region" value="Center">Center</option>
    		<option name="region" value="Littoral">Littoral</option>
    		<option name="region" value="Adamaoua">Adamaoua</option>
    		<option name="region" value="North">North</option>
    		<option name="region" value="Far North">Far North</option>
    		<option name="region" value="East">East</option>
    		<option name="region" value="South East">South East</option>
    		<option name="region" value="West">West</option>
    		<option name="region" value="South West">South West</option>
    		<option name="region" value="North West">North West</option>
		</select>
		<br>
		What are your favorite sports?
		<br>
		<input type="checkbox" name="sports[]" id="case" value="Football" /> Football <br>
		<input type="checkbox" name="sports[]" id="case" value="Basketball" /> Basketball <br>
		<input type="checkbox" name="sports[]" id="case" value="Echecs" />Echecs<br>
		<input type="checkbox" name="sports[]" id="case" value="Volley" />  Volley<br>
		<input type="checkbox" name="sports[]" id="case" value="Natation" />  Volley<br>
		<br>
		Please provide a picture of you *<br>
		<input type="file" name="picture"><br><br><br>
		<input type="submit" name="submit" value="valider" style="font-size: 150%">
	</form> </p>
	</div>
</body>
</html>