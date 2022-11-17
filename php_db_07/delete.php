<?php
    require("includes/connect.php");

    $pageTitle = "Delete";
    require("includes/header.html");

    $id = $_POST["id"];
    //$query = "DELETE FROM user WHERE IDuser = '$id'";
	
	$query =  mysqli_stmt_init($dbc);
	mysqli_stmt_prepare($query, "DELETE FROM user WHERE IDuser = ?");
	mysqli_stmt_bind_param($query, "i", $id);
	
	mysqli_stmt_execute($query);
	
	//mysqli_query($dbc, $query);
    
	mysqli_close($dbc);
	
	header("Location: table.php");
	
	require("includes/footer.html");
?>