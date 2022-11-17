<?php
	$pageTitle = "POUŽIVATELIA";

	require("includes/header.html");
	
	require("includes/connect.php");

	$result = mysqli_query($dbc, "SELECT user.IDuser, user.username, user.meno, user.priezvisko, mesto.nazov FROM user JOIN mesto ON user.IDmesto = mesto.IDmesto");
	
	printf("\n<table>\n");
	
	printf("\t<tr>\n");
	printf("\t\t<th>ID</th>\n");
	printf("\t\t<th>Username</th>\n");
	printf("\t\t<th>Meno</th>\n");
	printf("\t\t<th>Priezvisko</th>\n");
	printf("\t\t<th>Mesto</th>\n");
	printf("\t\t<th>DELETE</th>\n");
	printf("\t\t<th>EDIT</th>\n");
	printf("\t</tr>\n");
	
	while($row = mysqli_fetch_assoc($result)){
		printf("\t<tr>\n");
		printf("\t\t<td>%s</td>\n", $row["IDuser"]);
		printf("\t\t<td>%s</td>\n", $row["username"]);
		printf("\t\t<td>%s</td>\n", $row["meno"]);
		printf("\t\t<td>%s</td>\n", $row["priezvisko"]);
		printf("\t\t<td>%s</td>\n", $row["nazov"]);
		if($_SESSION['username'] == $row['username'] || $_SESSION['isAdmin'] == 1){
			printf("\t\t 
				<form name='form' action='delete.php' method='POST'>
					<input type='hidden' name='id' value='%s'/>
					<td><button type='submit' name='delete'>DELETE</button></td>
				</form>",  $row["IDuser"]);
			printf("\t\t 
				<form name='form2' action='table.php' method='POST'>
					<input type='hidden' name='id' value='%s'/>
					<input type='hidden' name='meno' value='%s'/>
					<input type='hidden' name='priezvisko' value='%s'/>
					<td><button type='submit' name='edit'>EDIT</button></td>
				</form>",  $row["IDuser"], $row["meno"], $row["priezvisko"]);
			}
		printf("\t</tr>\n");
	}
	printf("</table>\n");
	
	if(isset($_POST['id'])){
		$id = $_POST["id"];
		$meno = $_POST["meno"];
		$priezvisko = $_POST["priezvisko"];
		printf("
		<form name='Formular' method='POST' action='edit.php'>			
			<input type='hidden' name='id' value='%s'>
			<label for='meno'>Meno:</label>
			<input type='text' name='meno' id='meno' placeholder='%s'>
					
			<br><br>
			<label for='priezvisko'>Priezvisko:</label>
			<input type='text' name='priezvisko' placeholder='%s'>
				
			<br><br>
			<label for='mesto'>Bydlisko:</label>
			<select name='mesto'>
				<option value='1'>Košice</option>
				<option value='2'>Prešov</option>
				<option value='3'>Bratislava</option>
			</select>
			<br><br>
			<input type='submit' name='update' value='ZMENIŤ'>
		</form>", $id, $meno, $priezvisko);
	}
	
	mysqli_free_result($result);
	mysqli_close($dbc);
	
	require("includes/footer.html");
	
?>