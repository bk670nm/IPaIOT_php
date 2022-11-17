<?php
	$pageTitle = "ĎAKUJEME";
	require("includes/header.html");
	require("includes/connect.php");
	/*
	$query = "CREATE TABLE user(
		IDuser INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
		username VARCHAR(100) NOT NULL,
		password VARCHAR(100) NOT NULL,
		meno VARCHAR(45) NOT NULL,
		priezvisko VARCHAR(45) NOT NULL,
		IDmesto INT UNSIGNED NOT NULL,
		FOREIGN KEY(IDmesto) REFERENCES mesto(IDmesto)
	)ENGINE=InnoDB";
	
	mysqli_query($dbc, $query);
	
	$query = "CREATE TABLE mesto(
		IDmesto INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
		nazov VARCHAR(45) NOT NULL
	)ENGINE=InnoDB";
	*/
	
	$password = $_POST['password'];
	if($password == $_POST['confirmpassword'] && !empty($password)){
		
		$username = preg_replace("/[^a-zA-Z]+/", "", $_POST['username']);
		$meno = preg_replace("/[^a-zA-Z]+/", "", $_POST['meno']);
		$priezvisko = preg_replace("/[^a-zA-Z]+/", "", $_POST['priezvisko']);
		$idmesto = $_POST['mesto'];
		
		if(empty($username) || empty($meno) || empty($priezvisko)){
			echo "\t<h1>Zadali ste neplatne informácie<h1>\n";
			//header( "Refresh:3; index.php");
		}
		else{
			echo "\t<h1>ĎAKUJEME za Vašu registráciu<h1>\n";
		
			echo "\t<h2>Vaše meno a priezvisko: ";
			echo $meno . " " .$priezvisko . "<h2>\n";
			
			$password = password_hash($password, PASSWORD_DEFAULT);
			
			$query =  mysqli_stmt_init($dbc);
			mysqli_stmt_prepare($query, "INSERT INTO user VALUES (0, ?, ?, ?, ?, 0, ?)");
			mysqli_stmt_bind_param($query, "ssssi", $username, $password, $meno, $priezvisko, $idmesto);
			
			mysqli_stmt_execute($query);
			//header( "Refresh:3; index.php");
		}
		/*
		
		if(empty($meno)){
			echo "Nezadali ste meno!<h2>\n";	
		}
		else if(empty($priezvisko)){
			echo "Nezadali ste priezvisko!<h2>\n";
		}
		else{
			$meno = preg_replace("/[^a-zA-Z]+/", "", $_POST['meno']);
			$priezvisko = preg_replace("/[^a-zA-Z]+/", "", $_POST['priezvisko']);
			$idmesto = $_POST['mesto'];
			/*
			$query = "INSERT INTO user VALUES (0, '" . $meno . "', '" . $priezvisko . "', )";
			
			mysqli_query($dbc, $query);
			*//*
			echo $meno . " " .$priezvisko . "<h2>\n";
			
			$query = "SELECT * FROM mesto WHERE idmesto = '$idmesto'";
			$result = mysqli_query($dbc, $query);
			$row = mysqli_fetch_assoc($result);
			
			printf("\t\t<h2>Vaše bydlisko: %s<h2>\n", $row["nazov"]);
			
			$query =  mysqli_stmt_init($dbc);
			mysqli_stmt_prepare($query, "INSERT INTO user VALUES (0, ?, ?, ?)");
			mysqli_stmt_bind_param($query, "ssi", $meno, $priezvisko, $idmesto);
		
			mysqli_stmt_execute($query);
		}
		*/
	}
	else{
		echo "\t<h1>Hesla neboli zadané alebo nie sú zhodné<h1>\n";
		//header( "Refresh:3; index.php");
	}

	echo "\t<h5>Budete presmerovany za 3 sekundy<h5>";

	mysqli_close($dbc);
	
	require("includes/footer.html");
	
	header( "Refresh:3; index.php");
?>