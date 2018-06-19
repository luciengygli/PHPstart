<!DOCTYPE HTML>
<html>
	<head>
		<title>Test</title>
	</head>
	<body>
		<?php
			function check($s) {
				if(isset($_POST[$s]) && is_string($_POST[$s])) {
					return htmlspecialchars($_POST[$s]);
				}else{
					return "";
				}
			}
			
			$done = true;
			
			foreach($_POST as $key => $value) {
				if(check($key) == ""){
					$done = false;
				}
			}
			
			if(check("Submit") == "Abschliessen" && $done == true) {
				$benutzer = check("Benutzer");
				$passwort = check("Passwort");
				$geschlecht = check("Geschlecht");
				$land = check("Land");
				$check = check("AGB");
				
				echo("Der Benutzer mit dem Namen " . $benutzer . " hat sich mit dem Passwort " . $passwort . " angemeldet. <br />");
				if($geschlecht == "m"){
					echo("Er kommt aus dem Land namens " . $land . " und hat die AGB ");
				}else{
					echo("Sie kommt aus dem Land namens " . $land . " und hat die AGB ");
				}
				if($check == "ok"){
					echo("akzeptiert.");
				}else{
					echo("nicht akzeptiert.");
				}
			}else{
		?>
		
		<form action="" method="post">
			Benutzername: <input type="text" name="Benutzer" /><br />
			Passwort: <input type="password" name="Passwort" /><br />
			Geschlecht: <input type="radio" name="Geschlecht" value="m"/>männlich
			<input type="radio" name="Geschlecht" value="w"/>weiblich<br />
			Land: 
			<select name="Land" size="3">
				<option value="Schweiz">Schweiz</option>
				<option value="Deutschland">Deutschland</option>
				<option value="Oesterreich">Oesterreich</option>
			</select><br />
			<input type="checkbox" name="AGB" value="ok" />Ich habe die AGBs gelesen.<br />
			<input type="submit" value="Abschliessen" name="Submit"/>
			
			<?php
				}
				
			//mysqli_connect("localhost", "root", "", "datenbankname"); für connection_aborted
			//mysqli_query($connection, $command); für command
			//für escaping: mysqli_real_escape_string($connection, $text);
			//für hashing: sha1($text);
			//für auslesen von allen datensätzen: while($zeile = mysqli_fetch_assoc($zeiger_auf_daten))
			//für schliessen: mysqli_close()
				
			?>
			
		</form>
	</body>
</html>