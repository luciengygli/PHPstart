<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
		<script src="jquery-3.3.1.js" type="text/javascript"></script>
		<script src="js.js" type="text/javascript"></script>
	</head>
	<body>

		<input type="button" value="Formular" id="Button"/>
		<p id="yeet">meh</p>
		<form action="" method="post">
			<input type="text" name="Benutzer" /><br />
			<input type="password" name="Passwort" /><br />
			<input type="radio" name="Geschlecht" value="m"/><br />
			<input type="radio" name="Geschlecht" value="w"/><br />
			<select name="Land" size="3">
				<option value="D">D</option>
				<option value="CH">CH</option>
				<option value="A">A</option>
			</select><br />
			<input type="checkbox" name="AGB" value="ok" /><br />
			<input type="submit" value="Abschliessen" name="Submit" />
		</form>
		<?php
			$var = "mama";
			$huh = "sita";
			echo $var . " " . $huh;
			
			function holeWert($schluessel) {
				if(isset($_POST[$schluessel]) && is_string($_POST[$schluessel])) {
					return htmlspecialchars($_POST[$schluessel]);
				}else{
					return "";
				}
			}
			
			
			if(holeWert("Submit") == "Abschliessen") {
				$benutzer = holeWert("Benutzer");
				$password = holeWert("Passwort");
				$geschlecht = holeWert("Geschlecht");
				$land = holeWert("Land");
				$agb = holeWert("AGB");
				$submit = $_POST["Submit"];
			
				
				echo($benutzer . $password . $geschlecht . $land);
				if($agb == "ok") {
					echo("ok");
				}else{
					echo("not ok");
				}
			}
			
			//mysqli_connect("localhost", "root", "", "datenbankname"); für connection_aborted
			//mysqli_query($connection, $command); für command
			//für escaping: mysqli_real_escape_string($connection, $text);
			//für hashing: sha1($text);
			//für auslesen von allen datensätzen: while($zeile = mysqli_fetch_assoc($zeiger_auf_daten))
			//für schliessen: mysqli_close()
		?>
	</body>
</html>
