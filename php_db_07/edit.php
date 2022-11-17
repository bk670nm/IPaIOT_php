<?php
	require("includes/connect.php");

    $pageTitle = "Edit";
    require("includes/header.html");

    $id = $_POST["id"];
	$meno = $_POST["meno"];
	$priezvisko = $_POST["priezvisko"];
	$mesto = $_POST["mesto"];
	
	$meno = preg_replace("/[^a-zA-Z]+/", "", $_POST['meno']);
	$priezvisko = preg_replace("/[^a-zA-Z]+/", "", $_POST['priezvisko']);
	
	if(empty($meno)){
		echo "<h2>Neplatne meno!<h2>\n";	
	}
	else if(empty($priezvisko)){
		echo "<h2>Neplatne priezvisko!<h2>\n";
	}
	else{
		//$query = "UPDATE user SET meno='$meno', priezvisko='$priezvisko' WHERE IDuser='$id'";
    
		$query =  mysqli_stmt_init($dbc);
		mysqli_stmt_prepare($query, "UPDATE user SET meno=?, priezvisko=?, IDmesto=? WHERE IDuser=?");
		mysqli_stmt_bind_param($query, "ssii", $meno, $priezvisko, $mesto ,$id);
	
		mysqli_stmt_execute($query);
		
		echo "<h2>Úspešne zmenené!<h2>\n";
		//mysqli_query($dbc, $query);
	}
	
	mysqli_close($dbc);
	
	header("Refresh:2; table.php");
	
	require("includes/footer.html");



?>

