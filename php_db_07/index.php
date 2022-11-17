<?php 
	$pageTitle = "REGISTRACIA";
	require("includes/header.html");
?>

<h1>LOGIN</h1>
<form name="Formular" method="POST" action="login.php">			
	
	<label for="meno">Username:</label>
	<input type="text" name="username">
	
	<br><br>
	<label for="meno">Password:</label>
	<input type="password" name="password">
	
	<br><br>
	<input type="submit" value="LOGIN">
</form>

<h1>REGISTRACIA</h1>
<form name="Formular" method="POST" action="register.php">			
	
	<label for="meno">Username:</label>
	<input type="text" name="username">
	
	<br><br>
	<label for="meno">Password:</label>
	<input type="password" name="password">
	
	<br><br>
	<label for="meno">Confirm password:</label>
	<input type="password" name="confirmpassword">
	
	<br><br>
	<label for="meno">Meno:</label>
	<input type="text" name="meno">
			
	<br><br>
	<label for="priezvisko">Priezvisko:</label>
	<input type="text" name="priezvisko">
	
	<br><br>
	<label for="mesto">Bydlisko:</label>
	<select name="mesto">
		<option value="1">Košice</option>
		<option value="2">Prešov</option>
		<option value="3">Bratislava</option>
	</select>
	
	<br><br>
	<input type="submit" value="REGISTER">
</form>

<?php 
	require("includes/footer.html");
?>