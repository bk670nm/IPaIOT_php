<?php
	$pageTitle = "ĎAKUJEME";
	require("includes/header.html");
	require("includes/connect.php");
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$query = "SELECT * FROM user WHERE username = '$username'";
	$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_assoc($result);
	
	if(empty($row)){
		echo "\t<h1>Používateľ neexistuje<h1>\n";
		header( "Refresh:3; index.php");
	}
	else{
		if(password_verify($password, $row['password']) == TRUE){
			echo "\t<h1>Uspešné prihlásený<h1>\n";
			header( "Refresh:3; table.php");
			
			session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['isAdmin'] = $row['isAdmin'];
		}
		else{
			echo "\t<h1>Špatne heslo<h1>\n";	
			header( "Refresh:3; index.php");
		}
	}
	
	echo "\t<h5>Budete presmerovany za 3 sekundy<h5>";

	mysqli_close($dbc);
	
	require("includes/footer.html");
	
	//header( "Refresh:3; table.php");
?>